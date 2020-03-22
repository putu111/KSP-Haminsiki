@extends('layout.user')

@section('title')
    Report Nasabah
@endsection

@section('current-page')
    Report Nasabah
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">Report Nasabah</h4>
            <button class="btn-create" id="show-modal" type="button">Cari Nasabah</button>
        </div>
    </div>

    <div class="modal-wrapper" id="modal">
        <div class="outlay"></div>
        <div class="modal">
            <form action="/report/nasabah" method="POST">    
                @csrf
                
                <div class="modal-header">
                    Cari Nasabah
                </div>
                <div class="modal-body">
                    <input type="number" name="no_anggota" class="input" placeholder="Masukkan No. Anggota" />
                </div>
                <div class="modal-footer">
                    <button class="btn-cancel" id="close-modal" type="button">Batal</button>
                    <div class="footer-separator"></div>
                    <button class="btn-create" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
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
        
        $("#show-modal").click(function(){
            $("#modal").fadeIn("fast");
        });

        $("#close-modal").click(function(){
            $("#modal").fadeOut("fast");
        });

        $(".outlay").click(function(){
            $("#modal").fadeOut("fast");
        });
    </script>
@endsection