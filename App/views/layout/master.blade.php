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
    <section id="main">
        <div class="logo">
            <img src="images/CC4nHv6.jpg">
        </div>

        <div class="container">
            <header>
                <div class="textLogo">
                    <span class="blogName">블로그 이름 부분!</span>
                </div>
            </header>
        </div>
    </section>

    @yield('maincontent')

    <footer>
        
    </footer>
</body>

</html>