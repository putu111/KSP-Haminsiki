@extends('layout.user')

@section('title')
    Profil
@endsection

@section('current-page')
    Profil
@endsection

@section('content')
    <div class="form-wrapper">
        <div class="form-header">
            <h3 class="form-header-text">Edit Profil</h3>
        </div>
        <form action="/profil" method="POST" autocomplete="off" id="edit-profil">
            @csrf

            <div class="form-body">
                <div class="form-control">
                    <div class="form-label">
                        <label for="nik">NIK</label>
                    </div>

                    <input type="text" id="nik" class="input" name="nik" placeholder="masukkan nik anda" value="{{ $user->nik }}" />
                </div>

                <div class="form-control">
                    <div class="form-label">
                        <label for="nama">Nama</label>
                    </div>

                <input type="text" id="nama" class="input" name="nama" placeholder="masukkan nama anda" value="{{ $user->nama }}" />
                </div>

                <div class="form-control">
                    <div class="form-label">
                        <label for="username">Username</label>
                    </div>

                <input type="text" id="username" class="input" name="username" placeholder="masukkan username anda" value="{{ $user->username }}" />
                </div>

                <div class="form-control">
                    <div class="form-label">
                        <label>Role</label>
                    </div>

                    <select id="user-role" name="user_role" class="input">
                        <option value="">None</option>
                        <option value="1" {{ $user->user_role == 1 ? "selected" : ""}}>Pengelola Simpanan</option>
                        <option value="2" {{ $user->user_role == 2 ? "selected" : ""}}>Pengelola Pinjaman</option>
                        <option value="3" {{ $user->user_role == 3 ? "selected" : ""}}>Admin</option>
                    </select>
                </div>
            </div>

            <div class="form-footer">
                <button type="submit" name="submit" class="button">Submit</button>
            </div>
        </form>
    </div>

    <div class="form-wrapper">
        <div class="form-header">
            <h3 class="form-header-text">Edit Password</h3>
        </div>
        <form action="/profil/password" method="POST" autocomplete="off" id="edit-password">
            @csrf

            <div class="form-body">
                <div class="form-control">
                    <div class="form-label">
                        <label for="old-password">Password Lama</label>
                    </div>

                    <input type="password" id="old-password" class="input" name="old_password" placeholder="masukkan password lama anda" />
                </div>

                <div class="form-control">
                    <div class="form-label">
                        <label for="new-password">Password Baru</label>
                    </div>

                    <input type="password" id="new-password" class="input" name="new_password" placeholder="masukkan password baru anda" />
                </div>

                <div class="form-control">
                    <div class="form-label">
                        <label for="confirm-new-password">Confirm Password Baru</label>
                    </div>

                    <input type="password" id="confirm-new-password" class="input" name="confirm_new_password" placeholder="masukkan confirm password baru anda" />
                </div>
            </div>

            <div class="form-footer">
                <button type="submit" name="submit" class="button">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('.notification.visible').animate({
                bottom: "24px"
            }, function() {
                window.setTimeout(function(){
                    $('.notification.visible').animate({
                        bottom: "-75px"
                    });
                }, 3000);
            });
        });
    </script>

    <script>
        $('#edit-profil').submit(function(e){
            var nik = $('#nik').val();
            var nama = $('#nama').val();
            var username = $('#username').val();
            var userRole = $('#user-role').val();

            if(nik && nama && username && userRole){
                return;
            } else {
                e.preventDefault();
                alert("Not Submiting");
            }
        });

        $('#edit-password').submit(function(e){
            var oldPassword = $('#old-password').val();
            var newPassword = $('#new-password').val();
            var confirmNewPassword = $('#confirm-new-password').val();

            if(oldPassword && newPassword && (newPassword === confirmNewPassword)){
                return;
            } else {
                e.preventDefault();
                alert("Not Submiting");
            }
        });
    </script>
@endsection