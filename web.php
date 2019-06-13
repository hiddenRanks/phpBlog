<?php

use Gondr\Route;

Route::get("/", "StaticController@index"); //정적 페이지 관리
Route::get("/postSearch", "PostController@writeSearch");
Route::get("/view", "PostController@viewPage");
Route::post("/search", "UserController@searchAll");
Route::get("/searchAll", "UserController@searchPage");

if(!isset($_SESSION['user'])) {
    Route::get("/login", "UserController@loginPage");
    Route::post("/login", "UserController@loginProcess");
} else {
    Route::get("/logout", "UserController@logout");
    Route::get("/post", "PostController@writePage");
    Route::post("/post", "PostController@writeProcess");
    Route::post("/upload", "PostController@uploadHandle"); //첨부파일 업로드
    Route::get("/updateBoard", "PostController@getUpdate");
    Route::get("/deleteBoard", "PostController@deleteProcess");
    Route::post("/update", "PostController@updateProcess");
}
