<?php

namespace App\Http\Controllers;

use App\User;
use App\Simpanan;
use App\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = Session::all();
        if(isset($session['user'])){
            $user = User::find($session['user']);
            $simpanan_10_hari = array();

            for ($i=0; $i < 10; $i++) {
                $date = date_create("now");
                $date = date("Y-m-d", strtotime(date_sub($date, date_interval_create_from_date_string("$i days"))->format("Y-m-d")));
                $penyetoran_10_hari = Simpanan::where("jenis_transaksi", 1)->whereDate("tanggal", $date)->sum("nominal_transaksi");
                $penarikan_10_hari = Simpanan::where("jenis_transaksi", 2)->whereDate("tanggal", $date)->sum("nominal_transaksi");
                $object = (object) ["tanggal" => $date, "penyetoran" => $penyetoran_10_hari, "penarikan" => $penarikan_10_hari];
                array_push($simpanan_10_hari, $object);
            }
            
            return view("simpanan.list", compact("user", "simpanan_10_hari"));
        } else {
            return redirect("/sign-in");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $session = Session::all();
        if(isset($session['user'])){
            $user = User::find($session['user']);
            $anggota = Anggota::where("status_aktif", 1)->where("no_anggota", $request->no_anggota)->first();

            if($anggota){
                $saldo = Simpanan::where("anggota_id", $anggota->id)->sum("nominal_transaksi");
                return view("simpanan.create", compact("user", "anggota", "saldo"));
            } else {
                return redirect()->action('SimpananController@index')->with("error", "Tidak ditemukan anggota yang sesuai");
            }
        } else {
            return redirect("/sign-in");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request->jenis_transaksi) && isset($request->nominal_transaksi)){
            $saldo = Simpanan::where("anggota_id", $request->anggota_id)->sum("nominal_transaksi");
            $nominal_transaksi = str_replace(".", "", $request->nominal_transaksi);

            if(($saldo >= $nominal_transaksi && $request->jenis_transaksi == 2) || $request->jenis_transaksi == 1){
                date_default_timezone_set('Asia/Kuala_Lumpur');
                $simpanan = new Simpanan;
                $simpanan->anggota_id = $request->anggota_id;
                $simpanan->tanggal = date('Y-m-d H:i:s');
                $simpanan->jenis_transaksi = $request->jenis_transaksi;
                $simpanan->nominal_transaksi = $request->jenis_transaksi == 1 ? $nominal_transaksi : -1 * $nominal_transaksi;
                $simpanan->id_user = Session::get('user');

                $simpanan->save();

                return redirect()->action('AnggotaController@show', ["id" => $request->anggota_id])->with("success", "Berhasil melakukan penyetoran");
            } else {
                $no_anggota = Anggota::find($request->anggota_id)->no_anggota;
                return redirect("/transaksi/simpanan/create?no_anggota=$no_anggota")->with("error", "Gagal. Saldo kurang");
            }
        } else {
            $no_anggota = Anggota::find($request->anggota_id)->no_anggota;
            return redirect("/transaksi/simpanan/create?no_anggota=$no_anggota")->with("error", "Mohon isi semua form");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
