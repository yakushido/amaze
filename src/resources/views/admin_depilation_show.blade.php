@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\admin_depilation.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css\admin_depilation_show.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\admin_depilation.css') }}">
<link rel="stylesheet" href="{{ asset('css\admin_depilation_show.css') }}">
@endif

<div class="sub_body">

    <div class="back">
        <a href="/admin/depilation">戻る</a>
    </div>

    <div class="card">
        <h3 class="genre_title">編集フォーム</h3>
        <form action="{{ route('admin_depilation.update',  ['id' => $depilation_update['id'], 'genre_id' => $depilation_update['depilation_genre_id']] ) }}" class="admin_update_form" method="POST">
            @csrf
            <div class="flex line">
                <b>
                    <input type="text" name="name" value="{{ $depilation_update['name'] }}">
                </b>
                <p>
                    ￥<input type="text" name="plice" value="{{ $depilation_update['plice'] }}">
                </p>
            </div>
            <div>
                <button>確定</button>
            </div>
        </form>
    </div>

</div>

@endsection