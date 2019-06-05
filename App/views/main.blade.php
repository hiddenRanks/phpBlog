@extends('layout/master')

@section('maincontent')
<section id="contents">
    <div class="container">
        <div class="blogNotice">
            <span>쓸 공지가 없습니다, 끼요오오오옷!!</span>
        </div>

        <div class="introBlog">
            <span>소개말</span>
            <span class="intro">
                좋아하는 웹툰, 만화, 애니위주로 올립니다.
            </span>
        </div>

        <div class="topFive">
            <span>인기글</span>
            <ul class="topBind">
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG">
                                <img src="images/tree.jpg">
                            </div>
                            <div class="topTitle">
                                <span>끼ㅛ오오오오ㅗ오오오오ㅗ오오ㅗㅗ오ㅗㅅ오오오오옷오오옷aaa</span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG">
                                <img src="images/good.jpg" alt="">
                            </div>
                            <div class="topTitle">
                                <span>토우마아아ㅏ</span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG"></div>
                            <div class="topTitle"></div>
                        </a>
                    </div>
                </li>
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG"></div>
                            <div class="topTitle"></div>
                        </a>
                    </div>
                </li>
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG"></div>
                            <div class="topTitle"></div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="latelyPost"></div>
    </div>
</section>
@endsection