@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\menu_women.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\menu_women.css') }}">
@endif

<div class="genre">
    <ul>
        <li>
            <a href="/menu/women/eyelash">
                <h2>Eyelashes Extensions & Perm</h2>
                <p>【マツエク＆まつげパーマ】</p>
            </a>
        </li>
    </ul>
</div>

@endsection