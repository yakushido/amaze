<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMAZE</title>
    @if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css\reset.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css\default.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kolker+Brush&display=swap" rel="stylesheet">
    @else
    <link rel="stylesheet" href="{{ asset('css\reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css\default.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kolker+Brush&display=swap" rel="stylesheet">
    @endif
</head>
<body class="body">

    <header class="header">
        <div>
            <h1 class="top_title">AMAZE</h1>
        </div>
        <div class="shop_tel">
            <table class="shop_tel_table">
                <tr>
                    <th>【TEL】</th>
                    <th>【携帯】</th>
                </tr>
                <tr>
                    <td>0994-45-7008</td>
                    <td>080-8384-9955</td>
                </tr>
            </table>
            <p>お電話に出られない場合は折り返しお電話いたします。</p>
            <p>メールでのご予約はご遠慮ください</p>
        </div>
    </header>

    <main class="main">
        @yield('contents')
    </main>

    <footer class="footer" id="target">
        <h2 class="footer_title">[ Map ]</h2>
        <div class="footer_flex">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.9890025884793!2d130.86740047986729!3d31.386866760953033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353e91505a6b520b%3A0xcb5da2ea591e2780!2z44Ki44Oh44Kk44K677yI77yh77yt77yh77y677yl77yJ!5e0!3m2!1sja!2sjp!4v1667924170530!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="footer_contact">
                <ul>
                    <li><h3>連絡先</h3></li>
                    <li><p>0994-45-7008</p></li>
                    <li><h3>アクセス・道案内</h3></li>
                    <li><p>寿にある鹿屋警察署の道路斜め向かい側にある３階建てのビルの２階になります。 </p></li>
                    <li><h3>駐車場</h3></li>
                    <li><p>※ビルの裏側に御座います。</p></li>
                    <li></li>
                    <li><a href="/login">管理者ログイン</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>

    <script>
        // const menu = document.getElementById("menu_humbergar");
        // const mask = document.getElementById("mask");
        // menu.addEventListener('click',() => {
        //     menu.classList.toggle('active');
        //     mask.classList.toggle('active');
        // });


        // const fileInput = document.getElementById('fileInput');
        // const fileName = document.getElementById('fileName');
        // fileInput.addEventListener('change', () => {
        //     fileName.innerHTML = fileInput.files[0].name;
        // });
        
        // const test = document.getElementById('test_btn');
        // let slides = document.getElementsByClassName('shop_pictures')[0].getElementsByTagName('div');
        // viewSlide(2000);
        // function viewSlide(msec, slide_no = -1)
        // {
        //     if (slide_no >= 0) {
        //         slides[slide_no].style.opacity = 0;
        //     }
        //     slide_no++;
        //     if (slide_no >= slides.length) {
        //         slide_no = 0;
        //     }
        //     slides[slide_no].style.opacity = 1;
        //     slides[slide_no].style.transition = '1s';
        //     setTimeout(function(){viewSlide(msec, slide_no);}, msec);
        // }

    </script>
</body>
</html>