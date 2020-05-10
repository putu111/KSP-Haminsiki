@extends('layout.user')

@section('title')
    @lang("MasterData.anggota.list")
@endsection

@section('current-page')
    Anggota
@endsection

@section('content')
    <div class="table-wrapper">
        <div class="table-header">
            <h4 class="table-header-text">@lang("MasterData.anggota.list")</h4>
            <form action="/master/anggota/create" method="GET">
                <button type="submit" class="btn-create"><i class="fa fa-plus"></i>@lang("MasterData.anggota.add")</button>
            </form>
        </div>
        <div class="table-body">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>@lang("MasterData.anggota.number")</th>
                        <th>@lang("MasterData.anggota.memid")</th>
                        <th>@lang("MasterData.anggota.name")</th>
                        <th>@lang("MasterData.anggota.addres")</th>
                        <th>@lang("MasterData.anggota.phone")</th>
                        <th>@lang("MasterData.anggota.ktp")</th>
                        <th>@lang("MasterData.anggota.gender")</th>
                        <th>@lang("MasterData.anggota.saldo")</th>
                        <th>@lang("MasterData.anggota.status")</th>
                        <th>@lang("MasterData.anggota.action")</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($anggota); $i++)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $anggota[$i]->no_anggota }}</td>
                            <td>{{ $anggota[$i]->nama }}</td>
                            <td>{{ str_limit($anggota[$i]->alamat, 20) }}</td>
                            <td>{{ $anggota[$i]->telepon }}</td>
                            <td>{{ $anggota[$i]->noktp }}</td>
                            <td>{{ $anggota[$i]->kelamin_id == 1 ? "@lang("MasterData.anggota.men")" : "@lang("MasterData.anggota.woman")" }}</td>
                            <td>{{ format_rupiah($anggota[$i]->saldo) }}</td>
                            <td>{{ $anggota[$i]->status_aktif == 1 ? "@lang("MasterData.anggota.act")" : "@lang("MasterData.anggota.nact")" }}</td>
                            <td>
                                @if ($anggota[$i]->status_aktif == 1)
                                    <button class="btn-more">
                                        <div class="small-bullet"></div>
                                        <div class="small-bullet"></div>
                                        <div class="small-bullet"></div>
                                    </button>
                                    <div class="menu">
                                        <ul>
                                            <form action="/master/anggota/{{ $anggota[$i]->id }}" method="GET">
                                                <button class="btn-menu-list" type="submit">@lang("MasterData.basic.view")</button>
                                            </form>
                                            <form action="/master/anggota/{{ $anggota[$i]->id }}/edit" method="GET">
                                                <button class="btn-menu-list" type="submit">@lang("MasterData.basic.edit")</button>
                                            </form>
                                            <form action="/master/anggota/{{ $anggota[$i]->id }}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button class="btn-menu-list" type="submit">@lang("MasterData.basiic.delete")</button>
                                            </form>
                                        </ul>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
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