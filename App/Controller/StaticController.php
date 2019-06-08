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

        $sql = "SELECT * FROM boards LIMIT " . ($page - 1) * 6 . ", 6";
        $list = DB::fetchAll($sql);
        $imgPattern = '/<img src=".+">/';

        foreach($list as $item) {
            $match = preg_match($imgPattern, $item->content, $matches);
            if($match > 0) {
                $item->thumbnail = $matches[0];
            } else {
                $item->thumbnail = "<img src='/images/no-image.jpg'>";
            }
        }

        $pager = new Pager();
        $pager->calc($page);

        $this->render("main", ['list' => $list, 'pager'=>$pager]);
    }

    public function errorPage($msg)
    {
        $this->render("error", ['msg'=>$msg]);
    }
}
