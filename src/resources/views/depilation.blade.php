@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\depilation.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\depilation.css') }}">
@endif

<div class="sub_body">

    <div class="top_title">
        <h1>Depilation</h1>
        <p>【 脱毛 】</p>
    </div>
    
    <div class="back_to_menu">
        <a href="/menu/women">戻る</a>
    </div>

    <div class="top_menu_wrap">
        @foreach( $depilation_genres as $genre )
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
            
                <div class="select">

                    <div>
                        <h3 class="genre_title select_title">Sパーツ</h3>
                        <div class="select_checkbox">
                            @foreach( $depilation_s_details as $S )
                            <label class="select_label">
                                <input type="checkbox" name="" class="select_input" value="S" onchange="myfunc()">
                                {{ $S['name'] }}
                            </label>
                            @endforeach
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="genre_title select_title">Lパーツ</h3>
                        <div class="select_checkbox">
                            @foreach( $depilation_l_details as $L )
                                <label class="select_label">
                                    <input type="checkbox" class="select_input" value="L" onchange="myfunc()">
                                    {{ $L['name'] }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex line select_text">
                        <b id="output_status"></b>
                        <p id="output_plice"></p>
                    </div>

                </div>
            </div>
            @endif
        @endforeach
    </div>

</div>

<script>

    const selectLabels = document.querySelectorAll('.select>div>div>label');
        for (const [i, e] of selectLabels.entries()) {
            e.id = `selectLabel-${i}`;
            e.id = `selectInput-${i}`;
        }
        
    const selectInputs = document.getElementsByClassName('select_input');

    for( let i = 0; i < selectLabels.length; i++ ){
        selectInputs[i].addEventListener('change', () => {
            selectLabels[i].classList.toggle("active");
        });
        
    }

    // セレクトコース
    function myfunc() {

        let display_status = [];
        const output_status = document.getElementById('output_status');
        const output_plice = document.getElementById('output_plice');

        for( let i = 0; i < selectLabels.length; i++ ){
            if( selectInputs[i].checked ){
                display_status.push(selectInputs[i].value);
                output_status.textContent = display_status.join(" ");
                console.log(display_status);
            }
        }
        if ( output_status.textContent === "S S S" ){
            output_plice.innerText = "￥39600";
        }
        else if ( output_status.textContent === "S S S S" ) {
            output_plice.innerText = "￥49500";
        }
        else if ( output_status.textContent === "S S L" ) {
            output_plice.innerText = "￥49500";
        }
        else if ( output_status.textContent === "S S S L" ) {
            output_plice.innerText = "￥60500";
        }
        else if ( output_status.textContent === "S L L" ) {
            output_plice.innerText = "￥60500";
        }
        else if ( output_status.textContent === "S S L L" ) {
            output_plice.innerText = "￥66000";
        }
        else if ( output_status.textContent === "L L L" ) {
            output_plice.innerText = "￥66000";
        }
        else if ( output_status.textContent === "S L L L" ) {
            output_plice.innerText = "￥77000";
        }
        else if ( output_status.textContent === "L L L L" ) {
            output_plice.innerText = "￥88000";
        }
        else if ( output_status.textContent === "L L L L L" ) {
            output_plice.innerText = "￥99000";
        }
        else{
            output_plice.innerText = "合致するコースがありません";
        }
    };
    
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