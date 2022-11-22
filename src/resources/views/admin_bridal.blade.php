@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\bridal.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\bridal.css') }}">
@endif

<div class="sub_body">

    <div class="top_title admin_top_title">
        <h2>管理者ページ</h2>
        <div>
            <h3>Bridal</h3>
            <p>【 ブライダル 】</p>
        </div>
    </div>

    <div class="back_to_menu">
        <a href="/admin">戻る</a>
    </div>

    <div class="admin_add card">
        <h3 class="genre_title">コース追加フォーム</h3>
        <form action="{{ route('admin_bridal.store') }}" method="POST">
            @csrf
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_category.png" alt="">
                </div>
                <select name="genre" id="add_select">
                    <option value="">選択してください</option>
                    @foreach( $bridal_genres as $genre )
                    <option value="{{ $genre['id'] }}">{{ $genre['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="admin_add_form_text admin_bridal_hide">
                <div class="icon_img">
                    <img src="/storage/icon_part.png" alt="">
                </div>
                <input type="text" name="part" placeholder="部位名を入力してください">
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
        @foreach( $bridal_genres as $genre )
            
            <!-- カスタムメニュー -->
            @if( $genre['id'] === 1 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div class="detail_one">
                    <p>お客様、お一人お一人合ったプランでのメニューになりますので、まずはお問い合わせ下さい</p>
                </div>
                <div>
                    @foreach( $bridal_As as $A )
                        <div>
                            @if( $A['id'] === 2 )
                            <div class="flex line">
                                <b>{{ $A['name'] }}</b>
                                <p>￥{{ $A['plice'] }}</p>
                            </div>
                            <div class="detail_many">
                                <p>ジェルネイル1回 or マツエク付き</p>
                                <p>プレゼント用ギフト券付き</p>
                            </div>
                            @elseif( $A['id'] === 3 )
                            <div class="flex line">
                                <b>{{ $A['name'] }}</b>
                                <p>￥{{ $A['plice'] }}</p>
                            </div>
                            <div class="detail_many">
                                <p>ジェルネイル1回 or マツエク付き</p>
                                <p>プレゼント用ギフト券付き</p>
                            </div>
                            @else
                            <div class="flex line">
                                <b>{{ $A['name'] }}</b>
                                <p>￥{{ $A['plice'] }}</p>
                            </div>
                            @endif
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_bridal.delete', ['id' => $A['id'], 'genre_id' => $A['bridal_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_bridal.show', ['id' => $A['id'], 'genre_id' => $A['bridal_genre_id']]) }}" method="GET">
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

            <!-- 1day -->
            @if( $genre['id'] === 2 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div class="detail_bridal_B">
                    <p>①上半身リンパ45分</p>
                    <p>②シェービングFACE</p>
                    <p>③シェービングBODY（背中・えり足・二の腕）</p>
                    <p>④美白 or 美肌 BODY</p>
                    <p>⑤顔脱毛 or 美肌フェイシャル</p>
                </div>
                <div>
                    @foreach( $bridal_Bs as $B )
                        <div class="flex line">
                            <b>{{ $B['name'] }}</b>
                            <p>￥{{ $B['plice'] }}</p>
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_bridal.delete', ['id' => $B['id'], 'genre_id' => $B['bridal_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_bridal.show', ['id' => $B['id'], 'genre_id' => $B['bridal_genre_id']]) }}" method="GET">
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

            <!-- マタニティプラン -->
            @if( $genre['id'] === 3 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $bridal_Cs as $C )
                        <div>
                            @if( $C['id'] === 2 )
                            <div class="flex line">
                                <b>{{ $C['name'] }}</b>
                                <p>￥{{ $C['plice'] }}</p>
                            </div>
                            <div class="detail_many">
                                <p>プレゼント用ギフト券付き</p>
                            </div>
                            @else
                            <div class="flex line">
                                <b>{{ $C['name'] }}</b>
                                <p>￥{{ $C['plice'] }}</p>
                            </div>
                            @endif
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_bridal.delete', ['id' => $C['id'], 'genre_id' => $C['bridal_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_bridal.show', ['id' => $C['id'], 'genre_id' => $C['bridal_genre_id']]) }}" method="GET">
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

            <!-- 単品メニュー -->
            @if( $genre['id'] === 4 )
            <div class="card bridal_card_D">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $bridal_Ds as $D )
                        <div class="flex bridal_D_menu">
                            <div>
                                <b>{{ $D['name'] }}</b>
                                <p>({{ $D['part'] }})</p>
                            </div>
                            <p>￥{{ $D['plice'] }}</p>
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_bridal.delete', ['id' => $D['id'], 'genre_id' => $D['bridal_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_bridal.show', ['id' => $D['id'], 'genre_id' => $D['bridal_genre_id']]) }}" method="GET">
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

<script>
    const selects = document.querySelector('#add_select');
    console.log(selects);
    const hide = document.querySelector('.admin_bridal_hide');
    selects.addEventListener('change', () => {
        if( selects.value == 4 ){
            hide.style.display = 'flex';
        }else{
            hide.style.display = 'none';
        }
    })
</script>

@endsection