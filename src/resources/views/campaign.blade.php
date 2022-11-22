@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\campaign.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\campaign.css') }}">
@endif

<div class="sub_body">

    <div class="top_title">
        <h2>Campaign Detail</h2>
        <p>【 キャンペーンの詳細 】</p>
    </div>

    <div class="back_to_menu">
        <a href="/">戻る</a>
    </div>

    <div class="card">
        <h3 class="genre_title">{{ $campaign['title'] }}</h3>
        <div class="campaign">
            <div class="flex campaign_term">
                <h4>期間:</h4>
                <p>
                    {{ $campaign['start'] }}
                    <span>~</span>
                    {{ $campaign['end'] }}
                </p>
            </div>
            <div class="flex campaign_gender">
                <h4>対象:</h4>
                <p id="gender">{{ $campaign['gender']['name'] }}</p>
            </div>
            <div class="campaign_detail">
                <h4>詳細:</h4>
                <p>{{ $campaign['detail'] }}</p>
            </div>
        </div>
    </div>

</div>

<script>
    // 性別
        const gender = document.getElementById('gender');
        // console.log(gender);
        if( gender.innerText === "男性" ){
            gender.classList.add('men');
        }
        if( gender.innerText === "女性" ) {
            gender.classList.add('women');
        }
        if( gender.innerText === "男女共通" ) {
            gender.classList.add('both');
        }
</script>

@endsection