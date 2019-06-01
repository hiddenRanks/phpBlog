@extends('layout/master')

@section('maincontent')
<!-- 슬라이더 섹션 -->
<section id="slider">
    <div class="container">
        <div class="slider">
            <div class="slide-image active" style="background-image: url('/images/schoolLife.jpg')">
                <!-- <div class="filter"></div> -->
                <h1>슬라이드 제목</h1>
                <p>슬라이드의 내용을 여기다가 표시</p>
            </div>
            <div class="slide-image" style="background-image: url('/images/robot.jpg')">
                <!-- <div class="filter"></div> -->
                <h1>슬라이드 제목</h1>
                <p>슬라이드의 내용을 여기다가 표시</p>
            </div>
            <div class="slide-image" style="background-image: url('/images/bank.png')">
                <!-- <div class="filter"></div> -->
                <h1>슬라이드 제목</h1>
                <p>슬라이드의 내용을 여기다가 표시</p>
            </div>
        </div>

        <div class="indecator">
            <ul>
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</section>

<!-- 에디터 픽 섹션 -->
<div class="container">
    <section id="editorPick">
        에디터 픽 섹션 입니다.
    </section>
</div>
@endsection