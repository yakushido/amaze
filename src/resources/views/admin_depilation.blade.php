@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\depilation.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css\admin_depilation.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\depilation.css') }}">
<link rel="stylesheet" href="{{ asset('css\admin_depilation.css') }}">
@endif

<div class="sub_body">

    <div class="top_title admin_top_title">
        <h2>管理者ページ</h2>
        <div>
            <h3>Depilation</h3>
            <p>【 脱毛 】</p>
        </div>
    </div>

    <div class="back_to_menu">
        <a href="/admin">戻る</a>
    </div>

    <div class="admin_add card">
        <h3 class="genre_title">コース追加フォーム</h3>
        <form action="{{ route('admin_depilation.store') }}" method="POST">
            @csrf
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_category.png" alt="">
                </div>
                <select name="genre" id="">
                    <option value="">選択してください</option>
                    @foreach( $depilation_genres as $genre )
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

    <div class="card">
        <h3 class="genre_title">Sパーツ追加編集フォーム</h3>
        <form action="{{ route('admin_depilation_partS.store') }}" method="POST">
            @csrf
            <div class="admin_parts">
                <ul class="admin_parts_ul">
                    @foreach( $depilation_s_details as $S )
                    <li>
                        <p>{{ $S['name'] }}</p>
                        <span class="admin_parts_update_span"><a href="/admin/depilation/partS/show/{{ $S['id'] }}">編集</a></span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <div class="admin_add_form_text">
                    <div class="icon_img">
                        <img src="" alt="">
                    </div>
                    <input type="text" name="name" placeholder="パーツ名を入力してください">
                </div>
                <div class="admin_add_form_button">
                    <button>追加</button>
                </div>
            </div>
        </form>
    </div>

    <div class="card">
        <h3 class="genre_title">Lパーツ追加編集フォーム</h3>
        <form action="{{ route('admin_depilation_partL.store') }}" method="POST">
            @csrf
            <div class="admin_parts">
                <ul class="admin_parts_ul">
                    @foreach( $depilation_l_details as $L )
                    <li>
                        <p>{{ $L['name'] }}</p>
                        <span class="admin_parts_update_span"><a href="/admin/depilation/partL/show/{{ $L['id'] }}">編集</a></span>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <div class="admin_add_form_text">
                    <div class="icon_img">
                        <img src="" alt="">
                    </div>
                    <input type="text" name="name" placeholder="パーツ名を入力してください">
                </div>
                <div class="admin_add_form_button">
                    <button>追加</button>
                </div>
            </div>
        </form>
    </div>

    <div>
        @foreach( $depilation_genres as $genre )
            <!-- 全身脱毛 -->
            @if( $genre['id'] === 1 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $depilation_As as $A )
                        <div class="flex line">
                            <b>{{ $A['name'] }}</b>
                            <p>￥{{ $A['plice'] }}</p>
                        </div>
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_depilation.delete', ['id' => $A['id'], 'genre_id' => $A['depilation_genre_id']]) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_depilation.show', ['id' => $A['id'], 'genre_id' => $A['depilation_genre_id']]) }}" method="GET">
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

            <!-- 部分脱毛 -->
            @if( $genre['id'] === 2 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $depilation_parts as $part )
                        <h4 class="genre_title">{{ $part['name'] }}</h4>
                        @if( $part['id'] === 1 )    
                            <div class="detail_many">
                                @foreach( $depilation_s_details as $S )
                                    <p>{{ $S['name'] }}</p>
                                @endforeach
                            </div>
                        @endif
                        @if( $part['id'] === 2 )
                            <div class="detail_many">
                                @foreach( $depilation_l_details as $L )
                                    <p>{{ $L['name'] }}</p>
                                @endforeach
                            </div>
                        @endif
                        @foreach( $depilation_Bs as $B )
                            @if( $part['id'] === $B['depilation_part_id'] )
                                <div class="flex line">
                                    <b>{{ $B['name'] }}</b>
                                    <p>￥{{ $B['plice'] }}</p>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
            @endif

            <!-- セレクト6回コース -->
            @if( $genre['id'] === 3 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div class="depilation_genre--select">
                    @foreach( $depilation_Cs as $C )
                        <div class="flex depilation_genre_card--select">
                            <b>{{ $C['name'] }}</b>
                            <p>￥{{ $C['plice'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        @endforeach
    </div>

</div>

</div>
@endsection