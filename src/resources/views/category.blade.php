@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\category.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\category.css') }}">
@endif

<div class="top_title">
    <h2>カテゴリーリスト</h2>
</div>

<div class="category">
    @foreach( $genres as $genre )
        <div class="category_lists">
            <div>
                <div>
                    <h2>{{ $genre['e-name'] }}</h2>
                    <p>【{{ $genre['j-name'] }}】</p>
                </div>
            </div>
            <div>
                @foreach( $genre['categories'] as $cat )
                <div class="category_list">
                    <div>
                        <h3>{{ $cat['category'] }}</h3>
                        <a href="/category/{{ $cat['id'] }}">
                            <img src="/storage/icon_update.png" alt="">
                        </a>
                    </div>
                    <div>
                        <img src="{{ Storage::url($cat['picture']) }}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

@endsection