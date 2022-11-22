@extends('layouts.default')
@section('contents')
    @if(app('env') == 'production')
        <link rel="stylesheet" href="{{ secure_asset('css\wormwood.css') }}">
        @else
        <link rel="stylesheet" href="{{ asset('css\wormwood.css') }}">
    @endif

<div class="sub_body">

    <div class="top_title">
        <h2>Wormwood streaming</h2>
        <p>【 よもぎ蒸し 】</p>
    </div>
    
    <div class="back_to_menu">
        <a href="/menu/women">戻る</a>
    </div>

    <div class="top_menu_wrap">
        @foreach( $wormwood_genres as $genre )
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
                    @endforeach
                </div>
            </div>
            @endif

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