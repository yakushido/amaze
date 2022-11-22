@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\admin.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\admin.css') }}">
@endif

<div class="sub_body">

    <div class="back_to_menu logout">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button>logout</button>
        </form>
    </div>

    <div>
    <ul class="admin_menu">
        <li class="admin_menu_card">
            <a href="/admin/shop">
                <div>
                    <h2>Shop Images</h2>
                    <p>【 店舗写真 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="admin_menu_card">
            <a href="/admin/campaign">
                <div>
                    <h2>Campaign</h2>
                    <p>【 キャンペーン 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="admin_menu_card">
            <a href="/admin/eyelash">
                <div>
                    <h2>Eyelashes Extensions & Perm</h2>
                    <p>【 マツエク＆まつげパーマ 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="admin_menu_card">
            <a href="/admin/depilation">
                <div>
                    <h2>Depilation</h2>
                    <p>【 脱毛 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="admin_menu_card">
            <a href="/admin/wormwood">
                <div>
                    <h2>Wormwood streaming</h2>
                    <p>【 よもぎ蒸し 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="admin_menu_card">
            <a href="/admin/bridal">
                <div>
                    <h2>Bridal</h2>
                    <p>【 ブライダル 】</p>
                </div>    
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        <li class="admin_menu_card">
            <a href="/admin/nail">
                <div>
                    <h2>Nail</h2>
                    <p>【 ネイル 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        @if( Auth::user()['name'] == "admin" )
        <li class="admin_menu_card">
            <a href="/admin/register">
                <div>
                    <h2>Register</h2>
                    <p>【 スタッフの登録 】</p>
                </div>
                <div class="gradation">
                    <img class="img_test" src="" alt="">
                </div>
            </a>
        </li>
        @endif
    </ul>
    </div>

</div>

@endsection