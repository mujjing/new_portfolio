<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAVA</title>
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
            <li><a href="{{ route('home_en') }}" class="list_btn">
                <i class='bx bx-home-alt'></i>
                <span class="links_name">ホーム</span>
            </a>
            </li>
            <li><a href="{{ route('iOS_en') }}" class="list_btn" onclick="return check()">
                <i class='bx bxl-apple' ></i>
                <span class="links_name">iOS</span>
            </a>
            </li>
            <li>
                <a href="{{ route('web_en') }}" class="list_btn">
                    <i class='bx bx-code-alt'></i>
                    <span class="links_name">Web</span>
                </a>
            </li>
        </ui>
        <ul class="navbar_icons">
            <li><a href="{{ route('java_kr') }}" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a></li>
            <li><a href="#" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a></li>
            <li><a href="{{ route('java_jp') }}" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a></li>
        </ul>
    </nav>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-code-alt icon'></i>
                <div class="logo_name">Jh's Portfolio</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('home_en') }}" class="list_btn">
                    <i class='bx bx-home-alt'></i>
                    <span class="links_name">home</span>
                </a>
                    <span class="tooltip">home</span>
            </li>
            <li>
                <a href="{{ route('iOS_en') }}" class="list_btn" onclick="return check()">
                    <i class='bx bxl-apple' ></i>
                    <span class="links_name">iOS</span>
                </a>
                    <span class="tooltip">iOS</span>
            </li>
            <li>
                <a href="{{ route('web_en') }}" class="list_btn">
                    <i class='bx bx-code-alt' ></i>
                    <span class="links_name">Web</span>
                </a>
                    <span class="tooltip">Web</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                    <a href="{{ route('java_kr') }}" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a>
                    <a href="#" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a>
                    <a href="{{ route('java_jp') }}" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a>
                </div>
                <i class='bx bx-font' id="log_out" ></i>
            </li>
        </ul>
    </div>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/java/pj1.jpeg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">Foreigners' temporary retirement allowance management system</h1>
            <p class="blog-post_text">Participation in the development of a management system related to the application for a lump sum withdrawal of foreigners</p>
            <p class="blog-post_text">Basic design, detailed design、coding,test</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/java/pj2.png') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">co-utilization of East and West of phone number portability system</h1>
            <p class="blog-post_text">Participate in merging number portability functions in East and West Japan</p>
            <p class="blog-post_text">detailed design、 coding, test</p>
        </div>
    </div>
</section>
<script src="{{ asset('js/web_script.js') }}"></script>
<script type='text/javascript'>
    function check() {
        alert('This page is still in preparation');
        return false;
    }
    </script>
</body>
</html>