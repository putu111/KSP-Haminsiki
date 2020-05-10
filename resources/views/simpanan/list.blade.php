@extends('layout.user')

@section('title')
    @lang("Transaction.saving.list")
@endsection

@section('current-page')
    Simpanan
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">@lang("Transaction.saving.list10")</h4>
            <button class="btn-create" id="show-modal" type="button">@lang("Transaction.saving.add")</button>
        </div>
        <div class="table-body">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>@lang("Transaction.saving.number")</th>
                        <th>@lang("Transaction.saving.date")</th>
                        <th>@lang("Transaction.saving.tstore")</th>
                        <th>@lang("Transaction.saving.twithdraw")</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($simpanan_10_hari); $i++)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $simpanan_10_hari[$i]->tanggal }}</td>
                            <td>{{ format_rupiah($simpanan_10_hari[$i]->penyetoran) }}</td>
                            <td>{{ format_rupiah(strstr($simpanan_10_hari[$i]->penarikan, "-") ? substr($simpanan_10_hari[$i]->penarikan, 1) : $simpanan_10_hari[$i]->penarikan) }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal-wrapper" id="modal">
        <div class="outlay"></div>
        <div class="modal">
            <form action="/transaksi/simpanan/create" method="GET">    
                <div class="modal-header">
                    @lang("Transaction.saving.fmem")
                </div>
                <div class="modal-body">
                    <input type="number" name="no_anggota" class="input" placeholder="@lang("Transaction.saving.txtmemid")" />
                </div>
                <div class="modal-footer">
                    <button class="btn-cancel" id="close-modal" type="button">@lang("Transaction.basic.cancel")</button>
                    <div class="footer-separator"></div>
                    <button class="btn-create" type="submit">@lang("Transaction.basic.search")</button>
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
    </script>

    <script>
        var show = false;
        var menu = "";

        $(document).click(function(){
            if(show){
                menu.fadeOut(0, function(){
                    show = false;
                    menu = "";
                });
            }
        });
        
        $('.btn-more').click(function(){
            if(!show){
                menu = $(this).siblings('.menu');
                menu.fadeIn("fast", function(){
                    show = true;
                });
            }    
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