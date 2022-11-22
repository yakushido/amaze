@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\register.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\register.css') }}">
@endif

<div class="sub_body">

    <div class="top_title admin_top_title">
        <h2>管理者ページ</h2>
        <div>
            <h3>Register</h3>
            <p>【 スタッフの登録 】</p>
        </div>
    </div>

    <div class="back_to_menu">
        <a href="/admin">戻る</a>
    </div>

    <div class="card">

        <h3 class="genre_title">スタッフ登録フォーム</h3>

        <!-- Validation Errors -->
        <x-auth-validation-errors  :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/user.png" alt="">
                </div>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="名前を入力してください"/>
            </div>

            <!-- Email Address -->
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/mail.png" alt="">
                </div>
                <input id="email" type="email" name="email" :value="old('email')" required placeholder="メールアドレスを入力してください"/>
            </div>

            <!-- Password -->
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/lock.png" alt="">
                </div>
                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password"
                                placeholder="パスワードを入力してください"/>
            </div>

            <!-- Confirm Password -->
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/lock.png" alt="">
                </div>
                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required 
                                placeholder="確認用パスワードを入力してください"/>
            </div>

            <div class="admin_add_form_button">
                <button>
                    {{ __('登録') }}
                </button>
            </div>
        </form>

    </div>

    <div class="card">
        <h3 class="genre_title">スタッフリスト</h3>
        <ul class="staff_ul">
            @foreach( $users as $user )
                <div>
                    <li>{{ $user['name'] }}</li>
                    <form action="{{ route('admin.delete', $user['id']) }}" method="POST">
                        @csrf
                        <div>
                            <button class="admin_delete_button">削除</button>
                        </div>
                    </form>
                </div>
            @endforeach
        </ul>
    </div>
</div>

@endsection