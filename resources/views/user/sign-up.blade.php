@extends('layout.guest')

@section('title')
    Sign Up
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="tagline">
            <img src="/images/logo.png" alt="Logo" />
            <div class="text">
                <h3 class="text-title">Koperasi</h3>
                <h4 class="text-subtitle">Haminsiki</h4>
            </div>
            <div class="long-line"></div>
            <div class="description">
                <h4 class="description-text">&ldquo;Kami tidak pernah meragukan anggota, <br/>meski permintaannya aneh-aneh&rdquo;</h4>
            </div>
            <div class="small-line"></div>
        </div>
        <div class="form">
            <div class="form-header">
                <h3 class="form-title">
                    <a href="/sign-in" class="non-active">Sign In</a>
                    <span class="separator">or</span>
                    <span class="active">Sign Up</span>
                </h3>
            </div>
            <form action="/sign-up" method="POST" autocomplete="off" id="sign-up">
                @csrf
                
                <div class="form-body">
                    <div class="form-control">
                        <div class="form-label">
                            <label for="username">Username</label>
                        </div>
                        <input type="text" name="username" id="username" class="input" placeholder="Masukkan Username Anda" />
                    </div>
                    <div class="form-control">
                        <div class="form-label">
                            <label for="password">Password</label>
                        </div>
                        <input type="password" name="password" id="password" class="input" placeholder="Masukkan Password Anda" />
                    </div>
                    <div class="form-control">
                        <div class="form-label">
                            <label for="confirm-password">Confirm Password</label>
                        </div>
                        <input type="password" name="confirm-password" id="confirm-password" class="input" placeholder="Masukkan Password Anda Sekali Lagi" />
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="button">Sign Up</button>
                    <p class="form-footer-text">Sudah punya akun?&nbsp;<a href="/" class="link">Sign In</a></p>
                </div>
            </form>
        </div>
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
        $('#sign-up').submit(function(e){
            var username = $('#username').val();
            var password = $('#password').val();
            var confirmPassword = $('#confirm-password').val();

            if(username && password && (password === confirmPassword)){
                return;
            } else {
                e.preventDefault();
                alert("Not Submiting");
            }
        });
    </script>
@endsection