@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\category.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\category.css') }}">
@endif

<div class="top_title">
    <h2>カテゴリー編集フォーム</h2>
</div>

<div class="category_update_card">
    <form action="{{ route('category.update', $category['id']) }}"
            enctype="multipart/form-data"
            method="POST">
        @csrf
        <h3>
            <input type="text"
                name="category"
                value="{{ $category['category'] }}">
            <a href="/category/delete/{{ $category['id'] }}">
                <img src="/storage/icon_delete.jpg" alt="">
            </a>
        </h3>
        <div class="input_file">
            <label class="input_file_label">
                <input type="file"
                    name="picture"
                    id="inputFile">ファイルを選択
            </label>
            <p id="inputFileContent">選択されていません</p>
        </div>
        <div>
            <button>更新</button>
        </div>
    </form>

</div>

<div class="back_button">
    <button type="button" onClick="history.back()">戻る</button>
</div>


@endsection