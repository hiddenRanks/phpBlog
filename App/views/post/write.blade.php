@extends('layout/master')

@section('maincontent')
    <div class="writeBox">
        <form action="/post" method="post">
            <input type="text" name="title" class="title" placeholder="제목 입력">
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            <input type="submit" value="글 올리기" class="submitWrite">
        </form>
    </div>
@endsection