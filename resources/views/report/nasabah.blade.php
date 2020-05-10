@extends('layout.user')

@section('title')
    @lang("MasterData.report.repday")
@endsection

@section('current-page')
    @lang("MasterData.report.repday")
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">@lang("MasterData.report.repmem")</h4>
            <button class="btn-create" id="show-modal" type="button">@lang("MasterData.report.findmem")</button>
        </div>
    </div>

    <div class="modal-wrapper" id="modal">
        <div class="outlay"></div>
        <div class="modal">
            <form action="/report/nasabah" method="POST">    
                @csrf
                
                <div class="modal-header">
                    @lang("MasterData.report.findmem")
                </div>
                <div class="modal-body">
                    <input type="number" name="no_anggota" class="input" placeholder="Masukkan No. Anggota" />
                </div>
                <div class="modal-footer">
                    <button class="btn-cancel" id="close-modal" type="button">@lang("MasterData.basic.cancel")</button>
                    <div class="footer-separator"></div>
                    <button class="btn-create" type="submit">@lang("MasterData.basic.find")</button>
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