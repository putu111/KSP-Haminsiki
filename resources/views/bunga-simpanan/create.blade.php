@extends('layout.user')

@section('title')
    @lang("MasterData.bunga.add")
@endsection

@section('current-page')
    Bunga Simpanan
@endsection

@section('content')
    <div class="form-wrapper">
        <div class="form-header">
            <h3 class="form-header-text">@lang("MasterData.bunga.add")</h3>
        </div>
        <form action="/master/bunga-simpanan" method="POST" autocomplete="off" id="tambah-bunga-simpanan" novalidate>
            @csrf

            <div class="form-body">
                <div class="form-control">
                    <div class="form-label">
                        <label for="persentase">@lang("MasterData.bunga.percent")</label>
                    </div>

                    <input type="number" id="persentase" class="input" name="persentase" placeholder="@lang("MasterData.bunga.txtpercent")" />
                </div>

                <div class="form-control">
                    <div class="form-label">
                        <label for="tanggal-mulai-berlaku">@lang("MasterData.bunga.sdate")</label>
                    </div>

                    <input type="date" id="tanggal-mulai-berlaku" class="input" name="tanggal_mulai_berlaku" placeholder="@lang("MasterData.bunga.txtsdate")" />
                </div>
            </div>

            <div class="form-footer">
                <button type="submit" name="submit" class="button">@lang("MasterData.basic.send")</button>
            </div>
        </form>
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