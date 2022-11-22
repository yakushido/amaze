@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\admin_eyelash.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\admin_eyelash.css') }}">
@endif

<div class="sub_body">

    <div class="top_title admin_top_title">
        <h2>管理者ページ</h2>
        <div>
            <h3>Eyelashes Extensions & Perm</h3>
            <p>【 マツエク＆まつげパーマ 】</p>
        </div>
    </div>

    <div class="back_to_menu">
        <a href="/admin">戻る</a>
    </div>

    <div class="admin_add card">
        <h3 class="genre_title">追加フォーム</h3>
        <form action="{{ route('admin_eyelash.store') }}" method="POST">
            @csrf
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_category.png" alt="">
                </div>
                <select name="genre" id="">
                    <option value="">選択してください</option>
                    @foreach( $eyelash_genres as $genre )
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
                <button>追加する</button>
            </div>
        </form>
    </div>

    <div>
        @foreach( $eyelash_genres as $genre )

            <!-- フラットマッシュ -->
            @if( $genre['id'] === 1 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $eyelashAs as $A )
                        <div class="flex line">
                            <b>{{ $A['name'] }}</b>
                            @if( $A['name'] === "カラー2色以上" )
                            <p>+￥{{ $A['plice'] }}</p>
                            @else
                            <p>￥{{ $A['plice'] }}</p>
                            @endif
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_eyelash.delete', ['id' => $A['id'], 'genre_id' => $A['eyelash_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_eyelash.show', ['id' => $A['id'], 'genre_id' => $A['eyelash_genre_id']]) }}" method="GET">
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

            <!-- 3Dボリュームマッシュ -->
            @if( $genre['id'] === 2 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $eyelashBs as $B )
                        <div class="flex line">
                            <b>{{ $B['name'] }}</b>
                            <p>￥{{ $B['plice'] }}</p>
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_eyelash.delete', ['id' => $B['id'], 'genre_id' => $B['eyelash_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_eyelash.show', ['id' => $B['id'], 'genre_id' => $B['eyelash_genre_id']]) }}" method="GET">
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

            <!-- オフ・オプション -->
            @if( $genre['id'] === 3 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $eyelashCs as $C )
                        <div class="flex line">
                            <b>{{ $C['name'] }}</b>
                            @if( $C['name'] === "付け替えオフ" || $C['name'] === "アイシャンプー" )
                            <p>+￥{{ $C['plice'] }}</p>
                            @else
                            <p>￥{{ $C['plice'] }}</p>
                            @endif
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_eyelash.delete', ['id' => $C['id'], 'genre_id' => $C['eyelash_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_eyelash.show', ['id' => $C['id'], 'genre_id' => $C['eyelash_genre_id']]) }}" method="GET">
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

            <!-- ラッシュリフト -->
            @if( $genre['id'] === 4 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $eyelashDs as $D )
                        <div class="flex line">
                            <b>{{ $D['name'] }}</b>
                            @if( $D['name'] === "上下セット" )
                            <p>+￥{{ $D['plice'] }}</p>
                            @else
                            <p>￥{{ $D['plice'] }}</p>
                            @endif
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_eyelash.delete', ['id' => $D['id'], 'genre_id' => $D['eyelash_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_eyelash.show', ['id' => $D['id'], 'genre_id' => $D['eyelash_genre_id']]) }}" method="GET">
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