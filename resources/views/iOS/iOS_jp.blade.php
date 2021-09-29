<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
    <link rel="stylesheet" href="{{ asset('css/web_style.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="navbar">
        <div class="navbar_logo">
            <i class='bx bx-code-alt icon'></i>
                Jh's Portfolio
                <a href="#" class="navbar_toggleBtn">
                    <i class='bx bx-menu'></i>
                </a>
        </div>
        <ui class="navbar_menu">
            <li><a href="{{ route('home_en') }}" class="list_btn">
                <i class='bx bx-home-alt'></i>
                <span class="links_name">ホーム</span>
            </a>
            </li>
            <li><a href="{{ route('web_en') }}" class="list_btn">
                <i class='bx bx-code-alt'></i>
                <span class="links_name">Web</span>
            </a>
            </li>
            <li>
                <a href="{{ route('java_en') }}" class="list_btn">
                    <i class='bx bx-code-curly' ></i>
                    <span class="links_name">Java</span>
                </a>
            </li>
        </ui>
        <ul class="navbar_icons">
            <li><a href="{{ route('iOS_kr') }}" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a></li>
            <li><a href="{{ route('iOS_en') }}" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a></li>
            <li><a href="#" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a></li>
        </ul>
    </nav>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-apple icon'></i>
                <div class="logo_name">Jh's Portfolio</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('home_jp') }}" class="list_btn">
                    <i class='bx bx-home-alt'></i>
                    <span class="links_name">ホーム</span>
                </a>
                    <span class="tooltip">home</span>
            </li>
            <li>
                <a href="{{ route('web_jp') }}" class="list_btn">
                    <i class='bx bx-code-alt' ></i>
                    <span class="links_name">Web</span>
                </a>
                    <span class="tooltip">Web</span>
            </li>
            <li>
                <a href="{{ route('java_jp') }}" class="list_btn">
                    <i class='bx bx-code-curly' ></i>
                    <span class="links_name">Java</span>
                </a>
                    <span class="tooltip">Java</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                    <a href="{{ route('iOS_kr') }}" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a>
                    <a href="{{ route('iOS_en') }}" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a>
                    <a href="#" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a>
                </div>
                <i class='bx bx-font' id="log_out" ></i>
            </li>
        </ul>
    </div>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/iOS/pj3.jpeg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">メモアプリ</h1>
            <p class="blog-post_text">初めてアプリストアにアップロードしたメモアプリ</p>
            <p class="blog-post_text">swift</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/iOS/receipt.jpeg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">ポイント交換アプリ</h1>
            <p class="blog-post_text">買い物をしてもらう領収書の写真を送るとポイントをゲットできるアプリのリニュアル</p>
            <p class="blog-post_text">swift</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/iOS/baby.jpeg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">赤ちゃんマイナビ</h1>
            <p class="blog-post_text">赤ちゃんの成長記録と育てる時に役に立てる情報とニュースを確認できるアプリ</p>
            <p class="blog-post_text">swift</p>
        </div>
    </div>
</section>
<script src="{{ asset('js/web_script.js') }}"></script>
</body>
</html>