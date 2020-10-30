<!-- 註冊會員
購買商品
交易紀錄 -->

<?php

class HomeController extends Controller
{



    public function login()
    {


        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            return $this->smarty->display('login.html'); //***如果過來get請求就導頁***
        }

        $link = $this->db();
        // header("Content-Type:text/html; charset=utf-8");
        $username = is_string($_POST["username"]) ? $_POST["username"] : 0;
        if ($username === 0) {
            $messages = 1;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('login.html');
        }

        $sql = "select * from dertest where username= '$username'";
        $result = mysqli_query($link, $sql);
        if ($result === false) {
            $messages = 1;
            $this->smarty->assign('sqlerror', $messages);
            return $this->smarty->display('login.html');
        }
        //判斷
        $row = mysqli_fetch_assoc($result);
        if (!preg_match("/^[A-Za-z0-9]+$/", $_POST["password"], $matches)) {
            $messages = 1;
            $this->smarty->assign('mes', $messages);
            return $this->smarty->display('login.html');
        }

        $frompass = $_POST["password"];
        $getpass = $row['password'];
        // $getname = $row["username"];
        $getid = $row["id"];

        // $stopadmin = $row["stopadmin"];
        //      $stopadmin ===0 被停用的會員   



        if ($row !== null &&  password_verify($frompass, $getpass)) {

            $getids = password_hash("$getid", PASSWORD_DEFAULT);

            $sql = "insert into logincheck (id,garbled) value ('$getid','$getids');";
            $result =  mysqli_query($link, $sql);
            if ($result === false) {
                $messages = 1;
                $backurl = "/MVC22/EasyMVC/Home/login/";
                $this->smarty->assign('backurl', $backurl);
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            }
            if (setcookie('idss', $getids, '0', '/'));  //設定COOKie,使用者ID

            // $UserNameS = $_COOKIE['UserNameS'];
            // $ids = $_COOKIE['ids'];

            // require_once('ProductController.php');
            // $backend = new ProductController();
            // return $backend->message();

            // require_once('ProductController.php');
            // $backend = new ProductController();
            // return $backend->message();

            $this->view("Home/adhomepage");
            // header("Location:/MVC22/EasyMVC/Product/message?page=1&");
            // exit();
        } else {
            $messages = 1;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('login.html');
        }
    }

    public function logout()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            $link = $this->db();
            $ids = $_COOKIE["ids"];
            $idss = $_COOKIE["idss"];
            if ($ids === null) {
                $witch = $idss;
            } else {

                $witch = $ids;
            };


            $sqls = "TRUNCATE TABLE logincheck";

            // $sqls = "DELETE FROM logincheck WHERE garbled ='$witch '";
            $result = mysqli_query($link, $sqls);
            if ($result === false) {
                $messages = 1;
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            }

            setcookie('ids', '', 0, '/');
            setcookie('idss', '', 0, '/');

            return  $this->view("Home/adhomepage");
            exit();
        }
    }

    // function hellos()
    // {

    //     $this->view("Home/adhomepage");
    // }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {


            return $this->smarty->display('register.html');
            //***如果過來get請求就自導頁面***  post就向下做
        }
        $link = $this->db();
        // header("Content-Type:text/html; charset=utf-8");



        $username = is_string($_POST["username"]) ? $_POST["username"] : 0;
        if ($username === 0) {
            $messages = 1;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('register.html');
        }
        $UserNameS = $_POST["username"];

        // $gf = $_COOKIE['UserNameS'];
        $sqls = "select * from dertest where username= '{$_POST["username"]}'";
        $result = mysqli_query($link, $sqls);
        if ($result === false) {
            $messages = 1;
            $this->smarty->assign('sqlerror', $messages);
            return $this->smarty->display('register.html');
        }
        $row = mysqli_fetch_assoc($result);


        if ($row["username"] === null) {

            // setcookie('UserNameS', $UserNameS, 0, '/'); //設定COOKie,使用者名稱

            if (!preg_match("/^[A-Za-z0-9]+$/", $_POST["password"], $matches)) {
                $messages = 1;
                $this->smarty->assign('sqlerror', $messages);
                return $this->smarty->display('register.html');
            }



            $hash = password_hash("$_POST[password]", PASSWORD_DEFAULT);
            $preset = '0';
            $UserNameS = $_POST["username"];
            $sql = "insert into dertest (username,password,stopadmin)
             value('$UserNameS','$hash','$preset');";
            $result = mysqli_query($link, $sql);
            if ($result === false) {
                $messages = 1;
                $this->smarty->assign('sqlerror', $messages);
                return $this->smarty->display('register.html');
            }

            return $this->smarty->display('login.html');
        } else {

            $messages = 1;
            $this->smarty->assign('doubleid', $messages);
            return $this->smarty->display('register.html');
        }
        exit();
    }


    function hello($name)
    {
        $user = $this->model("User");
        $user->name = $name;
        $this->view("Home/hello", $user);
        // echo "Hello! $user->name";
    }
}
