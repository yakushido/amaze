@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\user.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\user.css') }}">
@endif

<div>
    <div class="add_card user_card">
        <h2>スタッフ追加フォーム</h2>
        <form>
            <div class="flex--center">
                <div class="inputs_icon">
                    <img src="{{ Storage::url('icon_person.png') }}" alt="">
                </div>
                <input type="text"
                    placeholder="氏名を入力してください">
            </div>
            <div class="textarea">
                <h3>プロフィール</h3>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input_file">
                <label class="input_file_label">
                    <input type="file"
                        name="picture"
                        id="inputFile">ファイルを選択
                </label>
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
                    <h3>{{ $user['name'] }}</h3>
                    <p>{{ $user['detail'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

@endsection