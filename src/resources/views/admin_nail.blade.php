@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\nail.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\nail.css') }}">
@endif

<div class="sub_body">

    <div class="top_title admin_top_title">
        <h2>管理者ページ</h2>
        <div>
            <h3>Nail</h3>
            <p>【 ネイル 】</p>
        </div>
    </div>

    <div class="back_to_menu">
        <a href="/admin">戻る</a>
    </div>

    <div class="admin_add card">
        <h3 class="genre_title">追加フォーム</h3>
        <form action="{{ route('admin_nail.store') }}" method="POST">
            @csrf
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_category.png" alt="">
                </div>
                <select name="genre" id="add_select">
                    <option value="">選択してください</option>
                    @foreach( $nail_genres as $genre )
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
            <div class="admin_add_form_text admin_nail_block">
                <div class="icon_img">
                    <img src="/storage/icon_plice.png" alt="">
                </div>
                <input type="text" name="plice" placeholder="価格を入力してください">
            </div>
            <div class="admin_add_form_text admin_nail_hide">
                <div class="icon_img">
                    <img src="/storage/icon_plice.png" alt="">
                </div>
                <input type="text" name="plice_A" placeholder="価格を入力してください">
                <span> ~ </span>
                <input type="text" name="plice_B" placeholder="価格を入力してください">
            </div>
            <div class="admin_add_form_button">
                <button>追加する</button>
            </div>
        </form>
    </div>

    <div>
        @foreach( $nail_genres as $genre )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>

                <!-- ジェルネイル -->
                @foreach( $nail_As as $A )
                    @if( $A['nail_genre_id'] === $genre['id'] )
                        <div class="flex line">
                            <b>{{ $A['name'] }}</b>
                            @if( $A['name'] === "美爪ジェルネイル" ||
                                $A['name'] === "フットジェルネイル" ||
                                $A['name'] === "ワンカラー・グラデーションのみ" ||
                                $A['name'] === "1day~7dayジェルネイル")
                            <p>￥{{ $A['plice'] }}~</p>
                            @else
                            <p>￥{{ $A['plice'] }}</p>
                            @endif
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_nail.delete', ['id' => $A['id'], 'genre_id' => $A['nail_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_nail.show', ['id' => $A['id'], 'genre_id' => $A['nail_genre_id']]) }}" method="GET">
                                @csrf
                                <div>
                                    <button class="admin_update_button">編集</button>
                                </div>
                            </form>
                        </div>
                    @endif
                @endforeach

                <!-- スカルプチュア -->
                @foreach( $nail_Bs as $B )
                    @if( $B['nail_genre_id'] === $genre['id'] )
                        <div class="flex line">
                            <b>{{ $B['name'] }}</b>
                            <p>￥{{ $B['plice'] }}~</p>
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_nail.delete', ['id' => $B['id'], 'genre_id' => $B['nail_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_nail.show', ['id' => $B['id'], 'genre_id' => $B['nail_genre_id']]) }}" method="GET">
                                @csrf
                                <div>
                                    <button class="admin_update_button">編集</button>
                                </div>
                            </form>
                        </div>
                    @endif
                @endforeach

                <!-- オフ・オプション -->
                @foreach( $nail_Cs as $C )
                    @if( $C['nail_genre_id'] === $genre['id'] )
                        <div class="flex line">
                            <b>{{ $C['name'] }}</b>
                            @if( isset($C['plice_B']) )
                            <p>￥{{ $C['plice_A'] }}~￥{{ $C['plice_B'] }}/本</p>
                            @elseif( $C['name'] === "オフのみ" )
                            <p>￥{{ $C['plice_A'] }}/本数問わず</p>
                            @else
                            <p>￥{{ $C['plice_A'] }}/本</p>
                            @endif
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_nail.delete', ['id' => $C['id'], 'genre_id' => $C['nail_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_nail.show', ['id' => $C['id'], 'genre_id' => $C['nail_genre_id']]) }}" method="GET">
                                @csrf
                                <div>
                                    <button class="admin_update_button">編集</button>
                                </div>
                            </form>
                        </div>
                    @endif
                @endforeach

                <!-- ケア -->
                @foreach( $nail_Ds as $D )
                    @if( $D['nail_genre_id'] === $genre['id'] )
                        <div class="flex line">
                            <b>{{ $D['name'] }}</b>
                            <p>￥{{ $D['plice'] }}</p>
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_nail.delete', ['id' => $D['id'], 'genre_id' => $D['nail_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_nail.show', ['id' => $D['id'], 'genre_id' => $D['nail_genre_id']]) }}" method="GET">
                                @csrf
                                <div>
                                    <button class="admin_update_button">編集</button>
                                </div>
                            </form>
                        </div>
                    @endif
                @endforeach

            </div>
        @endforeach
    </div>

</div>

<script>
    const selects = document.querySelector('#add_select');
    console.log(selects);
    const hide = document.querySelector('.admin_nail_hide');
    const block = document.querySelector('.admin_nail_block');
    selects.addEventListener('change', () => {
        if( selects.value == 3 ){
            hide.style.display = 'flex';
            block.style.display = 'none';
        }else{
            hide.style.display = 'none';
            block.style.display = 'flex';
        }
    })
</script>

@endsection