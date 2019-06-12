@extends('layout/master')

@section('maincontent')
<section id="getPosting">
    <div class="container">
        <article>
            <div class="postingTitle">
                <h2>{{$data->title}}</h2>
                <div class="addInfo">
                    <span class="postingDate">
                        {{ date( "Y.m.d", strtotime($data->wdate) ) }}
                    </span>
                    <span class="postingWriter">
                        <span>by</span> {{$data->writer}}
                    </span>
                </div>
            </div>

            <div class="postingCon">
                <!-- !!을 쓰면 html태그는 text출력중에 거름 -->
                {!! $data->content !!}
            </div>
        </article>

        @if(isset($_SESSION['user']) && $_SESSION['user']->id == $data->writer)
        <div class="getBoardButton">
            <div class="conMod">
                <a href="/updateBoard?id={{$data->id}}">수정</a>
            </div>
            <div class="conDel">
                <a href="/deleteBoard?id={{$data->id}}">삭제</a>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection