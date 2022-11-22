@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\bridal.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\bridal.css') }}">
@endif

<div class="sub_body">

    <div class="top_title">
        <h1>Bridal</h1>
        <p>【 ブライダル 】</p>
    </div>
    
    <div class="back_to_menu">
        <a href="/menu/women">戻る</a>
    </div>

    <div class="top_menu_wrap">
        @foreach( $bridal_genres as $genre )
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
                        <div class="flex line bridal_line_A">
                            @if( $A['id'] === 2 )
                            <div>
                                <p>ジェルネイル1回 or マツエク付き</p>
                                <p>プレゼント用ギフト券付き</p>
                            </div>
                            <p>￥{{ $A['plice'] }}</p>
                            @elseif( $A['id'] === 3 )
                            <div>
                                <p>ジェルネイル1回 or マツエク付き</p>
                                <p>プレゼント用ギフト券付き</p>
                            </div>
                            <p>￥{{ $A['plice'] }}</p>
                            @else
                            <b></b>
                            <p>￥{{ $A['plice'] }}</p>
                            @endif
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
                            <b></b>
                            <p>￥{{ $B['plice'] }}</p>
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
                        <div class="flex line bridal_line_C">
                            @if( $C['id'] === 2 )
                            <div>
                                <p>プレゼント用ギフト券付き</p>
                            </div>
                            <p>￥{{ $C['plice'] }}</p>
                            @else
                            <b></b>
                            <p>￥{{ $C['plice'] }}</p>
                            @endif
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