@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\user.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\user.css') }}">
@endif

<div class="user_update_card">
    
    <div>
        <h2>スタッフ編集フォーム</h2>
        <a href="/user/delete/{{ $user['id'] }}" class="inputs_icon">
            <img src="{{ Storage::url('icon_delete.jpg') }}" alt="">
        </a>
    </div>

    <form action="{{ route('user.update', $user['id']) }}"
            enctype="multipart/form-data" 
            method="POST">
        @csrf

        @if($errors->has('name'))
            <p class="message">{{$errors -> first('name')}}</p>
        @endif
        <div class="user_update_input">
            <div class="inputs_icon">
                <img src="{{ Storage::url('icon_person.png') }}" alt="">
            </div>
            <input type="text"
                name="name"
                value="{{ $user['name'] }}">
        </div>
        
        @if($errors->has('email'))
            <p class="message">{{$errors -> first('email')}}</p>
        @endif
        <div class="user_update_input">
            <div class="inputs_icon">
                <img src="{{ Storage::url('icon_mail.png') }}" alt="">
            </div>
            <input type="text"
                name="email"
                value="{{ $user['email'] }}">
        </div>
        
        @if($errors->has('password'))
            <p class="message">{{$errors -> first('password')}}</p>
        @endif
        <div class="user_update_input">
            <div class="inputs_icon">
                <img src="{{ Storage::url('icon_password.png') }}" alt="">
            </div>
            <input type="text"
                name="password"
                placeholder="再入力が必要です">
        </div>
        
        @if($errors->has('detail'))
            <p class="message">{{$errors -> first('detail')}}</p>
        @endif
        <div class="user_update_textarea">
            <h3>プロフィール</h3>
            <textarea name="detail" id="" cols="30" rows="10">{{ $user['detail'] }}</textarea>
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
            <button>更新</button>
        </div>
    </form>

</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

@endsection