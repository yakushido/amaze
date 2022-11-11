@extends('layouts.default')
@section('contents')
    @if(app('env') == 'production')
        <link rel="stylesheet" href="{{ secure_asset('css\welcome.css') }}">
        @else
        <link rel="stylesheet" href="{{ asset('css\welcome.css') }}">
    @endif

<div class="top">
    <div class="shop_pictures">
        @foreach( $shop_pictures as $shop_picture )
        <div>
            <img src="{{ Storage::url($shop_picture['picture']) }}" alt="">
        </div>
        @endforeach  
    </div>
    <div class="menu_humbergar" id="menu_humbergar">
        <span class="menu_humbergar_bar--top"></span>
        <span class="menu_humbergar_bar--middle"></span>
        <span class="menu_humbergar_bar--bottom"></span>
    </div>
    <div class="top_day">
        <h2>OPEN 10:00 - 19:00</h2>
        <p>定休日 第二・第四日曜日</p>
        <div>
            <button onclick="scrollToDown()">Map</button>
        </div>
    </div>
</div>

<div class="category">
    <div class="campain">
        <h3>[ Campain ]</h3>
        <table>
            <tr>
                <th></th>
                <td></td>
            </tr>
        </table>
    </div>
    
    <div class="menu">
        <h3 class="category_title">[ Menu ]</h3>
        <div class="menu_sex">
            <div class="menu_sex--man">
                <a href="/menu/men">男性用</a>
            </div>
            <div class="menu_sex--women">
                <a href="/menu/women">女性用</a>
            </div>
        </div>
    </div>
</div>

@endsection


