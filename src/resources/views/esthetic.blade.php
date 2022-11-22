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
        @foreach( $esthetic_genres as $genre )
            <!-- マッサージ -->
            @if( $genre['id'] === 1 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $esthetic_As as $A )
                        <div class="flex line">
                            <b>{{ $A['name'] }}</b>
                            <p>￥{{ $A['plice'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- キャビテーション -->
            @if( $genre['id'] === 2 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    <h4 class="genre_title">各Sパーツ</h4>
                    <div class="detail_many">
                        <p>二の腕</p>
                        <p>腰まわり</p>
                    </div>
                    @foreach( $esthetic_Bs as $B )
                        @if( $B['esthetic_part_id'] === 1 )
                            <div class="flex line">
                                <b>{{ $B['name'] }}</b>
                                <p>￥{{ $B['plice'] }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div>
                    <h4 class="genre_title">各Mパーツ</h4>
                    <div class="detail_many">
                        <p>お腹</p>
                        <p>おしり</p>
                        <p>ふくらはぎ</p>
                    </div>
                    @foreach( $esthetic_Bs as $B )
                        @if( $B['esthetic_part_id'] === 2 )
                            <div class="flex line">
                                <b>{{ $B['name'] }}</b>
                                <p>￥{{ $B['plice'] }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div>
                    <h4 class="genre_title">各Lパーツ</h4>
                    <div class="detail_many">
                        <p>背中</p>
                        <p>太もも</p>
                    </div>
                    @foreach( $esthetic_Bs as $B )
                        @if( $B['esthetic_part_id'] === 3 )
                            <div class="flex line">
                                <b>{{ $B['name'] }}</b>
                                <p>￥{{ $B['plice'] }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif

            <!-- ハイフ -->
            @if( $genre['id'] === 3 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    <h4 class="genre_title">お腹</h4>
                    <div class="flex">
                        <div class="esthetic_card--hifu">
                            <div class="detail_one">
                                <h5>シングル</h5>
                            </div>
                            @foreach( $esthetic_Cs as $C )
                                @if( $C['esthetic_part_id'] === 5 )
                                <div class="flex line">
                                    <b>{{ $C['name'] }}</b>
                                    <p>￥{{ $C['plice'] }}</p>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="esthetic_card--hifu">
                            <div class="detail_one">
                                <h5>ダブル</h5>
                            </div>
                            @foreach( $esthetic_Cs as $C )
                                @if( $C['esthetic_part_id'] === 6 )
                                <div class="flex line">
                                    <b>{{ $C['name'] }}</b>
                                    <p>￥{{ $C['plice'] }}</p>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="genre_title">太もも</h4>
                    <div class="flex">
                        <div class="esthetic_card--hifu">
                            <div class="detail_one">
                                <h5>シングル</h5>
                            </div>
                            @foreach( $esthetic_Cs as $C )
                                @if( $C['esthetic_part_id'] === 7 )
                                <div class="flex line">
                                    <b>{{ $C['name'] }}</b>
                                    <p>￥{{ $C['plice'] }}</p>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="esthetic_card--hifu">
                            <div class="detail_one">
                                <h5>ダブル</h5>
                            </div>
                            @foreach( $esthetic_Cs as $C )
                                @if( $C['esthetic_part_id'] === 8 )
                                <div class="flex line">
                                    <b>{{ $C['name'] }}</b>
                                    <p>￥{{ $C['plice'] }}</p>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="genre_title">腰</h4>
                    <div class="flex">
                        <div class="esthetic_card--hifu">
                            <div class="detail_one">
                                <h5>シングル</h5>
                            </div>
                            @foreach( $esthetic_Cs as $C )
                                @if( $C['esthetic_part_id'] === 9 )
                                <div class="flex line">
                                    <b>{{ $C['name'] }}</b>
                                    <p>￥{{ $C['plice'] }}</p>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="esthetic_card--hifu">
                            <div class="detail_one">
                                <h5>ダブル</h5>
                            </div>
                            @foreach( $esthetic_Cs as $C )
                                @if( $C['esthetic_part_id'] === 10 )
                                <div class="flex line">
                                    <b>{{ $C['name'] }}</b>
                                    <p>￥{{ $C['plice'] }}</p>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="genre_title">二の腕</h4>
                    <div class="esthetic_card--hifu">
                        <div class="detail_one">
                            <h5>シングル</h5>
                        </div>
                        @foreach( $esthetic_Cs as $C )
                            @if( $C['esthetic_part_id'] === 11 )
                            <div class="flex line">
                                <b>{{ $C['name'] }}</b>
                                <p>￥{{ $C['plice'] }}</p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <!-- フェイシャルエステ -->
            @if( $genre['id'] === 4 )
            <div class="card">
                <h3 class="genre_title">{{ $genre['name'] }}</h3>
                <div>
                    @foreach( $esthetic_Ds as $D )
                        <div class="flex line">
                            <b>{{ $D['name'] }}</b>
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