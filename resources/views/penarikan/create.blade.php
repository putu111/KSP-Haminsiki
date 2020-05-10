@extends('layout.user')

@section('title')
    Tambah Penarikan
@endsection

@section('current-page')
    Penarikan
@endsection

@section('content')
    <div class="form-wrapper">
        <div class="form-header">
            <h3 class="form-header-text">Tambah Penarikan</h3>
        </div>
        <form action="/penarikan" method="POST" autocomplete="off" id="tambah-penarikan">
            @csrf

            <div class="form-body">
                <div class="form-control">
                    <div class="form-label">
                        <label>No Anggota</label>
                    </div>

                    <select id="no-anggota" name="anggota_id" class="input">
                        <option value="">None</option>
                        @foreach ($anggotas as $item)
                            <option value="{{ $item->id }}">{{ $item->no_anggota }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-control">
                    <div class="form-label">
                        <label for="nominal-transaksi">Nominal Transaksi</label>
                    </div>

                    <input type="number" id="nominal-transaksi" class="input" name="nominal_transaksi" placeholder="Masukkan Nominal Transaksi" />
                </div>
            </div>

            <div class="form-footer">
                <button type="submit" name="submit" class="button">Submit</button>
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