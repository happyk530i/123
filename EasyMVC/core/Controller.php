<?php

class Controller
{

    protected $smarty;
    public $operator;
    public $operators;
    public $operatorss;


    public function model($model)
    {
        require_once "models/$model.php";
        return new $model();
    }

    function __construct()
    {

        $this->smarty();



        error_reporting(0);
    }

    //當呼叫$view.php
    public function view($view, $data = array())
    {
        require_once "views/$view.php";
    }

    public function smarty()
    {

        require_once('./smarty-3.1.35/libs/Smarty.class.php');
        $smarty = new smarty();

        $smarty->left_delimiter = "{{";
        $smarty->right_delimiter = "}}";
        // $smarty->config_dir = 'demo/configs/';
        // $smarty->cache_dir = 'demo/cache/';
        // $smarty->error_reporting = "E_ERROR || E_WARNING";
        $smarty->setTemplateDir('views/Home')
            ->setCompileDir('templates_c');

        $this->smarty = $smarty;



        // return $smarty
    }

    public function loginname($getids)
    {
        $link = $this->db();


        $sql = "select * from admin as a join logincheck as l on a.id=l.id  where l.garbled= '$getids' ";
        $result = mysqli_query($link, $sql);
        if ($result === false) {
            $onemesg =  1;
            $this->smarty->assign('messages', $onemesg);
            return $this->smarty->display('error.html');
        }

        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $authority = $row['authority'];
        $adminname = $row['name'];
        $mark = $row['mark'];
        if (password_verify($id, $getids) === false) {
            return false;
        }

        // $this->operator->id = $id;
        // $this->operator->authority = $authority;

        $this->operatorss->adminname = $adminname;
        // $this->operator->mark = $mark;
    }


    public function bodycheck()
    {
        $link = $this->db();
        $idscookie = $_COOKIE["ids"];
        $sql = "select * from admin as a join logincheck as l on a.id=l.id  where l.garbled= '$idscookie' ";
        $result = mysqli_query($link, $sql);
        if ($result === false) {
            $onemesg =  1;
            $this->smarty->assign('messages', $onemesg);
            return $this->smarty->display('error.html');
        }

        $row = mysqli_fetch_assoc($result);




        $id = $row['id'];
        $authority = $row['authority'];
        if ($authority === null) {
            require_once('./Controllers/HomeController.php');
            $backlogout = new HomeController();
            return $backlogout->logout();
        }

        $adminname = $row['name'];
        $mark = $row['mark'];
        if (password_verify($id, $idscookie) === false) {
            return false;
        }

        $this->operator->id = $id;
        $this->operator->authority = $authority;
        $this->operator->adminname = $adminname;
        $this->operator->mark = $mark;
    }

    public function checkbody2()
    {
        $link = $this->db();
        $g = '{$_COOKIE["idss"]}';
        $sql = "select * from dertest as a join logincheck as l on a.id=l.id  where l.garbled= '{$_COOKIE["idss"]}'";
        $result = mysqli_query($link, $sql);

        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $username = $row['username'];
        $stopadmin = $row['stopadmin'];
        // $mark = $row['mark'];
        if (password_verify($id, $_COOKIE['idss']) === false) {
            return false;
        }
        $this->operators->id = $id;
        $this->operators->username = $username;
        $this->operators->stopadmin = $stopadmin;
    }











    public function checktwo()   //商品修改頁 判斷權限
    {
        if ($this->bodycheck()) {          //如果前頁判斷出flase
            return $this->view("Home/login2");
        }
        $id = $this->operator->id;
        $authority = $this->operator->authority;

        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            if (
                $authority !== "1"
                && password_verify($id, $_COOKIE['ids'])
            ) {
                return false;
            }

            if (
                $authority === "1"
                && password_verify($id, $_COOKIE['ids'])
            ) {

                return true;
            }
        }
    }




    public function checkthree()    //後台會員判斷權限
    {

        if ($this->bodycheck()) {          //如果前頁判斷出flase
            return $this->view("Home/login2");
        }
        $id = $this->operator->id;
        $mark = $this->operator->mark;


        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            if (
                $mark !== "7"
                && password_verify($id, $_COOKIE['ids'])
            ) {
                return false;
            }

            if (
                $mark === "7"
                && password_verify($id, $_COOKIE['ids'])
            ) {

                return true;
            }
        }
    }



    public function sqlerror($result)
    {

        if ($result) {
            return;
        } else {
            return false;
        }
    }

    public function db()
    {

        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $databaseName = "mydb2";
        $link = mysqli_connect($serverName, $userName, $password);
        mysqli_select_db($link, $databaseName);

        return $link;
    }
}
