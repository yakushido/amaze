@extends('layouts.default')
@section('contents')
    @if(app('env') == 'production')
        <link rel="stylesheet" href="{{ secure_asset('css\welcome.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css\campaign.css') }}">
        @else
        <link rel="stylesheet" href="{{ asset('css\welcome.css') }}">
        <link rel="stylesheet" href="{{ asset('css\campaign.css') }}">
    @endif

<div class="top">
    <div>
        <div class="shop_pictures">
            @foreach( $shop_pictures as $shop_picture )
            <div>
                <img src="{{ Storage::url($shop_picture['picture']) }}" alt="">
            </div>
            @endforeach  
        </div>
        <div class="menu_humbergar" id="menu_humbergar">
            <span class="menu_humbergar_bar--top"></span>
            <span class="menu_humbergar_bar--middle"></span>
            <span class="menu_humbergar_bar--bottom"></span>
        </div>
        <div class="mask" id="mask">
            <ul class="mask-menu__lists">
                <li><a href="/menu/men">【 男性Menu 】</a></li>
                <li><a href="/menu/women">【 女性Menu 】</a></li>
            </ul>
        </div>
        <div class="top_day">
            <h2>OPEN 10:00 - 19:00</h2>
            <p>定休日 第二・第四日曜日</p>
            <div>
                <button onclick="scrollToDown()">Map</button>
            </div>
        </div>
    </div>
</div>

<div class="category">
    <div class="campain">
        <h3 class="category_title">[ Campain ]</h3>

            @foreach( $campaigns as $cam )
                @if( $cam['end'] >= $today && $cam['start'] <= $today )
                    <ul class="campaign_ul">
                        <li class="campaign_ul_first">
                            <a href="/campaign/detail/{{ $cam['id'] }}">
                                <span>詳細</span>
                                {{ $cam['title'] }}
                            </a>
                        </li>
                        <li class="campaign_ul_second">
                            <p><span></span>{{ $cam['start'] }}<span class="td_span">~</span>{{ $cam['end'] }}</p>
                            <p id="gender">{{ $cam['gender']['name'] }}</p>
                        </li>
                    </ul>
                @endif
            @endforeach
    </div>
    
    <div class="menu">
        <h3 class="category_title">[ Menu ]</h3>
        <div class="flex">
            <div class="menu_sex">
                <a href="/menu/men">
                    <div>
                        <div class="gradation">
                            <img class="img_test" src="{{ Storage::url('img\test_man.jpg') }}" alt="">
                        </div>
                    </div>
                    <p>男性用</p>
                </a>
            </div>
            <div class="menu_sex">
                <a href="/menu/women">
                    <div>
                        <div class="gradation">
                            <img class="img_test" src="{{ Storage::url('img\test_woman.jpg') }}" alt="">
                        </div>
                    </div>
                    <p>女性用</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    // 性別
        const genders = document.querySelectorAll('#gender');
        for( let i = 0; i < genders.length; i++ ){
            if( genders[i].innerText === "男性" ){
                genders[i].classList.add('men');
            }
            if( genders[i].innerText === "女性" ) {
                genders[i].classList.add('women');
            }
            if( genders[i].innerText === "男女共通" ) {
                genders[i].classList.add('both');
            }
        }

    // TOPスライド
        let slides = document.getElementsByClassName('shop_pictures')[0].getElementsByTagName('div');
        viewSlide(2000);
        function viewSlide(msec, slide_no = -1)
        {
            if (slide_no >= 0) {
                slides[slide_no].style.opacity = 0;
            }
            slide_no++;
            if (slide_no >= slides.length) {
                slide_no = 0;
            }
            slides[slide_no].style.opacity = 1;
            slides[slide_no].style.transition = '1s';
            setTimeout(function(){viewSlide(msec, slide_no);}, msec);
        }

    // ハンバーガーメニュー
        const menu = document.getElementById("menu_humbergar");
        const mask = document.getElementById("mask");
        menu.addEventListener('click',() => {
            menu.classList.toggle('active');
            mask.classList.toggle('active');
        });
</script>

@endsection

