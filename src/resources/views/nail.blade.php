@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\nail.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\nail.css') }}">
@endif

<div class="sub_body">

    <div class="top_title">
        <h2>Nail</h2>
        <p>【 ネイル 】</p>
    </div>

    <div class="back_to_menu">
        <a href="/menu/women">戻る</a>
    </div>

    <div class="top_menu_wrap">
        @foreach( $nail_genres as $genre )
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
        @foreach( $nail_genres as $genre )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>

                <!-- ジェルネイル -->
                @foreach( $nail_As as $A )
                    @if( $A['nail_genre_id'] === $genre['id'] )
                        <div class="flex line">
                            <b>{{ $A['name'] }}</b>
                            @if( $A['name'] === "クリアジェルネイル" )
                            <p>￥{{ $A['plice'] }}</p>
                            @else
                            <p>￥{{ $A['plice'] }}~</p>
                            @endif
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
                    @endif
                @endforeach

                <!-- ケア -->
                @foreach( $nail_Ds as $D )
                    @if( $D['nail_genre_id'] === $genre['id'] )
                        <div class="flex line">
                            <b>{{ $D['name'] }}</b>
                            <p>￥{{ $D['plice'] }}</p>
                        </div>
                    @endif
                @endforeach

            </div>
        @endforeach
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