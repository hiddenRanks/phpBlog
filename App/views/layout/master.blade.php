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
    <aside id="submenu">
        <h2 class="my-3 text-center">Submenu</h2>
        @if(isset($_SESSION['user']))
            <a href="/logout" class="btn btn-block btn-outline-primary mt-2">로그아웃</a>
            <a href="/post" class="btn btn-block btn-outline-primary">포스팅</a>
        @else
            <a href="/login" class="btn btn-block btn-outline-primary mt-2">로그인</a>
        @endif
    </aside>

    <div id="toastList"></div>

    <section id="main">
        <div class="container">
            <header class="d-flex">
                <div class="logo">
                    <h1>My Game Blog</h1>
                </div>

                <div class="icon-bar">
                    <span><i class="fas fa-search"></i></span>
                    <span id="btnSubmenu"><i class="fas fa-bars"></i></span>
                </div>
            </header>
        </div>
    </section>

    @yield('maincontent')

    <footer>
        <div class="container">
            <div class="font">
                <p class="Rightline">DESIGN BY mong</p> <br>
                <p>Copyright mong, 2019 Allright reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>