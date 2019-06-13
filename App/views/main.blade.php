@extends('layout/master')

@section('maincontent')
<section id="contents">
    <div class="containers">
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
                @foreach($top as $items)
                <li class="topPost">
                    <div class="cardList">
                        <a href="/view?id={{$items->id}}">
                            <div class="topIMG">
                                {!! $items->thumbnail !!}
                            </div>
                            <div class="topTitle">
                                <span>{{$items->title}}</span>
                            </div>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="latelyPost">
            <span>최신글</span>
            <div class="girdPost">
                <ul>
                    @foreach($list as $item)
                    <li>
                        <div class="postDate">
                            <span>
                                {{ date( "Y.m.d", strtotime($item->wdate) ) }}
                            </span>
                        </div>
                        <div class="latelyTitle">
                            <a href="/view?id={{$item->id}}">
                                <span>{{$item->title}}</span>
                            </a>
                        </div>
                        <div class="latelyIMG">
                            <a href="/view?id={{$item->id}}">
                                {!! $item->thumbnail !!}
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="listPage">
                <ul>
                    <li>
                        <a href="/?p=1">
                            <!-- 바로 넘어가기는 (DB에서 가져온 전체 길이 / 줄당 존재하는 페이지 갯수)의 정보를 가져와야 한다. -->
                            <i class="fa fa-angle-double-left"></i>
                        </a>
                    </li>
                    @if($pager->prev)
                    <li>
                        <a href="/?p={{$pager->start - 1}}">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                    @endif

                    @for($i = $pager->start; $i <= $pager->end; $i++)
                        @if($i == $pager->current)
                        <li style="background-color: #888;">
                            <a href="/?p={{$i}}" style="color: #fff;">{{$i}}</a>
                        </li>
                        @else
                        <li>
                            <a href="/?p={{$i}}">{{$i}}</a>
                        </li>
                        @endif
                    @endfor

                    @if($pager->next)
                        <li>
                            <a href="/?pager={{$pager->end + 1}}">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="/?p={{$pager->totalPage}}">
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection