<?php

namespace Gondr\Controller;

use Gondr\DB;

class PostController extends MasterController {
    public function writePage() {
        $this->render("post/write");
    }

    public function writeSearch() {
        $this->render("post/search");
    }

    public function writeProcess() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $writer = $_SESSION['user']->id;

        $sql = "INSERT INTO boards(`title`, `content`, `writer`, `wdate`) VALUES(?, ?, ?, NOW())";

        $cnt = DB::query($sql, [$title, $content, $writer]);
        if($cnt != 1) {
            $_SESSION['flash_msg'] = ['msg' => "글 작성중 오류 발생"];
            header("Location: /post");
        } else {
            $_SESSION['flash_msg'] = ['msg' => "글 작성"];
            header("Location: /");
        }
    }

    public function getUpdate() {
        $id = $_GET['id'];

        $sql = "SELECT * FROM boards WHERE id=?";
        $info = DB::fetch($sql, [$id]);

        $this->render("post/updateWrite", ['info' => $info]);
    }

    public function updateProcess() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "UPDATE boards SET title=?, content=? WHERE id=?";
        $cnt = DB::query($sql, [$title, $content, $id]);

        if($cnt != 1) {
            header("Location: /updateBoard?id=" . $id);
        } else {
            header("Location: /");
        }
    }

    public function deleteProcess() {
        $id = $_GET['id'];

        $sql = "DELETE FROM boards WHERE id=?";
        $cnt = DB::query($sql, [$id]);

        if($cnt != 1) {
            echo "이상한 오류";
        } else {
            header("Location: /");
        }
    }

    public function uploadHandle() {
        //FormData에서 추가한 upload라는 키에 이미지 경로가 들어있기 때문
        if(!isset($_FILES['upload']) || $_FILES['upload']['name'] == "") {
            $this->json(['error'=>['msg'=>'이미지가 없습니다.']], 400);
            exit;
        }

        //여기까지 코드가 왓다면 업로드 파일 존재
        $file = $_FILES['upload'];

        $uploadDir = "uploads/" . date("Ymd", time());
        
        //폴더가 존재하지 않다면
        if(!\file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $filename = date("ymdHis") . "_" . $file['name'];
        $fileDest = $uploadDir . "/" . $filename;
        move_uploaded_file($file['tmp_name'], $fileDest);

        $this->json(['url' => '/' . $fileDest]);
    }

    public function viewPage() {
        if(!isset($_GET['id'])) {
            $_SESSION['flash_msg'] = ['msg' => '존재하지 않는 글'];
            header("Location: /");
            exit;
        }
        $id = $_GET['id'];

        DB::query("UPDATE boards SET hit=hit+1 WHERE id=?", [$id]);
        $data = DB::fetch("SELECT * FROM boards WHERE id = ?", [$id]);
        
        if(!$data) {
            $_SESSION['flash_msg'] = ['msg' => '존재하지 않는 글'];
            header("Location: /");
            exit;
        }

        $this->render("post/view", ['data' => $data]);
    }
}