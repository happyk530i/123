
<?php

class AdminController extends Controller
{



    //登入時 順便設置 判斷會員的權限 Product-addproduct
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            return $this->smarty->display('login2.html');
            // return $this->view("Home/login2"); //***如果過來get請求***
        }

        $link = $this->db();
        $username = is_string($_POST["username"]) ? $_POST["username"] : 0;
        if ($username === 0) {
            $messages = 1;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('login2.html');
        }

        $sql = "select * from admin where name= '$username'";
        $result = mysqli_query($link, $sql);
        if ($result === false) {
            $messages = 1;
            $backurl = "/MVC22/EasyMVC/Admin/login/";
            $this->smarty->assign('backurl', $backurl);
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('error.html');
        }
        //  判斷
        $row = mysqli_fetch_assoc($result);

        if (!preg_match("/^[A-Za-z0-9]+$/", $_POST["password"], $matches)) {
            $messages = 1;
            $this->smarty->assign('mes', $messages);
            return $this->smarty->display('login2.html');
        }
        $frompass = $_POST["password"];
        $getpass = $row['password'];
        $getid = $row["id"];
        $getname = $row["name"];


        //  判斷
        if ($row !== null &&  password_verify($frompass, $getpass)) {

            $getids = password_hash("$getid", PASSWORD_DEFAULT);

            //登入時設定一組至 其他 table 來利用判斷是否為正確id

            $sql = "insert into logincheck (id,name,garbled)
            value('$getid','$username','$getids');";
            $result =  mysqli_query($link, $sql);
            if ($result === false) {
                $messages = 1;
                $backurl = "/MVC22/EasyMVC/Admin/login/";
                $this->smarty->assign('backurl', $backurl);
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            }
            setcookie('ids', $getids, '0', '/');  //設定COOKie,使用者ID

            $this->view("Home/adhomepage");
        } else {

            $messages = 1;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('login2.html');
            exit();
        }
    }

    // 進入後台管理會員頁安全管理
    public function goajax()
    {
        if ($this->checkthree()) {

            return $this->view("Home/setadmin");
        } else {

            return $this->smarty->display('login2.html');
        }
    }


    //新增帳號 ->  刪除()&權限狀態更改()

    //拿取名單
    public function getadmin()
    {

        if ($this->bodycheck()) {    //如果前頁判斷出flase就直接出去
            return $this->smarty->display('login2.html');
        }

        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            $link = $this->db();
            $sql = "select * from admin where mark <> 7 ";
            $result = mysqli_query($link, $sql);
            if ($result === false) {
                $onemesg = 1;
                return json_encode($onemesg);
            }
            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
            }
            return json_encode($row_result2);
        }
    }

    public function getusername()
    {
        if ($this->bodycheck()) {    //如果前頁判斷出flase就直接出去
            return $this->smarty->display('login2.html');
        }

        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            $link = $this->db();
            $sql = "select * from  logincheck ";
            $result = mysqli_query($link, $sql);
            if ($result === false) {
                $onemesg = 1;
                return json_encode($onemesg);
            }
            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
            }
            return json_encode($row_result2);
        }
    }




    // 新增會員
    public function postadmin()
    {

        if ($this->bodycheck()) {    //如果前頁判斷出flase就直接出去
            return $this->smarty->display('login2.html');
        }


        $link = $this->db();
        $body = $_POST['list'];
        $json = json_decode($body);
        $jsonscheck = is_object($json) ? $json : "0";
        if ($jsonscheck === "0") {
            $onemesg = 1;
            return json_encode($onemesg);
        }
        $name = $json->name;       //前面傳來name
        $name = is_string($name) ? $name : "0";
        $pass = $json->password;   //前面傳來pass
        $pass = is_string($pass) ? $pass : "0";
        if ($pass === "0" || $name === "0") {
            $onemesg = 1;
            return json_encode($onemesg);
        }
        $mark = 5;                 //自訂5
        $authority = $json->authority; //前面傳來權限設定
        // header("Content-Type:text/html; charset=utf-8");

        //查詢是否有一樣命字
        $sqls = "select * from admin where name='$name' ";
        $result = mysqli_query($link, $sqls);
        if ($result === false) {
            $onemesg = 1;
            return json_encode($onemesg);
        }
        // $row = mysqli_fetch_assoc($result);
        // $row1["name"] === null  空值表示找不到 

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $hash = password_hash("$pass", PASSWORD_DEFAULT); //密碼加密
            $sql = "insert into admin (mark,name,password,authority)value('$mark','$name','$hash','$authority');";
            $result = mysqli_query($link, $sql);
            if ($result === false) {
                $onemesg = 1;
                return json_encode($onemesg);
            }
            $okmes = 0;
            return json_encode($okmes);
        }
    }

    // 刪除
    public function deladmin()
    {
        if ($this->bodycheck()) {    //如果前頁判斷出flase就直接出去
            return $this->smarty->display('login2.html');
        }
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $body = $_POST['list'];
            $json = json_encode($body);
            $jsons = json_decode($json);
            $jsonscheck = is_object($jsons) ? $jsons : "0";
            if ($jsonscheck === "0") {
                $onemesg = 1;
                return json_encode($onemesg);
            }
            $id = $jsons->id;
            $id = is_numeric($id) ? $id : "0";
            if ($id  === "0") {
                $onemesg = 1;
                return json_encode($onemesg);
            }

            $link = $this->db();
            $sqls = "DELETE FROM Admin WHERE id ='$id'";
            $result = mysqli_query($link, $sqls);
            // $row1 = mysqli_fetch_assoc($result1);
            if ($result === false) {
                $onemesg = 1;
                return json_encode($onemesg);
            }

            $okmes = 0;
            return json_encode($okmes);
        }
    }

    // 停用會員
    public function stopadmin()
    {

        if ($this->bodycheck()) {    //如果前頁判斷出flase就直接出去
            return $this->smarty->display('login2.html');
        }

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $body = $_POST['list'];
            $json = json_encode($body);
            $jsons = json_decode($json);
            $jsonscheck = is_object($jsons) ? $jsons : "0";
            if ($jsonscheck === "0") {
                $onemesg = 1;
                return json_encode($onemesg);
            }

            $id = $jsons->id;               //前頁資料id  is_numeric
            $id = is_numeric($id) ? $id : "0";
            if ($id  === "0") {
                $onemesg = 1;
                return json_encode($onemesg);
            }
            

            $authority = $jsons->authority; //前頁資料authority
            if ($authority === "0") {
                $authority = 1;
            } else {
                $authority = 0;
            }
            // setcookie('authority',$authority, '0', '/');

            $link = $this->db();
            $sqls = "UPDATE Admin SET  authority ='$authority' where id='$id'";
            $result = mysqli_query($link, $sqls);
            if ($result === false) {
                $onemesg = 1;
                return json_encode($onemesg);
            }

            $okmes = 0;
            return json_encode($okmes);
        }
    }




    //      後台控制器 登入後可以  
    // 查詢會員名單  修改會員 會員訂購明細查詢

    // （增加商品）  查詢商品  以及 修改,刪除商品 




























































}
