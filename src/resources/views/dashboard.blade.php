@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\dashboard.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css\menu.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css\menu.css') }}">
@endif

<div class="dashboard">

    <div class="stuff_campaign">
        <a href="/user" class="stuff_list">
            <h3>スタッフリスト</h3>    
        </a>

        <a href="/campaign" class="campaign_list">
            <h3>キャンペーンリスト</h3>
        </a>
    </div>


    <div class="menu">
    
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

</div>
    

    <div class="back_button">
        <button type="button" onClick="history.back()">戻る</button>
    </div>


@endsection
