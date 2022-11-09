@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\admin.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\admin.css') }}">
@endif

<div class="admin">
    <h2>管理者用ページ</h2>
    <div class="picture">
        <h3 class="picture_title">写真の追加フォーム</h3>
        <form action="{{ route('admin.store') }}" method="POST" class="picture_add_form" enctype="multipart/form-data">
        @csrf
            <div>
                <img src="/storage/icon_title.png">
                <input type="text" name="name" placeholder="タイトルを入力してください">
            </div>
            <div>
                <img src="/storage/icon_category.png" alt="">
                <select name="category_id">
                    <option value="">カテゴリーを選択してください</option>
                    @foreach( $categoryLists as $category )
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <div class="file_flex">
                    <img src="/storage/icon_picture.png" alt="">
                    <p class="fileLabel">ファイルを選択</p>
                    <input type="file" name="img_path" id="fileInput" class="fileInput">
                </div>
                <div class="file_name">
                    <p id="fileName">ファイルが未選択です</p>
                </div>
            </div>
            <div>
                <button id="buttonChange">追加する</button>
            </div>
        </form>
    </div>
</div>

@endsection