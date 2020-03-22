<?php

namespace App\Http\Controllers;

use App\User;
use App\Anggota;
use App\Simpanan;
use App\BungaSimpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $session = Session::all();
        if(!isset($session['user'])){
            return view("user.sign-in");    
        } else {
            return redirect()->action('UserController@home');
        }
    }

    public function login(Request $request)
    {
        if(isset($request->username) && isset($request->password)){
            $user = User::where('username', $request->username)->first();
            if($user) {
                if(Hash::check($request->password, $user->password)){
                    Session::put('user', $user->id);
                    return redirect("/")->with("success", "Sign in berhasil");
                } else {
                    return redirect()->action("UserController@index")->with("error", "Username atau password salah");
                }
            } else {
                return redirect()->action("UserController@index")->with("error", "Username atau password salah");
            }
        } else {
            return redirect()->action("UserController@index")->with("error", "Mohon isikan semua form");
        }
    }

    public function list()
    {
        $session = Session::all();
        if(isset($session['user'])){
            $user = User::find($session['user']);
            $users = User::get();

            return view("user.list", compact("user", "users"));
        } else {
            return redirect("/sign-in");
        }
    }

    public function create()
    {
        $session = Session::all();
        if(isset($session['user'])){
            $user = User::find($session['user']);

            return view("user.create", compact("user"));
        } else {
            return redirect("/sign-in");
        }
    }

    public function register(Request $request)
    {
        if(isset($request->nik) && isset($request->nama) && isset($request->username) && isset($request->password) && isset($request->confirm_password) && isset($request->role)){
            $count = User::where('username', $request->username)->count();
            
            if($count == 0){
                if($request->password == $request->confirm_password){
                    $user = new User;
                    $user->nik = $request->nik;
                    $user->nama = $request->nama;
                    $user->username = $request->username;
                    $user->password = Hash::make($request->password);
                    $user->user_role = $request->role;
                    $user->status_aktif = 1;

                    $user->save();

                    return redirect()->action("UserController@list")->with("success", "Berhasil menambahkan user");
                } else {
                    return redirect()->action("UserController@create")->with("error", "Password tidak sama");
                }
            } else {
                return redirect()->action("UserController@create")->with("error", "Username telah terdaftar");
            }
        } else {
            return redirect()->action("UserController@create")->with("error", "Mohon isikan semua form");
        }
    }

    public function show($id)
    {
        $session = Session::all();
        if(isset($session['user'])){
            $user = User::find($session['user']);
            $current_user = User::find($id);
            $transaksi = Simpanan::where("id_user", $id)->orderBy("tanggal", "DESC")->take(10)->get();
            $no_anggota = array();

            for ($i=0; $i < sizeof($transaksi); $i++) { 
                $anggota = Anggota::find($transaksi[$i]->anggota_id);
                array_push($no_anggota, $anggota->no_anggota);
            }

            return view("user.view", compact("user", "current_user", "no_anggota", "transaksi"));
        } else {
            return redirect("/sign-in");
        }
    }

    public function home()
    {
        $session = Session::all();
        if(isset($session['user'])){
            $year = date('Y');
            $month = date('n');
            $user = User::find($session['user']);
            $totalAnggota = Anggota::where("status_aktif", 1)->count();
            $totalSimpanan = Simpanan::where("jenis_transaksi", 1)->whereMonth('tanggal', $month)->sum('nominal_transaksi');
            $bungaSimpanan = BungaSimpanan::whereDate('tanggal_mulai_berlaku', "<=", date("Y-m-d"))->orderBy("tanggal_mulai_berlaku", "DESC")->first();
            $simpanan = array();

            for ($i=1; $i<=12 ; $i++) { 
                $simpananPerBulan = Simpanan::whereMonth('tanggal', $i)->whereYear('tanggal', $year)->sum('nominal_transaksi');
                array_push($simpanan, $simpananPerBulan);
            }

            return view("user.dashboard", compact("user", "totalAnggota", "totalSimpanan", "bungaSimpanan", "simpanan"));
        } else {
            return redirect("/sign-in");
        }
    }

    public function edit($id)
    {
        $session = Session::all();
        if(isset($session['user'])){
            $user = User::find($session['user']);
            $current_user = User::find($id);

            return view("user.edit", compact("user", "current_user"));
        } else {
            return redirect("/sign-in");
        }
    }

    public function update(Request $request, $id)
    {
        if(isset($request->nik) && isset($request->nama) && isset($request->role)){
            $user = User::find($id);
            $user->nik = $request->nik;
            $user->nama = $request->nama;
            $user->user_role = $request->role;
            $user->save();

            return redirect()->action("UserController@list")->with("success", "Berhasil mengubah data user");
        } else {
            return redirect()->action("UserController@edit", ["id" => $id])->with("error", "Mohon isikan semua form");
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->status_aktif = 2;

        $user->save();
        
        return redirect()->action("UserController@list")->with("success", "Berhasil menonaktifkan user");
    }

    public function destroy()
    {
        Session::forget('user');
        return redirect("/sign-in")->with("success", "Sign out berhasil");
    }
}
