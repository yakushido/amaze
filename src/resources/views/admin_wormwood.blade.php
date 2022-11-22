@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\admin_wormwood.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css\wormwood.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\admin_wormwood.css') }}">
<link rel="stylesheet" href="{{ asset('css\wormwood.css') }}">
@endif

<div class="sub_body">

    <div class="top_title admin_top_title">
        <h2>管理者ページ</h2>
        <div>
            <h3>Wormwood streaming</h3>
            <p>【 よもぎ蒸し 】</p>
        </div>
    </div>

    <div class="back_to_menu">
        <a href="/admin">戻る</a>
    </div>

    <div class="admin_add card">
        <h3 class="genre_title">コース追加フォーム</h3>
        <form action="{{ route('admin_wormwood.store') }}" method="POST">
            @csrf
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_category.png" alt="">
                </div>
                <select name="genre" id="">
                    <option value="">選択してください</option>
                    @foreach( $wormwood_genres as $genre )
                    <option value="{{ $genre['id'] }}">{{ $genre['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_title.png" alt="">
                </div>
                <input type="text" name="name" placeholder="コース名を入力してください">
            </div>
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_plice.png" alt="">
                </div>
                <input type="text" name="plice" placeholder="価格を入力してください">
            </div>
            <div class="admin_add_form_button">
                <button>追加</button>
            </div>
        </form>
    </div>

    <div>
        @foreach( $wormwood_genres as $genre )

            <!-- よもぎ蒸し -->
            @if( $genre['id'] === 1 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $wormwoodAs as $A )
                        <div class="flex line">
                            <b>{{ $A['name'] }}</b>
                            @if( $A['name'] === "オプション" )
                            <p>+￥{{ $A['plice'] }}</p>
                            @else
                            <p>￥{{ $A['plice'] }}</p>
                            @endif
                        </div>

                        @if( $A['name'] === "オプション" )
                            <div class="option">
                                <p>ダイエット薬草</p>
                                <p>美肌薬草</p>
                            </div>
                        @endif

                        <div class="admin_update_delete">
                            <form action="{{ route('admin_wormwood.delete', ['id' => $A['id'], 'genre_id' => $A['wormwood_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_wormwood.show', ['id' => $A['id'], 'genre_id' => $A['wormwood_genre_id']]) }}" method="GET">
                                @csrf
                                <div>
                                    <button class="admin_update_button">編集</button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

        @endforeach
    </div>

</div>

@endsection