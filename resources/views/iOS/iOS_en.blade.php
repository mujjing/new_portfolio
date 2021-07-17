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
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-apple icon'></i>
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
                <a href="{{ route('web_en') }}" class="list_btn">
                    <i class='bx bx-code-alt' ></i>
                    <span class="links_name">Web</span>
                </a>
                    <span class="tooltip">Web</span>
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
                    <a href="{{ route('iOS_kr') }}" class="lanuage_btn"><img src="{{asset('images/flag/korea.png')}}" alt="korea"></a>
                    <a href="#" class="lanuage_btn"><img src="{{asset('images/flag/english.png')}}" alt="english"></a>
                    <a href="{{ route('iOS_jp') }}" class="lanuage_btn"><img src="{{asset('images/flag/japan.png')}}" alt="japan"></a>
                </div>
                <i class='bx bx-font' id="log_out" ></i>
            </li>
        </ul>
    </div>
<section class="home-section">
    <div class="text">iOS_en</div>
</section>
<script src="{{ asset('js/web_script.js') }}"></script>
</body>
</html>