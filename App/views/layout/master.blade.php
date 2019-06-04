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
    <script src="/js/app.js"></script>
    <title>My PHP Blog</title>
</head>

<body>
    <section id="head">
        <div class="logo">
            <img src="images/CC4nHv6.jpg">
        </div>

        <div class="container">
            <header>
                <div class="looksBlog">
                    <span class="todayLook">Today: 13명</span> /
                    <span class="totalLook">Total: 100,000명</span>
                </div>

                <div class="textLogo">
                    <span class="blogName">블로그 이름 부분!</span>
                    <div class="profile">
                        <div class="imgProfile"></div>
                        <span class="nickName">닉네임</span>
                    </div>
                </div>

                @if(isset($_SESSION['user']))
                <div class="notLogin">
                    <a href="#">Login</a>
                </div>
                @else
                <div class="loging">
                    <div class="posting">
                        <a href="#">포스팅</a>
                    </div>

                    <div class="logout">
                        <a href="#">로그아웃</a>
                    </div>
                </div>
                @endif
            </header>
        </div>
    </section>

    @yield('maincontent')

    <section id="foot">
        <div class="container">
            <footer>
                <span class="maker">DESIGN BY mong</span>
                <span class="reference">참고한 곳: naver blog</span>
            </footer>
        </div>
    </section>
</body>

</html>