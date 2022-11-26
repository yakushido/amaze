@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\esthetic.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\esthetic.css') }}">
@endif

<div class="sub_body">
    
    <div class="top_title">
        <h1>Esthetic</h1>
        <p>【 エステ 】</p>
    </div>
    
    <div class="back_to_menu">
        <a href="/menu/women">戻る</a>
    </div>

    <div class="top_menu_wrap">
        @foreach( $esthetic_genres as $genre )
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
        @foreach( $esthetic_genres as $g )
        <div class="card">
            <h3 class="genre_title">{{ $g['name'] }}</h3>
            <div>
                @foreach( $esthetic_lists as $list )
                    @if( $list['esthetic_genre_id'] === $g['id'] )
                        @if( $list['esthetic_part_id'] !== null )
                            @if( $list['name'] === '1回コース' )
                            <h4 class="genre_title">{{ $list['esthetic_part']['name'] }}</h4>
                            @endif
                        @endif
                        <div class="flex line">
                            <b>{{ $list['name'] }}</b>
                            <p>￥{{ $list['pliceA'] }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
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