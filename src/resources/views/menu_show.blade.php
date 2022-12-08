@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\menu.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
@endif

    <div class="top_title">
        <h1>{{ $menu['category']['genre']['e-name'] }}</h1>
        <p>【{{ $menu['category']['genre']['j-name'] }}】</p>
    </div>

<div class="update_card">

    <div>
        <h2>{{ $menu['category']['category'] }}</h2>
        <a href="/menu/delete/{{ $menu['id'] }}" class="delete_icon">
            <img src="/storage/icon_delete.jpg" alt="">
        </a>
    </div>
    @if( $menu['part_id'] != null )
    <p class="part_title">{{ $menu['part']['part'] }}</p>
    @endif
    <form action="{{ route('menu.course_update', $menu['id']) }}" class="form_content" method="POST">
        @csrf
        <div class="course line input">
            <b>
                <input type="text"
                    name="menu"
                    value="{{ $menu['menu'] }}">
            </b>
            <p>
                <input type="text"
                    name="priceA"
                    value="{{ $menu['priceA'] }}">
            </p>
        </div>
        <div>
            <button>変更</button>
        </div>
    </form>
</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

@endsection