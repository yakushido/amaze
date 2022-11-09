@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\login.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\login.css') }}">
@endif

<div class="login">
    <h2 class="login_title">管理者用ログインフォーム</h2>
    @if (isset($login_error))
    <div id="error_explanation" class="text-danger">
        <ul>
            <li>メールアドレスまたはパスワードが一致しません。</li>
        </ul>
    </div>
    @endif
    <form action="/login" method="post" class="login_form">
    @csrf
        <div>
            <img src="/storage/mail.png" alt="メールのアイコン">
            <input type="email" name="email" placeholder="メールアドレスを入力してください">
        </div>
        <div>
            <img src="/storage/lock.png" alt="パスワードのアイコン">
            <input type="password" name="password" placeholder="パスワードを入力してください">
        </div>
        <div>
            <button type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection
