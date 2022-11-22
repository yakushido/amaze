@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\nail.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\nail.css') }}">
@endif

<div class="sub_body">

    <div class="back">
        <a href="/admin/nail">戻る</a>
    </div>

    <div class="card">
        <h2 class="genre_title">編集フォーム</h2>
        <h3 class="genre_title">{{ $nail_update['nail_genre']['name'] }}</h3>
        <form action="{{ route('admin_nail.update',  ['id' => $nail_update['id'], 'genre_id' => $nail_update['nail_genre_id']] ) }}" class="admin_update_form" method="POST">
            @csrf
            <div class="flex line">
                <b>
                    <input type="text" name="name" value="{{ $nail_update['name'] }}">
                </b>
                @if( isset($nail_update['plice_B']) )
                    <p>
                        ￥<input type="text" name="plice_A" value="{{ $nail_update['plice_A'] }}">
                        <span> ~ </span>
                        ￥<input type="text" name="plice_B" value="{{ $nail_update['plice_B'] }}">
                    </p>    
                @elseif( isset($nail_update['plice_A']) )
                    <p>
                        ￥<input type="text" name="plice_A" value="{{ $nail_update['plice_A'] }}">
                    </p>
                @else
                    <p>
                        ￥<input type="text" name="plice" value="{{ $nail_update['plice'] }}">
                    </p>
                @endif
            </div>
            <div>
                <button>確定</button>
            </div>
        </form>
    </div>

</div>

@endsection