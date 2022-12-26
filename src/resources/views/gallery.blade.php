@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\gallery.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css\gallery.css') }}">
@endif
    
<div class="gallery_add_card">
    <h2>ギャラリーの追加フォーム</h2>
    <form action="">
        <div>
            <select name="" id="">
                <option value="">選択してください</option>
                @foreach( $genres as $genre )
                    <option value="{{ $genre['id'] }}">{{ $genre['j-name'] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select name="" id="">
                <option value="">選択してください</option>
                @foreach( $gallery_categories as $g_cat )
                    <option value="">{{ $g_cat['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="input_file">
            <label class="input_file_label">
                <input type="file"
                    name="picture_update"
                    id="inputFile">ファイルを選択
            </label>
            <p id="inputFileContent">選択されていません</p>
        </div>
        <div>
            <button>追加</button>
        </div>
    </form>
</div>

<div class="search">
    <select name="" id="">
        <option value="">選択してください</option>
        @foreach( $genres as $genre )
        <option value="">{{ $genre['j-name'] }}</option>
        @endforeach
    </select>
    <select name="" id="">
        <option value="">選択してください</option>
        @foreach( $gallery_categories as $g_cat )
        <option value="">{{ $g_cat['name'] }}</option>
        @endforeach
    </select>
</div>
<div class="gallery_lists">
    @foreach( $galleries as $gallery )
        <div class="gallery_list">
            <img src="{{ Storage::url($gallery['picture']) }}" alt="">
        </div>
    @endforeach
</div>

@endsection