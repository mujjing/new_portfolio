<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift</title>
    <link rel="stylesheet" href="{{ asset('css/web_style.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{ asset('js/navbar.js') }}" defer></script>
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
            <li><a href="{{ route('home_kr') }}" class="list_btn">
                <i class='bx bx-home-alt'></i>
                <span class="links_name">홈</span>
            </a>
            </li>
            <li><a href="{{ route('web_kr') }}" class="list_btn">
                <i class='bx bx-code-alt'></i>
                <span class="links_name">Web</span>
            </a>
            </li>
            <li>
                <a href="{{ route('java_kr') }}" class="list_btn">
                    <i class='bx bx-code-curly' ></i>
                    <span class="links_name">Java</span>
                </a>
            </li>
        </ui>
        <ul class="navbar_icons">
            <li><a href="#" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a></li>
            <li><a href="{{ route('iOS_en') }}" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a></li>
            <li><a href="{{ route('iOS_jp') }}" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a></li>
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
                <a href="{{ route('home_kr') }}" class="list_btn">
                    <i class='bx bx-home-alt'></i>
                    <span class="links_name">홈</span>
                </a>
                    <span class="tooltip">홈</span>
            </li>
            <li>
                <a href="{{ route('web_kr') }}" class="list_btn">
                    <i class='bx bx-code-alt' ></i>
                    <span class="links_name">Web</span>
                </a>
                    <span class="tooltip">Web</span>
            </li>
            <li>
                <a href="{{ route('java_kr') }}" class="list_btn">
                    <i class='bx bx-code-curly' ></i>
                    <span class="links_name">Java</span>
                </a>
                    <span class="tooltip">Java</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                    <a href="#" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a>
                    <a href="{{ route('iOS_en') }}" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a>
                    <a href="{{ route('iOS_jp') }}" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a>
                </div>
                <i class='bx bx-font' id="log_out" ></i>
            </li>
        </ul>
    </div>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/iOS/pj3.PNG') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">메모어플</h1>
            <p class="blog-post_text">처음으로 앱스토어에 릴리즈한 메모 어플</p>
            <p class="blog-post_text">주요기술：core data, local notification</p>
            <p class="blog-post_text">언어 : swift</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/iOS/receipt.jpeg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">포인트 교환 어플</h1>
            <p class="blog-post_text">쇼핑 후에 받은 영수증사진을 전송하면 포인트로 교환해주는 어플 리뉴얼</p>
            <p class="blog-post_text">주요기술：Firebase, Local Notification</p>
            <p class="blog-post_text">언어 : swift</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/iOS/baby.jpeg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">아기성장 마이나비</h1>
            <p class="blog-post_text">아기의 성장기록, 성장에 도움되는 정보, 뉴스 등을 확인 할 수 있는 어플</p>
            <p class="blog-post_text">주요기술：chart, Local Notification, Alamofire, MVVM</p>
            <p class="blog-post_text">언어 : swift</p>
        </div>
    </div>
</section>
<script src="{{ asset('js/web_script.js') }}"></script>
</body>
</html>