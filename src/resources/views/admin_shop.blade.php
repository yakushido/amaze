@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\admin_shop.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\admin_shop.css') }}">
@endif

<div class="sub_body">

    <div class="top_title admin_top_title">
        <h2>管理者ページ</h2>
        <div>
            <h3>Shop Image</h3>
            <p>【 店舗写真 】</p>
        </div>
    </div>

    <div class="back_to_menu">
        <a href="/admin">戻る</a>
    </div>

        <div class="admin_add card">
            <h3 class="genre_title">写真の追加フォーム</h3>
            <form action="{{ route('admin_shop.store') }}" method="POST" class="picture_add_form" enctype="multipart/form-data">
            @csrf
                <div class="admin_add_form_text">
                    <div class="icon_img">
                        <img src="/storage/icon_title.png">
                    </div>
                    <input type="text" name="name" placeholder="タイトルを入力してください">
                </div>
                <div class="admin_add_form_text">
                    <div class="icon_img">
                        <img src="/storage/icon_category.png" alt="">
                    </div>
                    <select name="category_id">
                        <option value="">カテゴリーを選択してください</option>
                        @foreach( $categoryLists as $category )
                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <div class="file_flex">
                        <div class="icon_img">
                            <img src="/storage/icon_picture.png" alt="">
                        </div>
                        <p class="fileLabel">ファイルを選択</p>
                        <input type="file" name="img_path" id="fileInput" class="fileInput">
                    </div>
                    <div class="file_name">
                        <p id="fileName">ファイルが未選択です</p>
                    </div>
                </div>
                <div class="admin_add_form_button">
                    <button id="buttonChange">追加する</button>
                </div>
            </form>
        </div>

        <div>
            
            @foreach( $shop_pictures as $pic )
                <div class="picture_card card">
                    <div class="flex picture_card_title">
                        <h3>{{ $pic['name'] }}</h3>
                        <form action="{{ route('admin_shop.delete', $pic['id']) }}" method="POST">
                            @csrf
                            <div class="icon_img">
                                <button>
                                    <img src="/storage/icon_delete.jpg" alt="">
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <img src="{{ Storage::url($pic['picture']) }}" alt="">
                    </div>
                </div>
            @endforeach

        </div>

    </div>

</div>

<script>

    // input['file']　装飾
    const fileInput = document.getElementById('fileInput');
    const fileName = document.getElementById('fileName');
    fileInput.addEventListener('change', () => {
        fileName.innerHTML = fileInput.files[0].name;
    });
</script>

@endsection