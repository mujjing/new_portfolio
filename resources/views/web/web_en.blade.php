<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
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
                <span class="links_name">home</span>
            </a>
            </li>
            <li><a href="{{ route('iOS_en') }}" class="list_btn">
                <i class='bx bxl-apple' ></i>
                <span class="links_name">iOS</span>
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
            <li><a href="{{ route('web_kr') }}" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a></li>
            <li><a href="#" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a></li>
            <li><a href="{{ route('web_jp') }}" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a></li>
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
                <a href="{{ route('iOS_en') }}" class="list_btn">
                    <i class='bx bxl-apple' ></i>
                    <span class="links_name">iOS</span>
                </a>
                    <span class="tooltip">iOS</span>
            </li>
            <li>
                <a href="{{ route('java_en') }}" class="list_btn">
                    <i class='bx bx-code-curly' ></i>
                    <span class="links_name">Java</span>
                </a>
                    <span class="tooltip">Java</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                    <a href="{{ route('web_kr') }}" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a>
                    <a href="#" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a>
                    <a href="{{ route('web_jp') }}" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a>
                </div>
                <i class='bx bx-font' id="log_out" ></i>
            </li>
        </ul>
    </div>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/web/oldportfolio.png') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">Portfolio Site<br>（old version）</h1>
            <p class="blog-post_text">My portfolio site I used before</p>
            <p class="blog-post_text">language：html, css, js</p>
            <a href="https://mujjing.github.io/portfolio/" class="blog-post_cta" target="_blank">go site</a>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/web/map.png') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">InfoMap</h1>
            <p class="blog-post_text">Site for map-based information stored in DB</p>
            <p class="blog-post_text">Excel upload function, site where you can search, update, and delete information uploaded by Excel</p>
            <p class="blog-post_text">language：laravel(php), html, js, css, mysql</p>
            <a href="https://infomap.ga" class="blog-post_cta" target="_blank">go site</a>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/web/sumitomo.png') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">Roomtomo</h1>
            <p class="blog-post_text">a room-searching website（*updating）</p>
            <p class="blog-post_text">language：laravel(php), html, js, css, mysql</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/web/347.jpg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">photo contest campaign</h1>
            <p class="blog-post_text">Photo contest campaign to apply on instagram and web<br>（Current campaign is over）</p>
            <p class="blog-post_text">language：laravel(php), html, js, css, mysql</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/web/347.jpg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">quiz campaign</h1>
            <p class="blog-post_text">a campaign to solve and apply for different quizzes every week</p>
            <p class="blog-post_text">language：laravel(php), html, js, css, mysql</p>
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