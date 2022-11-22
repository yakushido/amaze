@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\depilation.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\depilation.css') }}">
@endif

<div class="sub_body">

    <div class="back">
        <a href="/admin/depilation">戻る</a>
    </div>

    <div class="card">
        <h3 class="genre_title">編集フォーム</h3>
        <form action="{{ route('admin_depilation_partS.update', $S['id']) }}" class="admin_update_form" method="POST">
            @csrf
            <div class="admin_part_input_update admin_add_form_text">
                <b>
                    <input type="text" name="name" value="{{ $S['name'] }}">
                </b>
            </div>
            <div class="admin_update_delete">
                <a href="/admin/depilation/partS/delete/{{ $S['id'] }}" class="admin_delete_button">削除</a>
                <button class="admin_update_button">確定</button>
            </div>
        </form>
    </div>

</div>

@endsection