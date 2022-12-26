@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\user.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\user.css') }}">
@endif

    <div class="user_add_card">
        <h2>スタッフ追加フォーム</h2>
        <form action="{{ route('user.store') }}"
            enctype="multipart/form-data" 
            method="POST">
            @csrf

            @if($errors->has('name'))
                <p class="message">{{$errors -> first('name')}}</p>
            @endif
            <div class="user_add_input">
                <div class="inputs_icon">
                    <img src="{{ Storage::url('icon_person.png') }}" alt="">
                </div>
                <input type="text"
                    name="name"
                    placeholder="氏名を入力してください">
            </div>

            @if($errors->has('email'))
                <p class="message">{{$errors -> first('email')}}</p>
            @endif
            <div class="user_add_input">
                <div class="inputs_icon">
                    <img src="{{ Storage::url('icon_mail.png') }}" alt="">
                </div>
                <input type="text"
                    name="email"
                    placeholder="メールアドレスを入力してください">
            </div>
            
            @if($errors->has('password'))
                <p class="message">{{$errors -> first('password')}}</p>
            @endif
            <div class="user_add_input">
                <div class="inputs_icon">
                    <img src="{{ Storage::url('icon_password.png') }}" alt="">
                </div>
                <input type="text"
                    name="password"
                    placeholder="パスワードを入力してください">
            </div>
            
            @if($errors->has('detail'))
                <p class="message">{{$errors -> first('detail')}}</p>
            @endif
            <div class="user_add_textarea">
                <h3>プロフィール</h3>
                <textarea name="detail" id="" cols="30" rows="10"></textarea>
            </div>
            
            <div class="input_file">
                <label class="input_file_label">
                    <input type="file"
                        name="picture"
                        id="inputFile">ファイルを選択
                </label>
                @if($errors->has('picture'))
                    <p class="message">{{$errors -> first('picture')}}</p>
                @endif
                <p id="inputFileContent">選択されていません</p>
            </div>

            <div>
                <button>追加</button>
            </div>
        </form>
    </div>
    
    <div class="stuff_cards"> 
        <h2 class="top_title">スタッフリスト</h2>
        <div>
            @foreach( $users as $user )
                <div class="stuff_card">
                    <div>
                        <img src="{{ Storage::url($user['picture']) }}" alt="">
                    </div>
                    <h3>
                        <a href="/user/{{ $user['id'] }}">
                            <img src="/storage/icon_update.png" alt="">
                        </a>
                        {{ $user['name'] }}
                    </h3>
                    <p>{{ $user['detail'] }}</p>
                </div>
            @endforeach
        </div>
    </div>


<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

@endsection