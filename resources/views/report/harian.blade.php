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
            <h4 class="table-header-text">@lang("MasterData.report.repday")</h4>
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