@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\bridal.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\bridal.css') }}">
@endif

<div class="sub_body">

    <div class="back">
        <a href="/admin/bridal">戻る</a>
    </div>

    <div class="card">
        <h3 class="genre_title">編集フォーム</h3>
        <form action="{{ route('admin_bridal.update',  ['id' => $bridal_update['id'], 'genre_id' => $bridal_update['bridal_genre_id']] ) }}" class="admin_update_form" method="POST">
            @csrf
                @if( isset( $bridal_update['part'] ) )
                    <div class="flex admin_bridal_D_menu">
                        <div>
                            <b>
                                <input type="text" name="name" value="{{ $bridal_update['name'] }}">
                            </b>
                            <p>
                                <input type="text" name="part" value="{{ $bridal_update['part'] }}">
                            </p>
                        </div>
                        <p>
                            ￥<input type="text" name="plice" value="{{ $bridal_update['plice'] }}">
                        </p>
                    </div>
                @else
                    <div class="flex line">
                        <b>
                            <input type="text" name="name" value="{{ $bridal_update['name'] }}">
                        </b>
                        <p>
                            ￥<input type="text" name="plice" value="{{ $bridal_update['plice'] }}">
                        </p>
                    </div>
                @endif
            <div>
                <button>確定</button>
            </div>
        </form>
    </div>

</div>

@endsection