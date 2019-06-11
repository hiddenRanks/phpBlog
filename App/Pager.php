<?php

namespace Gondr;

class Pager {
    public $start;
    public $end;
    public $totalCnt;
    public $totalPage;
    public $prev = true;
    public $next = true;

    public $itemPerPage = 6; //페이지당 글의 갯수
    public $pagePerChapter = 5; //챕터당 페이지 수
    public $current = 1;

    public function calc($page) {
        $this->current = $page;

        $sql = "SELECT count(*) AS cnt FROM boards";
        $this->totalCnt = DB::fetch($sql)->cnt;
        
        //ex) 11개의 게싯글 / 페이지당 글의 갯수(2개)
        //ex) 6개는 한 페이지에 넣어지지만 나머지 5개는 한 페이지에 들어가지 못한다. => 1.8...이 나오는데 반올림해서 2로 만들어 버림
        $this->totalPage = ceil($this->totalCnt / $this->itemPerPage); //ceil => 올림 함수 / 전체 페이지 수
        
        //$this->end => 5단위로 넘어갈때마다 1씩 증가한다.
        $this->end = ceil($this->current / $this->pagePerChapter) * $this->pagePerChapter;
        $this->start = $this->end - $this->pagePerChapter + 1;

        //6 이상이 아니라면 무조건 false가 된다.
        if($this->end >= $this->totalPage) {
            $this->end = $this->totalPage;
            $this->next = false;
        }

        if($this->start == 1) {
            $this->prev = false;
        }
    }
}