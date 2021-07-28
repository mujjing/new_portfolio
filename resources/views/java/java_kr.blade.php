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
            <li><a href="{{ route('home_kr') }}" class="list_btn">
                <i class='bx bx-home-alt'></i>
                <span class="links_name">홈</span>
            </a>
            </li>
            <li><a href="{{ route('iOS_kr') }}" class="list_btn" onclick="return check()">
                <i class='bx bxl-apple' ></i>
                <span class="links_name">iOS</span>
            </a>
            </li>
            <li>
                <a href="{{ route('web_kr') }}" class="list_btn">
                    <i class='bx bx-code-alt' ></i>
                    <span class="links_name">Web</span>
                </a>
            </li>
        </ui>
        <ul class="navbar_icons">
            <li><a href="#" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a></li>
            <li><a href="{{ route('java_en') }}" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a></li>
            <li><a href="{{ route('java_kr') }}" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a></li>
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
                <a href="{{ route('home_kr') }}" class="list_btn">
                    <i class='bx bx-home-alt'></i>
                    <span class="links_name">홈</span>
                </a>
                    <span class="tooltip">홈</span>
            </li>
            <li>
                <a href="{{ route('iOS_kr') }}" class="list_btn" onclick="return check()">
                    <i class='bx bxl-apple' ></i>
                    <span class="links_name">iOS</span>
                </a>
                    <span class="tooltip">iOS</span>
            </li>
            <li>
                <a href="{{ route('web_kr') }}" class="list_btn">
                    <i class='bx bx-code-alt' ></i>
                    <span class="links_name">Web</span>
                </a>
                    <span class="tooltip">Web</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                    <a href="#" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a>
                    <a href="{{ route('java_en') }}" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a>
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
            <h1 class="blog-post_title">외국인 탈퇴 일시금 시스템</h1>
            <p class="blog-post_text">외국인 탈퇴 일시금을 신청, 관리 하는 시스템 개발 참여</p>
            <p class="blog-post_text">기본설계、 상세설계、 코딩, 테스트</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/java/pj2.png') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">동,서일본 번호 이동 시스템 통일화</h1>
            <p class="blog-post_text">동일본, 서일본의 번호 이동 기능을 통일화 시키는 프로젝트에 참여</p>
            <p class="blog-post_text">상세설계, 코딩, 테스트</p>
        </div>
    </div>
</section>
<script src="{{ asset('js/web_script.js') }}"></script>
<script type='text/javascript'>
    function check() {
        alert('이 페이지는 준비중입니다');
        return false;
    }
    </script>
</body>
</html>