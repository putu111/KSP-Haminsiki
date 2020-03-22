@extends('layout.user')

@section('title')
    Report Tahunan
@endsection

@section('current-page')
    Report Tahunan
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">Report Tahunan</h4>
            <button class="btn-create" id="show-modal" type="button">Ganti Tanggal</button>
        </div>
        <div class="table-body">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < sizeof($bulan); $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $tahun }}</td>
                            <td>{{ $bulan[$i] }}</td>
                            <td>{{ format_rupiah(strstr($debit[$i], "-") ? substr($debit[$i], 1) : $debit[$i]) }}</td>
                            <td>{{ format_rupiah($kredit[$i]) }}</td>
                        </tr>
                    @endfor
                    <tr>
                        <td colspan="3">Total</td>
                        <td>{{ format_rupiah(strstr($total_debit, "-") ? substr($total_debit, 1) : $total_debit) }}</td>
                        <td>{{ format_rupiah($total_kredit) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal-wrapper" id="modal">
        <div class="outlay"></div>
        <div class="modal">
            <form action="/report/tahunan" method="GET">    
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