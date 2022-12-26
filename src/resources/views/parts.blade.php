@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\parts.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\parts.css') }}">
@endif

<h2 class="form_title">パーツ編集フォーム</h2>

<div class="parts_card">
    
    <div>
        @if($errors->has('part_update'))
            <p class="message">{{$errors -> first('part_update')}}</p>
        @endif
    </div>
    
    <ul class="parts_ul">
        @foreach( $parts as $part )
        <li>
            <form action="{{ route('parts.update', $part['id']) }}" 
                method="POST"
                class="flex">
                @csrf
                <input type="text"
                    name="part_update"
                    value="{{ $part['part'] }}">
                <div>
                    <button class="parts_update">更新</button>
                </div>
            </form>
            <form action="{{ route('parts.delete', $part['id']) }}" method="POST">
                @csrf
                <div>
                    <button class="parts_delete">削除</button>
                </div>
            </form>
        </li>
        @endforeach
    </ul>
</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>

@endsection