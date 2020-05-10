@extends('layout.user')

@section('title')
    @lang("MasterData.bunga.proc")
@endsection

@section('current-page')
    Bunga Simpanan
@endsection

@section('content')
    <div class="identity">
        <div class="identity-header">
            <h3 class="identity-header-text">@lang("MasterData.bunga.proc")</h3>
        </div>
        <div class="identity-body">
            <div class="identity-data bulan">
                <span class="identity-data-label">@lang("MasterData.basic.mon")</span>
                <span class="identity-data-separator">:</span>
                <span class="identity-data-value">{{ $detail->bulan }}</span>
            </div>
            <div class="identity-data tahun">
                <span class="identity-data-label">@lang("MasterData.basic.yea")</span>
                <span class="identity-data-separator">:</span>
                <span class="identity-data-value">{{ $detail->tahun }}</span>
            </div>
            <div class="identity-data persentase">
                <span class="identity-data-label">@lang("MasterData.bunga.percent")</span>
                <span class="identity-data-separator">:</span>
                <span class="identity-data-value">{{ $detail->persentase_bunga }}%</span>
            </div>
            <div class="identity-data status">
                <span class="identity-data-label">@lang("MasterData.basic.stat")</span>
                <span class="identity-data-separator">:</span>
                <span class="identity-data-value">{{ $detail->status == 0 ? "Belum Diproses" : "Sudah Diproses" }}</span>
            </div>
        </div>
    </div>

    <div class="additional-wrapper">
        <div class="additional-header">
            <h4 class="additional-header-text">@lang("MasterData.bunga.lproc")</h4>
        </div>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>@lang("MasterData.bunga.number")</th>
                    <th>@lang("MasterData.basic.mon")</th>
                    <th>@lang("MasterData.basic.yea")</th>
                    <th>@lang("MasterData.bunga.pdate")</th>
                    <th>@lang("MasterData.bunga.percent")</th>
                    <th>@lang("MasterData.bunga.user")</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($transaksi); $i++)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $transaksi[$i]->trx_bulan }}</td>
                        <td>{{ $transaksi[$i]->trx_tahun }}</td>
                        <td>{{ $transaksi[$i]->tanggal_proses }}</td>
                        <td>{{ $transaksi[$i]->persentase_bunga }}</td>
                        <td>{{ $users[$i] }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

    @if ($detail->status == 0 && date("Y-m-d") == date("Y-m-t"))
        <div class="detail-footer">
            <form action="/transaksi/proses-bunga-simpanan" method="POST">
                @csrf
                <button type="submit" class="btn-create"><i class="fa fa-check"></i>@lang("MasterData.basic.pro")</button>
            </form>
        </div>
    @endif
@endsection