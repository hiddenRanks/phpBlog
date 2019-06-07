<?php

use Gondr\Route;

Route::get("/", "StaticController@index"); //정적 페이지 관리
Route::get("/postSearch", "PostController@writeSearch");

if(!isset($_SESSION['user'])) {
    Route::get("/login", "UserController@loginPage");
    Route::post("/login", "UserController@loginProcess");
} else {
    Route::get("/logout", "UserController@logout");
    Route::get("/post", "PostController@writePage");
    Route::post("/post", "Postcontroller@writeProcess");
}
