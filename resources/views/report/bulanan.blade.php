@extends('layout.user')

@section('title')
    @lang("MasterData.report.repmonth")
@endsection

@section('current-page')
    @lang("MasterData.report.repmonth")
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">@lang("MasterData.report.repmonth")</h4>
            <button class="btn-create" id="show-modal" type="button">@lang("MasterData.report.chadate")</button>
        </div>
        <div class="table-body">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>@lang("MasterData.report.num")</th>
                        <th>@lang("MasterData.report.date")</th>
                        <th>@lang("MasterData.report.deb")</th>
                        <th>@lang("MasterData.report.kre")</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < sizeof($tanggal); $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $tanggal[$i] }}</td>
                            <td>{{ format_rupiah(strstr($debit[$i], "-") ? substr($debit[$i], 1) : $debit[$i]) }}</td>
                            <td>{{ format_rupiah($kredit[$i]) }}</td>
                        </tr>
                    @endfor
                    <tr>
                        <td colspan="2">Total</td>
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
            <form action="/report/bulanan" method="GET">    
                <div class="modal-header">
                    @lang("MasterData.report.chadate")
                </div>
                <div class="modal-body">
                    <input type="date" name="tanggal" class="input" placeholder="@lang("MasterData.report.txtdate")" />
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