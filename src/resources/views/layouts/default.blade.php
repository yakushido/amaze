<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amaze</title>
    @if(app('env') == 'production')
        <link rel="stylesheet" href="{{ secure_asset('css\default.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css\reset.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css\default.css') }}">
        <link rel="stylesheet" href="{{ asset('css\reset.css') }}">
    @endif
</head>
<body class="body">
    
    <header class="header">
        <a href="/" class="header_title">
            <img src="/storage/amaze_logo02_hide.png" alt="">
        </a>

        <div class="header_tel">
            <div>
                <ul>
                    <li>【TEL】</li>
                    <li>0994-45-7008</li>
                </ul>
                <ul>
                    <li>【携帯】</li>
                    <li>080-8384-9955</li>
                </ul>
            </div>
            <div>
                <p>お電話に出られない場合は折り返しお電話いたします。</p>
                <p>メールでのご予約はご遠慮ください</p>
            </div>
        </div>
    </header>

    <div class="main">

        <div>
            @if( Auth::check() )
            <div class="admin_top_title">
                <h2>管理者ページ</h2>
                <div>
                    <h3>ログイン中：</h3>
                    <p>{{ Auth::user()['name'] }}様</p>
                    <div class="logout">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button>logout</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif

        </div>

        @yield('contents')
        
    </div>

    <footer class="footer">
        <h2 class="footer_title">[ Map ]</h2>
        <div>
            <div class="map">
                <div>
                    <h3>住所 :</h3>
                    <p>鹿児島県鹿屋市寿7丁目8-50 浜田ビル 2F</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.9890025884793!2d130.86740047986729!3d31.386866760953033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353e91505a6b520b%3A0xcb5da2ea591e2780!2z44Ki44Oh44Kk44K677yI77yh77yt77yh77y677yl77yJ!5e0!3m2!1sja!2sjp!4v1667924170530!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="footer_flex">

                <div class="video">
                    <h3 class="footer_title">[ entry ]</h3>
                    <div>
                        <video controls>
                            <source src="/storage/ビデオ.mp4">
                        </video>
                    </div>
                </div>
                
                <div class="company_profile">
                    <h3 class="footer_title">【 Company Profile 】</h3>
                    <ul>
                        <li>
                            <h3>店舗名</h3>
                            <p>アメイズ(AMAZE)</p>
                        </li>
                        <li>
                            <h3>連絡先</h3>
                            <p>0994-45-7008</p>
                        </li>
                        <li>
                            <h3>アクセス・道案内</h3>
                            <p>寿にある鹿屋警察署の道路斜め向かい側にある３階建てのビルの２階になります。 </p>

                        </li>
                        <li>
                            <h3>駐車場</h3>
                            <p>※ビルの裏側に御座います。</p>

                        </li>
                        <li>
                            <h3>営業時間</h3>
                            <p>10:00～19:00（最終受付/17:30迄）</p>
                        </li>
                        <li>
                            <h3>お休み</h3>
                            <p>第二・第四日曜日</p>
                        </li>
                        <li>
                            <h3>Card</h3>
                            <p>VISA/MasterCard/JCB/クレジットカードご利用いただけます。</p>
                        </li>
                        <li>
                            <p>個室サロンになっておりますので、施術中はお電話に出られない場合が御座います。</br>その場合は、当店からの折り返しのお電話をさせていただきます。</p>
                        </li>
                        <li><a href="/login">管理者ログイン</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

</body>
</html>