@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\campaign.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\campaign.css') }}">
@endif

    <div class="top_title">
        <h2>Campaign Detail</h2>
        <p>【 キャンペーンの詳細 】</p>
    </div>

    @if( !Auth::check() )
    <div class="campaign_card">

        <h3>{{ $campaign['title'] }}</h3>

        <div class="flex--center campaign_card_term">
            <h4>期間:</h4>
            <div>
                <p>{{ $campaign['start'] }}</p>
                <span>~</span>
                <p>{{ $campaign['end'] }}</p>
            </div>
        </div>

        <div class="flex--center campaign_card_gender">
            <h4>対象:</h4>
            <p id="gender">{{ $campaign['gender']['gender'] }}</p>
        </div>

        <div class="campaign_card_detail">
            <h4>詳細:</h4>
            <p>{{ $campaign['detail'] }}</p>
        </div>

    </div>
    @endif

    @if( Auth::check() )
    <div class="update_card campaign_update_card">

        <div class="campaign_update_top">
            <h2>キャンペーン編集フォーム</h2>
            <a href="" class="inputs_icon">
                <img src="{{ Storage::url('icon_delete.jpg') }}" alt="">
            </a>
        </div>

        <form action="">
            <h3>
                <input type="text"
                    name="title"
                    value="{{ $campaign['title'] }}">
            </h3>
    
            <div class="flex--center campaign_update_term">
                <h4>期間:</h4>
                <div>
                    <input type="date"
                        name="start"
                        value="{{ $campaign['start'] }}">
                    <span>~</span>
                    <input type="date"
                        name="end"
                        value="{{ $campaign['end'] }}">
                </div>
            </div>
    
            <div class="flex--center campaign_update_gender">
                <h4>対象:</h4>
                <select name="gender" id="gender">
                    <option value="{{ $campaign['gender_id'] }}">{{ $campaign['gender']['gender'] }}</option>
                    @foreach( $genders as $gender )
                    <option value="{{ $gender['id'] }}">{{ $gender['gender'] }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="campaign_update_detail">
                <h4>詳細:</h4>
                <textarea name="detail">{{ $campaign['detail'] }}</textarea>
            </div>

            <div>
                <button>更新</button>
            </div>
        </form>

    </div>
    @endif

    <div class="back_button">
        <button type="button" onClick="history.back()">戻る</button>
    </div>

    <script>

    // 性別
        const campaign = @json($campaign);
        console.log(campaign.gender_id);
        const gender = document.getElementById('gender');
        console.log(gender.innerText);
            if( campaign.gender_id === 1 ){
                gender.classList.add('men');
            }
            if( campaign.gender_id === 2 ) {
                gender.classList.add('women');
            }
            if( campaign.gender_id === 3 ) {
                gender.classList.add('both');
            }

    </script>

@endsection