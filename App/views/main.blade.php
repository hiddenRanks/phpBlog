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
                좋아하는 웹툰, 만화, 게임위주로 올립니다.
            </span>
        </div>

        <div class="topFive">
            <span>인기글</span>
            <ul class="topBind">
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG">
                                <img src="images/BasilMarket-Wiki-Knight-Run-3.jpg">
                            </div>
                            <div class="topTitle">
                                <span>ep1 프레이편, 프레이 vs 앤</span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG">
                                <img src="images/Anne_Pray_Cross_Eyes_Horizontal.png" alt="">
                            </div>
                            <div class="topTitle">
                                <span>개인적으로 전투씬중 제일 좋아하는 장면</span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG">
                                <img src="images/1488267506513.jpg">
                            </div>
                            <div class="topTitle">
                                <span>덴마: 이델편 하이라이트</span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG">
                                <img src="images/whatthemause.jpg">
                            </div>
                            <div class="topTitle">
                                <span>백년 전쟁과 흑사병 속, 남매의 생존 이야기를 담은 게임, 플레그 테일:이노센트</span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="topPost">
                    <div class="cardList">
                        <a href="#">
                            <div class="topIMG">
                                <img src="images/A_Plague_Tale_INNOCENT.jpg">
                            </div>
                            <div class="topTitle">
                                <span>플레그 테일:이노센트 한글화 확정!</span>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="latelyPost">
            <span>최신글</span>
            <div class="girdPost">
                <ul>
                    <li>
                        <div class="postDate">
                            <span>2019.06.07</span>
                        </div>
                        <div class="latelyTitle">
                            <a href="#">
                                <span>ep1 프레이편, 프레이 vs 앤</span>
                            </a>
                        </div>
                        <div class="latelyIMG">
                            <a href="#">
                                <img src="images/BasilMarket-Wiki-Knight-Run-3.jpg">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="postDate">
                            <span>2019.06.07</span>
                        </div>
                        <div class="latelyTitle">
                            <a href="#">
                                <span>덴마: 이델편 하이라이트</span>
                            </a>
                        </div>
                        <div class="latelyIMG">
                            <a href="#">
                                <img src="images/1488267506513.jpg">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="postDate">
                            <span>2019.06.07</span>
                        </div>
                        <div class="latelyTitle">
                            <a href="#">
                                <span>플레그 테일:이노센트 한글화 확정!</span>
                            </a>
                        </div>
                        <div class="latelyIMG">
                            <a href="#">
                                <img src="images/A_Plague_Tale_INNOCENT.jpg">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="postDate">
                            <span>2019.06.07</span>
                        </div>
                        <div class="latelyTitle">
                            <a href="#">
                                <span>어마금 신약 12권 정리</span>
                            </a>
                        </div>
                        <div class="latelyIMG">
                            <a href="#">
                                <img src="images/Preview.x.png">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="postDate">
                            <span>2019.06.07</span>
                        </div>
                        <div class="latelyTitle">
                            <a href="#">
                                <span>개인적으로 전투씬중 제일 좋아하는 장면</span>
                            </a>
                        </div>
                        <div class="latelyIMG">
                            <a href="#">
                                <img src="images/Anne_Pray_Cross_Eyes_Horizontal.png">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="listPage">
                <ul>
                    <li>
                        <a href="#">
                            <!-- 바로 넘어가기는 (DB에서 가져온 전체 길이 / 줄당 존재하는 페이지 갯수)의 정보를 가져와야 한다. -->
                            <i class="fa fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection