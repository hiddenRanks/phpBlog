@extends('layout/master')

@section('scriptsection')
    <script src="/js/editor.js"></script>
@endsection

@section('maincontent')
<section id="writeBox">
    <div class="containers">
        <div class="moveWrite">
            <form action="/update" method="post">
                <input type="text" name="id" value="{{$info->id}}" style="display: none;">
                <div class="inputTitle">
                    <input type="text" name="title" class="title" placeholder="제목 입력" autocomplete="off" value="{{$info->title}}">
                </div>
                <div class="inputContent">
                    <textarea name="content" id="content" cols="30" rows="10" style="opacity: 0;" >{{$info->content}}</textarea>
                </div>

                <div class="submitPost">
                    <input type="submit" value="글 올리기" class="submitWrite">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection