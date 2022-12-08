@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\menu.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
@endif
    
    <div class="top_title">
        <h1>{{ $genre['e-name'] }}</h1>
        <p>【{{ $genre['j-name'] }}】</p>
    </div>

<div class="menu_flex">

    <div class="menu_flexA top_categories">
        @foreach( $categories as $cat )
            @if( $cat['menus']->contains('gender_id', $gender['id']) )
            <div class="top_category">
                <h2>{{ $cat['category'] }}</h2>
                <div>
                    <img src="{{ Storage::url($cat['picture']) }}" alt="">
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <div class="menu_flexB">
        @if( Auth::check() )
        <div class="flex admin_menu">
            <div>
    
                <div class="add_card add_cardB">
                    <h2>
                        カテゴリーの追加フォーム
                        <span>
                            <a href="/category">lists</a>
                        </span>
                    </h2>
                    <form action="{{ route('category.store') }}"
                        class="form_content"
                        enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="flex--center">
                            <div class="inputs_icon">
                                <img src="/storage/icon_category.png" alt="">
                            </div>
                            <input type="text"
                                name="category"
                                placeholder="カテゴリーを入力してください">
                            <input type="text"
                                name="genre"
                                value="{{ $genre['id'] }}"
                                hidden>
                        </div>
                        <div class="input_file">
                            <label class="input_file_label">
                                <input type="file"
                                    name="picture"
                                    id="inputFile">ファイルを選択
                            </label>
                            <p id="inputFileContent">選択されていません</p>
                        </div>
                        <div>
                            <button>追加</button>
                        </div>
                    </form>
                </div>
    
                <div class="add_card add_cardC">
                    <h2>
                        パーツの追加フォーム
                        <span>
                            <a href="/parts">lists</a>
                        </span>
                    </h2>
                    <form action="">
                        <div class="flex--center">
                            <div class="inputs_icon">
                                <img src="/storage/icon_parts.png" alt="">
                            </div>
                            <input type="text"
                                name="パーツ"
                                placeholder="パーツを入力してください">
                        </div>
                        <div>
                            <button>追加</button>
                        </div>
                    </form>
                </div>
    
            </div>
    
            <div class="add_card add_cardD">
                <h2>メニューの追加フォーム</h2>
                <form action="{{ route('menu.store') }}" method="POST">
                    @csrf
                    <h3 class="add_category_title">
                        <select name="category" id="">
                            <option value="">カテゴリーを選択してください</option>
                            @foreach( $categories as $cat )
                                <option value="{{ $cat['id'] }}">{{ $cat['category'] }}</option>
                            @endforeach
                        </select>
                    </h3>
                    <h3 class="add_part_title">
                        <select name="part" id="">
                            <option value="">パーツを選択してください</option>
                            @foreach( $parts as $part )
                                <option value="{{ $part['id'] }}">{{ $part['part'] }}</option>
                            @endforeach
                        </select>
                    </h3>
                    <div>
                        <input type="text"
                            name="gender" value="{{ $gender['id'] }}" hidden>
                    </div>
                    <div class="flex add_cardD--menu">
                        <div class="inputs_icon">
                            <img src="/storage/icon_menu.png" alt="">
                        </div>
                        <input type="text"
                            name="menu"
                            placeholder="メニュー名を入力してください">
                    </div>
                    <div class="flex add_cardD--price">
                        <div class="inputs_icon" id="priceB_toggle">
                            <img src="/storage/icon_price.png" alt="">
                        </div>
                        <div class="form_menu_content--price">
                            <input type="text"
                                name="priceA"
                                placeholder="価格を入力してください">
                                <span id="priceB" class="priceB">
                                    <span>~</span>
                                    <input type="text"
                                        name="priceB"
                                        placeholder="価格を入力してください">
                                </span>
                        </div>
                    </div>
    
                    <div class="add_button">
                        <button>追加</button>
                    </div>
                </form>
            </div>
        </div>
        @endif
    
        <div class="main_menus">
            @foreach( $categories as $cat )
                @if( $cat['menus']->contains('gender_id', $gender['id']) )
                    <div class="card">
                        <h2 class="category_title">{{ $cat['category'] }}</h2>
                        
                            @if( $cat['category'] === "セレクト６回コース")
                                <div class="part_detail">
                                    @foreach( $parts as $part )
                                        @if( $part['part'] === "Sパーツ" || $part['part'] === "Lパーツ" )
                                        <p class="part_title">{{ $part['part'] }}</p>
                                        <ul>
                                            @foreach( $part['details'] as $detail )
                                            <li>{{ $detail['detail'] }}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    @endforeach
                                </div>
                            @elseif( $cat['category'] === "Select 6set" )
                                <div class="part_detail">
                                    @foreach( $parts as $part )
                                        @if( $part['part'] === "S parts" || $part['part'] === "L parts" )
                                        <p class="part_title">{{ $part['part'] }}</p>
                                        <ul>
                                            @foreach( $part['details'] as $detail )
                                            <li>{{ $detail['detail'] }}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    @endforeach
                                </div>
                            @endif

                            @foreach( $menus as $menu )
                                @if( $menu['part_id'] === null )
                                    @if( $menu['category_id'] === $cat['id'] )
                                        <div class="course line">
                                            <div>
                                                @if( Auth::check() )
                                                <a href="/menu/{{ $menu['id'] }}" class="update_icon">
                                                    <img src="/storage/icon_update.png" alt="">
                                                </a>
                                                @endif
                                                <b>{{ $menu['menu'] }}</b>
                                            </div>
                                            @if( $menu['priceB'] === null )
                                            <p>￥{{ number_format($menu['priceA']) }}</p>
                                            @else
                                            <div>
                                                <p>￥{{ number_format($menu['priceA']) }}</p>
                                                <span>~</span>
                                                <p>￥{{ number_format($menu['priceB']) }}</p>
                                            </div>
                                            @endif
                                        </div>
                                    @endif
                                @endif
                                
                            @endforeach
                        
                            @foreach( $parts as $part )
                                @if( $part['menus']->contains("category_id", $cat['id'])  )
                                    <p class="part_title">{{ $part['part'] }}</p>
                                    <div class="part_detail">
                                        <ul>
                                            @foreach( $part_details as $detail )
                                                @if( $part['menus']->contains("part_id", $detail['part_id']) )
                                                <li>{{ $detail['detail'] }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    @foreach( $part['menus'] as $item )
                                        @if( $item['category_id'] === $cat['id'] )
                                            <div class="course line">
                                                <div>
                                                    @if( Auth::check() )
                                                    <a href="/menu/{{ $item['id'] }}" class="update_icon">
                                                        <img src="/storage/icon_update.png" alt="">
                                                    </a>
                                                    @endif
                                                    <b>{{ $item['menu'] }}</b>
                                                </div>
                                                @if( $item['priceB'] === null )
                                                <p>￥{{ number_format($item['priceA']) }}</p>
                                                @else
                                                <div>
                                                    <p>￥{{ number_format($item['priceA']) }}</p>
                                                    <span>~</span>
                                                    <p>￥{{ number_format($item['priceB']) }}</p>
                                                </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        
                    </div>
                @endif
            @endforeach
        </div>
    </div>

</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

<script>

    const categories = document.querySelectorAll('.top_categories>div');
        for (const [i, e] of categories.entries()) {
            e.id = `category${i}`;
        }

    const targets = document.querySelectorAll('.main_menus>div');
        for (const [i, e] of targets.entries()) {
            e.id = `target${i}`;
        }

        if( categories != null ){
            for ( let i = 0; i < targets.length; i++ ) {            // console.log(positions);
                categories[i].addEventListener('click', () => {
                    let scrolled = window.scrollY;
                    const position = targets[i].getBoundingClientRect().top;
                    window.scrollTo( 0, position + scrolled- 120);
                });
            }
        }

    const Toggle = document.getElementById('priceB_toggle');
    const PriceB = document.getElementById('priceB');
    
    if( Toggle != null ){
        Toggle.addEventListener('click', () => {
            PriceB.classList.toggle('priceB_active');
        });
    }

    const File = document.getElementById('inputFile');
    const FileContent = document.getElementById('inputFileContent');
    
    if( File != null ){
        File.addEventListener('change', () => {
            FileContent.innerText = File.files[0].name;
        })
    }

</script>

@endsection