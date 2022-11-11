@extends('layouts.default')
@section('contents')

@if(app('env') == 'production')
<link rel="stylesheet" href="{{ secure_asset('css\eyelash.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css\eyelash.css') }}">
@endif

<div class="eyelash">
    <div class="eyelash_title">
        <h2>Eyelashes Extensions & Perm</h2>
        <p>【マツエク＆まつげパーマ】</p>
    </div>

    <div class="eyelash_category" id="category">
        @foreach( $eyelashImages as $image )
            <div class="eyelash_category_flex">
                <div>
                    <div>
                        <img src="{{ Storage::url($image['picture']) }}" alt="">
                    </div>
                </div>
                <h3>{{ $image['eyelash_course']['name'] }}</h3>
                <div>
                    @foreach( $eyelashComments as $comment )
                        @if( $image['eyelash_course_id'] === $comment['eyelash_course_id'] )
                            <ul>
                                <li>{{ $comment['comment'] }}</li>
                            </ul>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="menu">[ Menu ]</h3>

    <div id="category_target">
    @foreach( $eyelashCategories as $Category )
        <div class="eyelash_card">
            <h3 class="eyelash_menu">{{ $Category['name'] }}</h3>
            @foreach( $eyelashLists as $list )
                @if( $Category['id'] === $list['eyelash_category_id'] )
                    <ul  class="eyelash_course">
                        <li>
                            {{ $list['eyelash_course']['name'] }}
                            @foreach( $eyelashLimits as $limit )
                                @if( $list['eyelash_course_id'] === $limit['eyelash_course_id'] )
                                    <span class="eyelash_limit">{{ $limit['limit'] }}</span>
                                @endif
                            @endforeach
                        </li>
                        <li class="eyelash_course--plice">
                            @if( $list['eyelash_course_id'] === 3 )
                            <span>+</span>
                            @elseif( $list['eyelash_course_id'] === 7 )
                            <span>+</span>
                            @elseif( $list['eyelash_course_id'] === 9 )
                            <span>+</span>
                            @elseif( $list['eyelash_course_id'] === 13 )
                            <span>+</span>
                            @endif
                            ￥{{ $list['eyelash_course']['plice'] }}
                        </li>
                    </ul>
                @endif
            @endforeach
        </div>
    @endforeach
    </div>
</div>

<script>
    const elements = document.querySelectorAll('#category_target>div');
    for (const [i, e] of elements.entries()) {
	    e.id = `category_target-${i}`;
    }
    const categories = document.querySelectorAll('#category>div');
    for (const [i, e] of categories.entries()) {
	    e.id = `category-${i}`;
    }
    const cat = [
        document.getElementById('category-0'),
        document.getElementById('category-1'),
        document.getElementById('category-2'),
        document.getElementById('category-3'),
    ];
    const cat_target = [
        document.getElementById('category_target-0'),
        document.getElementById('category_target-1'),
        document.getElementById('category_target-2'),
        document.getElementById('category_target-3'),
    ];
    // var rect = elements.getBoundingClientRect();
    // var position = rect.top;   
    // function scrollToDown() {
    //     scrollTo(0, position);
    // }
    const cat_position = [
        cat_target[0].getBoundingClientRect().top,
        cat_target[1].getBoundingClientRect().top,
        cat_target[2].getBoundingClientRect().top,
        cat_target[3].getBoundingClientRect().top,
    ]
    let scrolled = window.scrollY;
    cat[0].addEventListener('click', () => {
        window.scrollTo( 0, cat_position[0] - 70);
        console.log(cat_position[0]);
    });
    cat[1].addEventListener('click', () => {
        window.scrollTo( 0, cat_position[1] - 70);
        console.log(cat_position[1]);
    });
    cat[2].addEventListener('click', () => {
        window.scrollTo( 0, cat_position[3] - 70);
        console.log(cat_position[3]);
    });
    cat[3].addEventListener('click', () => {
        window.scrollTo( 0, cat_position[3] - 70);
        console.log(cat_position[3]);
    });

</script>
@endsection