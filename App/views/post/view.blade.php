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
    </div>
</section>
@endsection