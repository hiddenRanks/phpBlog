@extends('layout/master')

@section('scriptsection')
    <script src="/js/editor.js"></script>
@endsection

@section('maincontent')
<section id="writeBox">
    <div class="container">
        <div class="moveWrite">
            <form action="/post" method="post">
                <div class="inputTitle">
                    <input type="text" name="title" class="title" placeholder="제목 입력" autocomplete="off">
                </div>
                <div class="inputContent">
                    <textarea name="content" id="content" cols="30" rows="10"></textarea>
                </div>

                <div class="submitPost">
                    <input type="submit" value="글 올리기" class="submitWrite">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection