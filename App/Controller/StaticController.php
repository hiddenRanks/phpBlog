<?php

namespace Gondr\Controller;

use Gondr\DB;
use Gondr\Pager;

class StaticController extends MasterController
{
    public function index()
    {
        $page = isset($_GET['p']) ? $_GET['p'] : 1;

        //숫자인지 확인
        if(!is_numeric($page)) {
            $page = 1;
        }

        $sql = "SELECT * FROM boards ORDER BY id DESC LIMIT " . ($page - 1) * 6 . ", 6";
        $list = DB::fetchAll($sql);
        $imgPattern = '/<img src=".+">/'; //정규식을 씀으로써 게시판 글쓰기의 해킹을 방지

        //최신글 이미지 거르기
        foreach($list as $item) {
            //내용 중에서 정규식의 값과 비슷한 것을 골라서 $matches에 저장
            $match = preg_match($imgPattern, $item->content, $matches);
            if($match > 0) {
                //$item에 thumbnail을 생성해서 $matches[0]번째 값을 넣는다.
                $item->thumbnail = $matches[0];
            } else {
                //비슷한게 없다면 이미지 하나를 준비해서 넣는다.
                $item->thumbnail = "<img src='/images/no-image.png' class='noImage'>";
            }
        }

        $pager = new Pager();
        $pager->calc($page);

        $sql = "SELECT * FROM boards ORDER BY hit DESC LIMIT 0, 5";
        $top = DB::fetchAll($sql);

        //인기순 이미지 거르기
        foreach($top as $items) {
            $match = preg_match($imgPattern, $items->content, $matches);
            if($match > 0) {
                $items->thumbnail = $matches[0];
            } else {
                $items->thumbnail = "<img src='/images/no-image.png'>";
            }
        }

        $this->render("main", ['list' => $list, 'pager'=>$pager, 'top'=>$top]);
    }

    public function errorPage($msg)
    {
        $this->render("error", ['msg'=>$msg]);
    }
}
