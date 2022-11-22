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

    <div class="back">
        <a href="/admin/campaign">戻る</a>
    </div>

    <div class="card">
        <form action="{{ route('admin_campaign.update', $campaign['id']) }}" method="POST">
            @csrf
            <h3 class="admin_campaign_title">タイトル：<input type="text" name="title" value="{{ $campaign['title'] }}"></h3>

            <div class="admin_campaign">
                <div class="flex">
                    <h4>期間:</h4>
                    <p>
                        <input type="date" name="start" value="{{ $campaign['start'] }}">
                        <span>~</span>
                        <input type="date" name="end" value="{{ $campaign['end'] }}">
                    </p>
                </div>
                <div class="flex">
                    <h4>対象:</h4>
                    <p>
                        <select name="gender">
                            <option value="{{ $campaign['gender_id'] }}">{{ $campaign['gender']['name'] }}</option>
                            @foreach( $campaign_gender as $gender )
                            <option value="{{ $gender['id'] }}">{{ $gender['name'] }}</option>
                            @endforeach
                        </select>
                    </p>
                </div>
                <div>
                    <h4 class="admin_campaign_detail_title">詳細:</h4>
                    <p class="admin_campaign_detail">
                        <textarea name="detail" id="ta"></textarea>
                    </p>
                </div>
                <div class="admin_add_form_button">
                    <button>確定</button>
                </div>
            </div>
        </form>

    </div>
</div>

<script>
        // textarea
        document.getElementById('ta').value = '{{ $campaign['detail'] }}';
</script>

@endsection