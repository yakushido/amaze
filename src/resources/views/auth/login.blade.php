@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\login.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\login.css') }}">
@endif

<div class="sub_body">
    
    <div class="card">
        <h2 class="genre_title">管理者用ログインフォーム</h2>
        @if (isset($login_error))
        <div id="error_explanation" class="text-danger">
            <ul>
                <li>メールアドレスまたはパスワードが一致しません。</li>
            </ul>
        </div>
        @endif
        <form action="/login" method="post">
        @csrf
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/mail.png" alt="メールのアイコン">
                </div>
                <input type="email" name="email" placeholder="メールアドレスを入力してください">
            </div>
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/lock.png" alt="パスワードのアイコン">
                </div>
                <input type="password" name="password" placeholder="パスワードを入力してください">
            </div>
            <div class="admin_add_form_button">
                <button>ログイン</button>
            </div>
        </form>
    </div>

</div>
@endsection
