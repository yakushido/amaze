@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\campaign.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\campaign.css') }}">
@endif


<h2 class="top_title">[ Campaign ]</h2>

<div class="add_card campaign_add_card">
    <h2>キャンペーン追加フォーム</h2>
    <form action="{{ route('campaign.store') }}" method="POST">
        @csrf
        <div class="flex--center">
            <div class="inputs_icon">
                <img src="{{ Storage::url('icon_gender.png') }}" alt="">
            </div>
            <select name="gender" id="">
                <option value="">性別を選択してください</option>
                @foreach( $genders as $gender )
                <option value="{{ $gender['id'] }}">{{ $gender['gender'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex--center">
            <div class="inputs_icon">
                <img src="{{ Storage::url('icon_title.png') }}" alt="">
            </div>
            <input type="text"
                placeholder="タイトルを入力してください"
                name="title">
        </div>
        <div class="flex--center">
            <div class="inputs_icon">
                <img src="{{ Storage::url('icon_day.png') }}" alt="">
            </div>
            <div class="campaign_add_card--date">
                <input type="date" name="start">
                <span>~</span>
                <input type="date" name="end">
            </div>
        </div>
        <div class="textarea">
            <h3>詳細</h3>
            <textarea name="detail"></textarea>
        </div>
        <div>
            <button>追加</button>
        </div>
    </form>
</div>

<div class="campaign_list">
    <div>
        <h3 class="campaign_term_title">【 期間中 】</h3>
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

    <div>
        <h3 class="campaign_term_title">【 期間外 】</h3>
            @foreach( $campaigns as $cam )
                @if( !($cam['end'] >= $today && $cam['start'] <= $today) )
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
</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

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
</script>

@endsection