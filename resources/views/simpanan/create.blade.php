@extends('layout.detail-anggota')

@section('title')
    Tambah Simpanan
@endsection

@section('current-page')
    Simpanan
@endsection

@section('additional-content')
    <form method="POST" action="/transaksi/simpanan">
        @csrf
        <div class="additional-wrapper">
            <div class="additional-header">
                <div class="additional-header-text">Form Transaksi</div>
            </div>
            <div class="additional-body">
                <input type="hidden" name="anggota_id" value="{{ $anggota->id }}">
                <div class="additional-data">
                    <span class="additional-data-label">Tanggal</span>
                    <div class="additional-data-input">{{date('Y-m-d')}}</div>
                </div>
                <div class="additional-data">
                    <span class="additional-data-label">Jenis Transaksi</span>
                    <div class="additional-data-radio">
                        <input type="radio" name="jenis_transaksi" value="1" id="penyetoran" />
                        <label for="penyetoran">Penyetoran</label>
                        <input type="radio" name="jenis_transaksi" value="2" id="penarikan" />
                        <label for="penarikan">Penarikan</label>
                    </div>
                </div>
                <div class="additional-data">
                    <span class="additional-data-label">Nominal</span>
                    <input type="text" name="nominal_transaksi" class="additional-data-input" />
                </div>
            </div>
        </div>

        <div class="detail-footer">
            <a href="/transaksi/simpanan" class="btn-cancel"><i class="fa fa-undo"></i>Kembali</a>
            <button type="button" id="show-modal" class="btn-create"><i class="fa fa-check"></i>Submit</button>
        </div>

        <div class="modal-wrapper" id="modal">
            <div class="outlay"></div>
            <div class="modal"> 
                <div class="modal-header">
                    Konfirmasi Transaksi
                </div>
                <div class="modal-body">
                    <p class="modal-text">Apakah Anda yakin ingin melakukan transaksi ini?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn-cancel" id="close-modal" type="button">Batal</button>
                    <div class="footer-separator"></div>
                    <button class="btn-create" type="submit">Yakin</button>
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