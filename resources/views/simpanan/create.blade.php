@extends('layout.detail-anggota')

@section('title')
    @lang("Transaction.saving.add")
@endsection

@section('current-page')
    Simpanan
@endsection

@section('additional-content')
    <form method="POST" action="/transaksi/simpanan">
        @csrf
        <div class="additional-wrapper">
            <div class="additional-header">
                <div class="additional-header-text">@lang("Transaction.saving.ftrans")</div>
            </div>
            <div class="additional-body">
                <input type="hidden" name="anggota_id" value="{{ $anggota->id }}">
                <div class="additional-data">
                    <span class="additional-data-label">@lang("Transaction.saving.date")</span>
                    <div class="additional-data-input">{{date('Y-m-d')}}</div>
                </div>
                <div class="additional-data">
                    <span class="additional-data-label">@lang("Transaction.saving.type")</span>
                    <div class="additional-data-radio">
                        <input type="radio" name="jenis_transaksi" value="1" id="penyetoran" />
                        <label for="penyetoran">@lang("Transaction.saving.store")</label>
                        <input type="radio" name="jenis_transaksi" value="2" id="penarikan" />
                        <label for="penarikan">@lang("Transaction.saving.withdraw")</label>
                    </div>
                </div>
                <div class="additional-data">
                    <span class="additional-data-label">@lang("Transaction.saving.amount")</span>
                    <input type="text" name="nominal_transaksi" class="additional-data-input" />
                </div>
            </div>
        </div>

        <div class="detail-footer">
            <a href="/transaksi/simpanan" class="btn-cancel"><i class="fa fa-undo"></i>@lang("Transaction.basic.back")</a>
            <button type="button" id="show-modal" class="btn-create"><i class="fa fa-check"></i>@lang("Transaction.basic.send")</button>
        </div>

        <div class="modal-wrapper" id="modal">
            <div class="outlay"></div>
            <div class="modal"> 
                <div class="modal-header">
                    @lang("Transaction.saving.conf")
                </div>
                <div class="modal-body">
                    <p class="modal-text">@lang("Transaction.saving.txtconf")</p>
                </div>
                <div class="modal-footer">
                    <button class="btn-cancel" id="close-modal" type="button">@lang("Transaction.basic.back")</button>
                    <div class="footer-separator"></div>
                    <button class="btn-create" type="submit">@lang("Transaction.basic.sure")</button>
                </div>
            </div>
        </div>
    </form>
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

        $("input[name='nominal_transaksi']").keydown(function(e){
            let key = e.keyCode;
            if((key < 48 || key > 57) && (key < 96 || key > 105) && (key < 37 || key > 40) && (key !== 8 && key !== 13 && key !== 9 && key !== 116)){
                e.preventDefault();
            }
        });

        $("input[name='nominal_transaksi']").keyup(function(){
            if($(this).val().length === 0){
                $(this).val(0);
            } else {
                $(this).val(formatRupiah($(this).val()));
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