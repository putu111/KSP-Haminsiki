@extends('layout.user')

@section('title')
    Report Harian
@endsection

@section('current-page')
    Report Harian
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">Report Harian</h4>
            <button class="btn-create" id="show-modal" type="button">Ganti Tanggal</button>
        </div>
        <div class="table-body">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $tanggal }}</td>
                        <td>{{ format_rupiah(strstr($debit, "-") ? substr($debit, 1) : $debit) }}</td>
                        <td>{{ format_rupiah($kredit) }}</td>   
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal-wrapper" id="modal">
        <div class="outlay"></div>
        <div class="modal">
            <form action="/report/harian" method="GET">    
                <div class="modal-header">
                    Ganti Tanggal
                </div>
                <div class="modal-body">
                    <input type="date" name="tanggal" class="input" placeholder="Masukkan Tanggal" />
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