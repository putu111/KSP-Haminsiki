@extends('layout.user')

@section('title')
    Daftar Penarikan
@endsection

@section('current-page')
    Penarikan
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">Daftar Penarikan</h4>
            <form action="/penarikan/create" method="GET">
                <button type="submit" class="btn-create"><i class="fa fa-plus"></i>Tambah Penarikan</button>
            </form>
        </div>
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Tanggal</th>
                    <th>Nominal Transaksi</th>
                    <th>Nama User</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($simpanan); $i++)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $simpanan[$i]->no_anggota }}</td>
                        <td>{{ $simpanan[$i]->nama_anggota }}</td>
                        <td>{{ $simpanan[$i]->tanggal }}</td>
                        <td>{{ substr($simpanan[$i]->nominal_transaksi, 1) }}</td>
                        <td>{{ $simpanan[$i]->nama_user }}</td>
                        <td>
                            <button class="btn-more">
                                <div class="small-bullet"></div>
                                <div class="small-bullet"></div>
                                <div class="small-bullet"></div>
                            </button>
                            <div class="menu">
                                <ul>
                                    <form action="/penarikan/{{ $simpanan[$i]->id }}/edit" method="GET">
                                        <button class="btn-menu-list" type="submit">Edit</button>
                                    </form>
                                    <form action="/penarikan/{{ $simpanan[$i]->id }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn-menu-list" type="submit">Delete</button>
                                    </form>
                                </ul>
                            </div>
                        </td>
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

    <script>
        var show = false;
        var menu = "";

        $(document).click(function(){
            if(show){
                menu.fadeOut(0, function(){
                    show = false;
                    menu = "";
                });
            }
        });
        
        $('.btn-more').click(function(){
            if(!show){
                menu = $(this).siblings('.menu');
                menu.fadeIn("fast", function(){
                    show = true;
                });
            }    
        });
    </script>
@endsection