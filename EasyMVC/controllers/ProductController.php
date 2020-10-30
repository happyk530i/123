<?php

class ProductController extends Controller
{

    //上傳商品 
    public function addproduct()
    {
        //bodycheck()可負值變數＆
        if ($this->bodycheck()) {
            return $this->smarty->display('login2.html');
        }

        $link = $this->db();

        // var_dump($this->operator);
        // exit;

        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            $id = $this->operator->id;
            $authority = $this->operator->authority;

            // $authority = $row['authority'];
            // $id = $row['id'];
            // authority 權限設定 1 表示有權限
            if (
                $authority !== "1"
                && password_verify($id, $_COOKIE['ids'])
            ) {
                return $this->smarty->display('login2.html');
            }

            if (
                $authority === "1"
                && password_verify($id, $_COOKIE['ids'])
            ) {

                return $this->smarty->display('addproduct.html');
                // return $this->view("Home/addproduct");
            }
        }

        //阻擋輸入攻擊資料 post
        $name = is_string($_POST["name"]) ? $_POST["name"] : "0";
        if ($name === "0") {
            $messages = "錯誤";
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('error.html');
        } //書籍名稱

        $content = is_string($_POST["content"]) ? $_POST["content"] : "0";
        if ($content === "0") {
            $messages = "錯誤";
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('error.html');
        } //書籍內容

        $price = is_numeric($_POST["price"]) ? $_POST["price"] : 0;
        $quantity = is_numeric($_POST["quantity"]) ? $_POST["price"] : 0;
        $image = $_FILES["myfile"]["tmp_name"];
        $check = getimagesize($_FILES["myfile"]["tmp_name"]);
        $type = mime_content_type($image);

        if ($check === false) {
            $messages = "資料輸入不正確";
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('error.html');
        }

        $image = base64_encode(file_get_contents(addslashes($image)));
        $sqls = "insert into Product (name,content,type,price,Quantity,picture) values ('$name','$content','$type',$price,$quantity,'$image')";
        $result = mysqli_query($link, $sqls);
        if (!$result) {
            $messages = "連線失敗";
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('error.html');
        };

        $messages = "123";
        $this->smarty->assign('messages', $messages);
        return $this->smarty->display('addproduct.html');
        // return $this->view("Home/addproduct");
    }


    //一般會員商品頁
    public function message()
    {
        if ($this->checkbody2()) {    //如果前頁判斷出flase就導頁
            return $this->smarty->display('login.html');
        }

        $username = $this->operators->username; //當前使用者 名稱
        $stopadmin = $this->operators->stopadmin; //是否停止會員
        $link = $this->db();
        $value = is_numeric($_GET['value']) ? $_GET['value'] : 54;
        //抓取前方過來的URl值,如果沒有就設置54

        $sqlss = "select * from Product where id= '$value'"; //利用URl值傳給大商品
        $result = mysqli_query($link, $sqlss);
        if ($result === false) {
            $messages = 1;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('login.html');
        }

        $row = mysqli_fetch_assoc($result);
        // $bigid = $row1["id"];
        $bigname = $row["name"];         //名稱
        $bigcontent = $row["content"];   // 內容
        $bigprice = $row["price"];       //價格
        $bigpicture = $row["picture"];   //照片
        $bigQuantity = $row["Quantity"]; //數量
        // 抓取 $stopadmin 會員狀態

        $stopadmin = $this->operators->stopadmin;
        $username = $this->operators->username;
       
        // $id = $this->operators->id;

        // if ($stopadmin === null) {
        //     $stopadmin = 6;
        // };

        $this->smarty->assign('value', $value);     //點選到的值
        $this->smarty->assign('bigpicture', $bigpicture); //圖片
        $this->smarty->assign('bigname', $bigname);   //名稱
        $this->smarty->assign('bigprice', $bigprice); // 價格
        $this->smarty->assign('bigcontent', $bigcontent); //內容


        $sqlss = "SELECT * FROM Product";
        $results = mysqli_query($link, $sqlss);
        if ($results === false) {
            $messages = 1;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('login.html');
        }

        $records = mysqli_num_rows($results); //總筆數

        $pagesize = 5; //每頁長度
        $pages = ceil($records / $pagesize); //總頁數
        $page = $_GET['page'];
        if ($page > $pages || $page <= 1 || $page === null) {
            $page = 1;
        }
        $startrow = ($page - 1) * $pagesize; //頁的開始行
        $sqlss .= " ORDER BY id DESC LIMIT {$startrow},{$pagesize}";
        $results = mysqli_query($link, $sqlss);
        if ($results === false) {
            $messages = 1;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('login.html');
        }
        $row_result2 = [];
        $this->smarty->assign('allcontent', mysqli_fetch_all($results));
        //設定總分頁數 設為5  下面根據此例做判斷
        $start = $page - 2;
        $end = $page + 2;
        // 如果小於等於2 設置開頭為1
        if ($page <= 2) {
            $start = 1;
            $end = 5;
        }
        //如果當前頁大於等於總頁數減去2 直接定義前頭與後頭
        if ($page >= $pages - 2) {
            $start = $pages - 4;
            $end  = $pages;
        }
        //如果總頁數設定總數（例如設定顯示要5頁）
        if ($pages < 5) {
            $start = 1;
            $end = $pages;
        }

        $one = 0;
        // $smarty = $this->smarty();
        // 分頁處理
        $this->smarty->assign('start', $start);
        $this->smarty->assign('one', $one);

        $this->smarty->assign('end', $end);
        $this->smarty->assign('page', $page);
        $this->smarty->assign('pages', $pages);
        $this->smarty->assign('Quantity', $bigQuantity);
        //抓被停權指令
        $this->smarty->assign('stopadmin', $stopadmin);
        //資料處理
        $this->smarty->assign('arrs', $row_result2);
        $this->smarty->assign('abc', $username);
        return $this->smarty->display('car.html'); //***如果過來get請求就作頁面轉***

    }


    //一般會員的購買submit
    public function cookiecart()
    {

        if ($this->checkbody2()) {    //如果前頁判斷出flase就導頁
            return $this->smarty->display('login.html');
        }
        $id = $this->operators->id;
        $stopadmin = $this->operators->stopadmin;
        // $username = $this->operators->username;

        if ($_SERVER['REQUEST_METHOD'] === "POST"  && $stopadmin === "1") {


            $amount = is_numeric($_POST['amount']) ? $_POST['amount'] : "0";
            if ($amount === "0") {
                $messages = 1;
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            } //數量

            $value = is_numeric($_POST['values']) ? $_POST['values'] : "0";
            if ($value === "0") {
                $messages = 1;
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            } //書籍編號
            // $page =  $_POST['pages'];

            // setcookie('value', $value, 0, '/');
            // setcookie('page', $page, 0, '/');

            //商品ID    利用商品ID調出 當前商品資訊
            //調出當前商品相關資料
            $link = $this->db();
            $sqlss = "select * from Product where id= '$value'";
            $result = mysqli_query($link, $sqlss);
            if ($result === false) {
                $messages = 1;
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            } //書籍編號

            $row1 = mysqli_fetch_assoc($result);
            // $bigid = $row1["id"];
            $bigname = $row1["name"];  //當前商品名稱
            $bigprice = $row1["price"]; //當前商品價格
            $bigname = $row1["name"]; //當前商品名稱
            $totalprice = $bigprice * $amount;   //消費總金額
            $buserid = $id;
             //新增購買歷史
            $sql = "insert into listbuy (userid,productid,productName,buyquantity,unitprice,total)value('$buserid','$value','$bigname','$amount','$bigprice','$totalprice');";
            $result = mysqli_query($link, $sql);
            if ($result === false) {
                $messages = "錯誤";
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            }

            //扣除購買數量
            $sqls = "UPDATE Product SET  Quantity =Quantity-$amount where id= '$value'";
            $result = mysqli_query($link, $sqls);
            if ($result === false) {
                $messages = 1;
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            }
            //判斷完成後購買 商品總數量減去


            return $this->message();
        } else {

            $messages = 0;
            $this->smarty->assign('messages', $messages);
            return $this->smarty->display('login.html');
        }
    }

   
   
    //一般會員查看歷史訂單
    public function colnebefore()
    {
        $link = $this->db();
        if ($this->checkbody2()) {    //如果前頁判斷出flase就導頁
            return $this->smarty->display('login.html');
        }

        $id = $this->operators->id;
        // $stopadmin = $this->operators->stopadmin;
        $username = $this->operators->username;


        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $sqlss = "SELECT productName,buyquantity,unitprice,total FROM listbuy WHERE userid = '$id'";
            $results = mysqli_query($link, $sqlss);
            if ($results === false) {
                $messages = 1;
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            }


            $records = mysqli_num_rows($results);
            $pagesize = 5; //每頁長度
            $pages = ceil($records / $pagesize); //總頁數
            $page = $_GET['page'];
            if ($page > $pages || $page <= 1) {
                $page = 1;
            }
            $startrow = ($page - 1) * $pagesize; //頁的開始行
            $sqlss .= " ORDER BY productName DESC LIMIT {$startrow},{$pagesize}";
            $results = mysqli_query($link, $sqlss);
            if ($results === false) {
                $messages = "錯誤";
                $this->smarty->assign('messages', $messages);
                return $this->smarty->display('error.html');
            }
            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($results)) {
                $row_result2[] = $row_result;
            }
            //設定總分頁數 設為5  下面根據此例做判斷
            $start = $page - 2;
            $end = $page + 2;
            // 如果小於等於2 設置開頭為1
            if ($page <= 2) {
                $start = 1;
                $end = 5;
            }
            //如果當前頁大於等於總頁數減去2 直接定義前頭與後頭
            if ($page >= $pages - 2) {
                $start = $pages - 4;
                $end  = $pages;
            }
            //如果總頁數設定總數（例如設定顯示要5頁）
            if ($pages < 5) {
                $start = 1;
                $end = $pages;
            }
           
            $one = 1;
            $this->smarty->assign('start', $start);
            $this->smarty->assign('abc', $username);
            $this->smarty->assign('one', $one);
            $this->smarty->assign('end', $end);
            $this->smarty->assign('page', $page);
            $this->smarty->assign('pages', $pages);
            $this->smarty->assign('arrs', $row_result2);
            return $this->smarty->display('forlooking.html'); //***如果過來get請求就作頁面轉***

        } else {

            return  $this->view("Home/adhomepage");
        }
    }
}
