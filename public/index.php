<?php
use Gondr\Route;

//dirname => 현재 파일의 부모를 불러온다.
define("__ROOT", dirname(__DIR__));
define("__VIEW", __ROOT . "/App/views");
define("__CACHE", __ROOT . "/App/caches");

require __ROOT . "/vendor/autoload.php";
require __ROOT . "/web.php";

$url = isset($_GET['url']) ? "/" . $_GET['url'] : "/";

Route::route($url);
