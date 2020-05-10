@extends('layout.user')

@section('title')
    Daftar Mutasi
@endsection

@section('current-page')
    Mutasi
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">Daftar Mutasi</h4>
            @if (count($mutasi) > 0)
                @if ((date("t") == date("j")) && ($mutasi[count($mutasi) - 1]->trx_tahun == date("Y") && $mutasi[count($mutasi) - 1]->trx_bulan != date("m")))
                    <form action="/mutasi" method="POST">
                        @csrf

                        <button type="submit" class="btn-create"><i class="fa fa-hourglass-half"></i>Proses Mutasi</button>
                    </form>
                @endif
            @else
                @if(date("t") == date("j"))
                    <form action="/mutasi" method="POST">
                        @csrf

                        <button type="submit" class="btn-create"><i class="fa fa-hourglass-half"></i>Proses Mutasi</button>
                    </form>
                @endif
            @endif
        </div>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Tanggal Mutasi</th>
                    <th>Persentase Bunga</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($mutasi); $i++)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $mutasi[$i]->trx_bulan }}</td>
                        <td>{{ $mutasi[$i]->trx_tahun }}</td>
                        <td>{{ $mutasi[$i]->tanggal_proses }}</td>
                        <td>{{ $mutasi[$i]->persentase_bunga }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
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
@endsection