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
                <a href="{{ route('java_kr') }}" class="list_btn">
                    <i class='bx bx-code-curly' ></i>
                    <span class="links_name">Java</span>
                </a>
            </li>
        </ui>
        <ul class="navbar_icons">
            <li><a href="#" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a></li>
            <li><a href="{{ route('web_en') }}" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a></li>
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
                    <a href="{{ route('web_en') }}" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a>
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
            <h1 class="blog-post_title">포트폴리오 사이트（구 버전）</h1>
            <p class="blog-post_text">이전에 사용했던 포트폴리오 사이트</p>
            <p class="blog-post_text">사용언어：html, css, js</p>
            <a href="https://mujjing.github.io/portfolio/" class="blog-post_cta" target="_blank">사이트 보기</a>
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
            <p class="blog-post_text">DB에 저장되어 있는 정보를 지도표시, 확인 하는 사이트</p>
            <p class="blog-post_text">excel업로드기능, 업로드한 excel 내용을 검색, 수정, 삭제 할 수 있는 사이트</p>
            <p class="blog-post_text">언어：laravel(php), html, js, css, mysql</p>
            <a href="https://infomap.ga" class="blog-post_cta" target="_blank">サイトを見る</a>
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
            <p class="blog-post_text">방 찾기 사이트（*수정중）</p>
            <p class="blog-post_text">[인재개발원에서 팀프로젝트로 만들었던 JSP사이트를 라라벨로 리뉴얼]</p>
            <p class="blog-post_text">사용언어：laravel(php), html, js, css, mysql</p>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/web/347.jpg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">사진응모 캠페인</h1>
            <p class="blog-post_text">instagram과web으로 응모하는 사진 응모 캠페인<br>（현재 캠페인 종료）</p>
            <p class="blog-post_text">사용언어：laravel(php), html, js, css, mysql</p>
            <a href="https://credelio.campaignsplatform.jp/" class="blog-post_cta" target="_blank">사이트 보기</a>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="blog-post">
        <div class="blog-post_img">
            <img src="{{ asset('images/web/347.jpg') }}" alt="">
        </div>
        <div class="blog-post_info">
            <h1 class="blog-post_title">퀴즈 캠페인</h1>
            <p class="blog-post_text">매주 내용이 다른 퀴즈를 해결해서 응모하는 캠페인</p>
            <p class="blog-post_text">사용언어：laravel(php), html, js, css, mysql</p>
            <a href="https://www.netsuzero.jp/quiz2021CP/" class="blog-post_cta" target="_blank">사이트 보기</a>
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