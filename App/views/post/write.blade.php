@extends('layout/master')

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

            <div class="textCheck">
                <span class="byteCheck">0</span>byte/<span>2000byte</span>
            </div>
        </div>
    </div>
</section>
@endsection