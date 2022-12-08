@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\welcome.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css\menu.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css\campaign.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css\user.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('css\welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css\campaign.css') }}">
    <link rel="stylesheet" href="{{ asset('css\user.css') }}">
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fuggles&display=swap" rel="stylesheet">

    <div class="top">
    <div>
        <!-- <div class="top--logo">
            <img src="/storage/amaze_logo_hide_white.png" alt="">
        </div> -->
        <div class="top--imgA">
            <img src="/storage/shop_image0.jpeg" alt="">
        </div>
        <div class="top--imgB">
            <img src="/storage/shop_image1.jpeg" alt="">
        </div>
        <!-- <div class="top--imgC">
            <img src="/storage/shop_image2.jpeg" alt="">
        </div> -->
        <div class="top--imgD">
            <img src="/storage/shop_image3.jpeg" alt="">
        </div>
        <div class="top--amaze">
            <h3>AMAZE</h3>
        </div>
        <div class="top--salon">
            <h3>TOTAL</br>BEAUTY</br>SALON</h3>
        </div>
        <div class="top--map" id="map">
            <h3>MAP</h3>
        </div>
        <div class="top--bg">
            <p>Esthetic</p>
            <p>Eyelashes</p>
            <p>Nail</p>
        </div>
    </div>
</div>

<div class="campaign">
    <h2 class="top_title">[ Campaign ]</h2>

        @foreach( $campaigns as $cam )
            @if( $cam['end'] >= $today && $cam['start'] <= $today )
                <ul class="campaign_ul">
                    <li class="campaign_title flex">
                        <p id="gender">{{ $cam['gender']['gender'] }}</p>
                        <a href="/campaign/{{ $cam['id'] }}">
                            <span>詳細</span>
                            {{ $cam['title'] }}
                        </a>
                    </li>
                    <li class="campaign_term">
                        <h3>キャンペーン期間：</h3>
                        <div>
                            <p>{{ $cam['start'] }}</p>
                            <span>~</span>
                            <p>{{ $cam['end'] }}</p>
                        </div>
                    </li>
                </ul>
            @endif
        @endforeach
</div>

<div class="menu">
    <h2 class="top_title">[ Menu ]</h2>
    
    <div>
        @foreach( $genders as $gender )
            @if( $gender['id'] != 3 )
                <a href="/gender/{{$gender['id']}}" class="menu_gender">
                    <div class="gradation">
                        @if( $gender['id'] === 1 )
                        <img class="img_test" src="{{ Storage::url('test_man.jpg') }}" alt="">
                        @elseif( $gender['id'] === 2 )
                        <img class="img_test" src="{{ Storage::url('test_woman.jpg') }}" alt="">
                        @endif
                    </div>
                    <h3>{{ $gender['gender'] }}</h3>
                </a>
            @endif
        @endforeach
    </div>

</div>

<div class="stuff">

        <h3 class="top_title">【 Stuff 】</h3>
        
        <div>
            <div class="users">
                @foreach( $users as $user )
                    <div class="user">
                        <div>
                            <img src="{{ Storage::url($user['picture']) }}" alt="">
                        </div>
                        <h3>{{ $user['name'] }}</h3>
                        <p>{{ $user['detail'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>


</div>

<div id="mapTarget"></div>

<script>
    // 性別
        const gender = @json($genders);
        console.log(gender[0].gender);
        const genders = document.querySelectorAll('#gender');
        for( let i = 0; i < genders.length; i++ ){
            if( genders[i].innerText === gender[0].gender ){
                genders[i].classList.add('men');
            }
            if( genders[i].innerText === gender[1].gender ) {
                genders[i].classList.add('women');
            }
            if( genders[i].innerText === gender[2].gender ) {
                genders[i].classList.add('both');
            }
        }
    
    // mapスクロール
    const map = document.getElementById('map');
    const mapTarget = document.getElementById('mapTarget');
    console.log(map);
    console.log(mapTarget);

    map.addEventListener('click', () => {
        let windowWidth = window.innerWidth;
    const mapPositions = mapTarget.getBoundingClientRect().top;
    let scrolled = window.scrollY;
        if ( windowWidth < 426 ) {
            window.scrollTo( 0, mapPositions + scrolled -50);
        }
        if ( windowWidth < 769 && windowWidth > 425 ) {
            window.scrollTo( 0, mapPositions + scrolled -80);
        }
        if ( windowWidth > 768 ) {
            window.scrollTo( 0, mapPositions + scrolled -100);
        }
    })

</script>

@endsection