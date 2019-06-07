<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Login</title>
    <script src="/js/app.js"></script>
</head>

<body>
    <div class="loginIMG">
        <img src="images/i13428719182.jpg">
    </div>
    <div class="loginBox">
        <h2>Welcome!</h2>
        <form action="/login" method="post">
            <div class="inputInfo">
                <input type="text" name="id" class="id" placeholder="아이디" autocomplete="off">
                <input type="password" name="password" class="password" placeholder="비밀번호" autocomplete="off">
            </div>
            <div class="submitBox">
                <input type="submit" class="loginSubmit" value="로그인">
            </div>
        </form>
    </div>
</body>

</html>