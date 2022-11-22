@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\welcome.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css\campaign.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\welcome.css') }}">
<link rel="stylesheet" href="{{ asset('css\campaign.css') }}">
@endif

<div class="sub_body">

    <div class="top_title admin_top_title">
        <h2>管理者ページ</h2>
        <div>
            <h3>Campaign</h3>
            <p>【 キャンペーン 】</p>
        </div>
    </div>

    <div class="back_to_menu">
        <a href="/admin">戻る</a>
    </div>

    <div class="admin_add card">
        <h3 class="genre_title">追加フォーム</h3>
        <form action="{{ route('admin_campaign.store') }}" method="POST">
            @csrf
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_title.png" alt="">
                </div>
                <input type="text" name="title" placeholder="タイトルを入力してください">
            </div>
            <div class="admin_add_form_text admin_add_form_date">
                <div class="icon_img">
                    <img src="/storage/icon_day.png" alt="">
                </div>
                <input type="date" name="start">から<input type="date" name="end">まで
            </div>
            <div class="admin_add_form_text">
                <div class="icon_img">
                    <img src="/storage/icon_gender.png" alt="">
                </div>
                <select name="gender" id="">
                    <option value="">選択してください</option>
                    @foreach( $gender_Lists as $list )
                    <option value="{{ $list['id'] }}">{{ $list['name']  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="admin_campaign_detail">
                <textarea name="detail" id="" cols="50" rows="10" placeholder="詳細を入力してください"></textarea>
            </div>
            <div class="admin_add_form_button">
                <button>追加</button>
            </div>
        </form>
    </div>

    <div class="category">
        <div class="card">
            <h3 class="genre_title">Campain 期間中</h3>
            <div>
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
                            <div class="admin_update_delete">
                                <form action="{{ route('admin_campaign.delete', $cam['id']) }}" method="POST">
                                    @csrf
                                    <div>
                                        <button class="admin_delete_button">削除</button>
                                    </div>
                                </form>
                                
                                <form action="{{ route('admin_campaign.show', $cam['id']) }}" method="GET">
                                    @csrf
                                    <div>
                                        <button class="admin_update_button">編集</button>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    @endif
                @endforeach
            </div>

        </div>

        <div class="card">
            <h3 class="genre_title">Campain Lists</h3>
            <div>
                @foreach( $campaigns as $cam )  
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
                        <div class="admin_update_delete">
                            <form action="{{ route('admin_campaign.delete', $cam['id']) }}" method="POST">
                                @csrf
                                <div>
                                    <button class="admin_delete_button">削除</button>
                                </div>
                            </form>
                            
                            <form action="{{ route('admin_campaign.show', $cam['id']) }}" method="GET">
                                @csrf
                                <div>
                                    <button class="admin_update_button">編集</button>
                                </div>
                            </form>
                        </div>
                    </ul>
                @endforeach
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
</script>

@endsection