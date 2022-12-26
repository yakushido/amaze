@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\menu.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
@endif

    <div class="top_title">
        <h1>{{ $menu['category']['genre']['e-name'] }}</h1>
        <p>【{{ $menu['category']['genre']['j-name'] }}】</p>
    </div>

<div class="update_card">

    <div class="update_card_category_title">
        <h2>{{ $menu['category']['category'] }}</h2>
        <a href="/menu/delete/{{ $menu['id'] }}" class="delete_icon">
            <img src="/storage/icon_delete.jpg" alt="">
        </a>
    </div>
    @if( $menu['part_id'] != null )
    <p class="part_title">{{ $menu['part']['part'] }}</p>
    @endif
    <form action="{{ route('menu.course_update', $menu['id']) }}" class="form_content" method="POST">
        @csrf
            @if( $menu['priceB'] === null )
                <div class="course_update">
                    <div>
                        <p>メニュー名：</p>
                        <input type="text"
                            name="menu"
                            value="{{ $menu['menu'] }}">
                    </div>

                    <div>
                        <p>価格：</p>
                        @if( $menu['plus'] != null )
                            <span>{{ $menu['plus'] }}</span>
                        @endif

                        ￥<input type="text"
                            name="priceA"
                            value="{{ $menu['priceA'] }}">
                        
                        @if( $menu['wavy'] != null )
                            <span>{{ $menu['wavy'] }}</span>
                        @endif
                            
                        @if( $menu['finger'] != null || $menu['fingers'] != null )
                            @if( $menu['finger'] != null && $menu['fingers'] === null )
                                <span>{{ $menu['finger'] }}</span>
                            @elseif( $menu['finger'] === null && $menu['fingers'] != null )
                                <span>{{ $menu['fingers'] }}</span>
                            @endif
                        @endif
                    </div>
                </div>
            @elseif( $menu['priceB'] != null )
                <div class="course_update_with_priceB">
                    <div>
                        <p>メニュー名：</p>
                        <input type="text"
                        name="menu"
                        value="{{ $menu['menu'] }}">
                    </div>

                    <div>
                        <p>価格：</p>
                        <div>
                            <p>
                                @if( $menu['plus'] != null )
                                    <span>{{ $menu['plus'] }}</span>
                                @endif

                                ￥<input type="text"
                                name="priceA"
                                value="{{ $menu['priceA'] }}">
                            </p>
                            <span>~</span>
                            <p>
                                ￥<input type="text"
                                name="priceB"
                                value="{{ $menu['priceB'] }}">

                                @if( $menu['wavy'] != null )
                                    <span>{{ $menu['wavy'] }}</span>
                                @endif
                                    
                                @if( $menu['finger'] != null || $menu['fingers'] != null )
                                    @if( $menu['finger'] != null && $menu['fingers'] === null )
                                        <span>{{ $menu['finger'] }}</span>
                                    @elseif( $menu['finger'] === null && $menu['fingers'] != null )
                                        <span>{{ $menu['fingers'] }}</span>
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="price_grant">
                <div>
                    <div>
                        <h4>前方付与</h4>
                    </div>
                    <div>
                        <div>
                            <input type="checkbox" name="plus" id="plus" value="+">
                            <label for="plus">+</label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <h4>後方付与</h4>
                    </div>
                    <div>
                        <div>
                            <input type="checkbox" name="wavy" id="wavy" value="~">
                            <label for="wavy">~</label>
                        </div>
                        <div>
                            <input type="checkbox" name="finger" id="finger" value="/本">
                            <label for="finger">/本</label>
                        </div>
                        <div>
                            <input type="checkbox" name="fingers" id="fingers" value="/本数問わず">
                            <label for="fingers">/本問わず</label>
                        </div>
                    </div>
                </div>
            </div>
            
        <div>
            <button>変更</button>
        </div>
    </form>
</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

@endsection