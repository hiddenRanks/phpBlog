<?php

namespace Gondr\Controller;

use Gondr\DB;
use Gondr\Pager;

class UserController extends MasterController
{
    public function loginPage()
    {
        $this->render("user/login");
    }

    public function loginProcess()
    {
        $id = $_POST['id'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE id = ? AND password = PASSWORD(?)";
        $user = DB::fetch($sql, [$id, $password]);

        if ($user == null) {
            $_SESSION['flash_msg'] = ['msg' => '로그인 실패, 아이디와 비밀번호 확인'];

            header("Location: /login"); //Redirect
        } else {
            $_SESSION['flash_msg'] = ['msg' => '로그인 성공'];
            $_SESSION['user'] = $user;

            header("Location: /");
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        $_SESSION['flash_msg'] = ['msg' => "로그아웃 되었습니다."];
        header("Location: /");
    }

    public function searchpage() {
        $this->render("post/allSearch");
    }

    public function searchAll()
    {
        if (!isset($_POST['title'])) {
            $title = "";
            echo "asdf";
        } else {
            $title = $_POST['title'];

            $sql = "SELECT * FROM boards WHERE title like ?";
            $cnt = DB::fetch($sql, ["%".$title."%"]);

            if (!isset($cnt)) {
                echo "aasdf";
            } else {
                $title = $_POST['title'];

                $page = 1;
                if (!is_numeric($page)) {
                    $page = 1;
                }

                $sql = "SELECT * FROM boards WHERE title like ? LIMIT " . ($page - 1) * 6 . ", 6";
                $list = DB::fetchAll($sql, ["%".$title."%"]);
                $imgPattern = '/<img src=".+">/';

                foreach ($list as $item) {
                    $match = preg_match($imgPattern, $item->content, $matches);
                    if ($match > 0) {
                        $item->thumbnail = $matches[0];
                    } else {
                        $item->thumbnail = "<img src='/images/no-image.jpg'>";
                    }
                }

                $pager = new Pager();
                $pager->likeCalc($page, $title);

                $this->render("post/allSearch", ['list' => $list, 'pager' => $pager]);
            }
        }
    }
}
