@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\menu_women.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\menu_women.css') }}">
@endif

<div class="sub_body">

    <div class="top_title">
        <h2>women Menu</h2>
        <p>【 女性用メニュー 】</p>
    </div>

    <div class="back_to_menu">
        <a href="/">戻る</a>
    </div>

    <ul class="women_menu">
        <li class="women_menu_card">
            <a href="/menu/women/esthetic">
                <div>
                    <h2>Esthetic</h2>
                    <p>【 エステ 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="women_menu_card">
            <a href="/menu/women/eyelash">
                <div>
                    <h2>Eyelashes Extensions & Perm</h2>
                    <p>【 マツエク＆まつげパーマ 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="women_menu_card">
            <a href="/menu/women/depilation">
                <div>
                    <h2>Depilation</h2>
                    <p>【 脱毛 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="women_menu_card">
            <a href="/menu/women/wormwood">
                <div>
                    <h2>Wormwood streaming</h2>
                    <p>【 よもぎ蒸し 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="women_menu_card">
            <a href="/menu/women/bridal">
                <div>
                    <h2>Bridal</h2>
                    <p>【 ブライダル 】</p>
                </div>    
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="women_menu_card">
            <a href="/menu/women/nail">
                <div>
                    <h2>Nail</h2>
                    <p>【 ネイル 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
    </ul>
</div>

@endsection