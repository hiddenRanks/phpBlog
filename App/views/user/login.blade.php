@extends('layout/master')

@section('maincontent')
<section id="login" class="mt-4">
    <h1>블로그 로그인</h1>
    <div class="loginBox">
        <form action="/login" method="post">
            <input type="text" name="id" class="id" placeholder="아이디">
            <input type="password" name="password" class="password" placeholder="비밀번호">
            <input type="submit" class="submit" value="로그인">
        </form>
    </div>
</section>
@endsection