<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if(isset($_SESSION['flash_msg']))
    <script>
        let msg = "{{$_SESSION['flash_msg']['msg']}}";
    </script>

    @php
    unset($_SESSION['flash_msg']);
    @endphp
    @endif
    @yield('scriptsection')
    <script src="/js/app.js"></script>
    <title>My PHP Blog</title>
</head>

<body>
    <section id="head">
        <div class="logo">
            <img src="images/CC4nHv6.jpg">
        </div>

        <div class="containers">
            @if(!isset($_SESSION['user']))
            <div class="notLogin">
                <a href="/login">Login</a>
            </div>
            @else
            <div class="loging">
                <div class="posting">
                    <a href="/post">포스팅</a>
                </div>

                <div class="logout">
                    <a href="/logout">로그아웃</a>
                </div>
            </div>
            @endif

            <div class="homeIcon">
                <span>
                    <a href="/">HOME</a>
                </span>
                <span class="search">
                    <a href="/searchAll">
                        <i class="fas fa-search"></i>
                    </a>
                </span>
            </div>

            <header>
                <div class="looksBlog">
                    <span class="todayLook">Today: 13명</span> /
                    <span class="totalLook">Total: 100,000명</span>
                </div>

                <div class="textLogo">
                    <span class="blogName">만화와 게임!</span>
                    <div class="profile">
                        <div class="imgProfile">
                            <img src="images/nightRunProfile.jpg">
                        </div>
                        <span class="nickName">프레이</span>
                    </div>
                </div>
            </header>
        </div>
    </section>

    @yield('maincontent')

    <section id="foot">
        <footer>
            <div class="topMenu">
                <a href="/">
                    <span>블로그 홈</span>
                </a>
            </div>

            <div class="bottomMenu">
                <span>
                    COPYRIGHT <a href="#" class="users">mongjja</a>, ALL RIGHT RESERVED.
                </span>
                <span>
                    참고한 곳: <a href="#">naver blog</a>, <a href="https://www.tistory.com/" target="_blank">tistory</a>
                </span>
            </div>
        </footer>
    </section>

    <div id="toastList"></div>
</body>

</html>