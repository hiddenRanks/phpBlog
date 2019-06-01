<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/app.js"></script>
    <title>My PHP Blog</title>
</head>

<body>
    <section id="main">
        <div class="container">
            <header>
                <div class="logo">
                    <h1>My Game Blog</h1>
                </div>

                <div class="icon-bar">
                    <span>아이콘</span>
                    <span>아이콘</span>
                </div>
            </header>
        </div>
    </section>

    @yield('maincontent')

    <footer>
        <div class="container">
            이곳은 푸터 입니다.
        </div>
    </footer>
</body>

</html>