@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\eyelash.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\eyelash.css') }}">
@endif

<div class="sub_body">

    <div class="top_title">
        <h1>Eyelashes Extensions & Perm</h1>
        <p>【 マツエク＆まつげパーマ 】</p>
    </div>
    
    <div class="back_to_menu">
        <a href="/menu/women">戻る</a>
    </div>

    <div class="top_menu_wrap">
        @foreach( $eyelash_genres as $genre )
            <div class="top_menu">
                <div class="top_menu_img">
                    <h2>{{ $genre['name'] }}</h2>
                    <div>
                        <div class="gradation">
                            <img class="img_test" src="" alt="test">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
                    @endforeach
                </div>
            </div>
            @endif

        @endforeach
    </div>

    </div>
</div>

<script>
    // 画面スクロール
        const genres = document.querySelectorAll('.top_menu_wrap>div');
            for (const [i, e] of genres.entries()) {
                e.id = `genre-${i}`;
            }
        const targets = document.querySelectorAll('.card');
            for (const [i, e] of targets.entries()) {
                e.id = `target-${i}`;
            }
        let positions_array = [];
        let scrolled = window.scrollY;
        for ( let i = 0; i < targets.length; i++ ) {
            const positions = targets[i].getBoundingClientRect().top;
            positions_array.push(positions);
        }
        for ( let i = 0; i < targets.length; i++ ) {            // console.log(positions);
            genres[i].addEventListener('click', () => {
                window.scrollTo( 0, positions_array[i] + scrolled- 70);
                console.log(positions_array[i]);
            });
        }
</script>
@endsection