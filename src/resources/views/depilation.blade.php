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
        @foreach( $depilation_genres as $g )
        <div class="card">
            <h3 class="genre_title">{{ $g['name'] }}</h3>
            <div>
                @foreach( $depilation_lists as $list )
                    @if( $list['depilation_genre_id'] === $g['id'] )
                        @if( $list['depilation_part_id'] !== null )
                            <h4 class="genre_title">{{ $list['depilation_part']['name'] }}</h4>
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