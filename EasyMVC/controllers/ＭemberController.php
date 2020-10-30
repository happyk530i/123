<?php

class ＭemberController extends Controller
{

    // 參考 AdminController


    //member 頁 取得資料 2.修改帳號權限查看
    public function getadmin()
    {

        if ($this->bodycheck()) {
            return $this->smarty->display('login2.html');
        }

        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            $link = $this->db();
            $sql = "select * from dertest";
            $result = mysqli_query($link, $sql);

            if ($result === false) {
                $onemesg = 1;
                // $f =json_encode($one);
                return json_encode($onemesg);
            }
            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
            }
            return json_encode($row_result2);
        }
    }



    // public function postbox()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === "POST") {
    //         $body = $_POST['e'];
    //         $json = json_encode($body);
    //         $jsons = json_decode($json);
    //         $id = $jsons->userid;
    //         setcookie('userid', $id, '0', '/');
    //         return;
    //     }
    // }


    // public function getbox()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === "GET") {
    //         $userid = $_COOKIE['userid'];
    //         $link = $this->db();
    //         $sql = "select * from listbuy where userid = $userid ";
    //         $result = mysqli_query($link, $sql);
    //         $row_result2 = [];
    //         while ($row_result = mysqli_fetch_assoc($result)) {
    //             $row_result2[] = $row_result;
    //         }
    //         return json_encode($row_result2);
    //     }
    // }

    //會員更改狀態頁
    public function stopadmin()
    {

        //驗證ID是否正確

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

            $id = $jsons->id;                //取得前頁端回傳的id
            $ids = is_numeric($id) ? $id  : false;
            $stopadmin = $jsons->stopadmin;    //取得前頁端回傳的停止使用
            $stopadmins = is_numeric($stopadmin) ? $stopadmin  : false;
            if ($ids === false || $stopadmins === false) {
                $onemesg = 1;
                return json_encode($onemesg);
            }
            //轉換成需要的mysql回傳
            if ($stopadmin === "0") {
                $stopadmin = 1;
            } else {
                $stopadmin = 0;
            }
            $link = $this->db();
            $sqls = "UPDATE dertest SET  stopadmin ='$stopadmin' where id='$id'";
            $result1 = mysqli_query($link, $sqls);
            if ($result1 === false) {
                $onemesg =  1;
                return json_encode($onemesg);
            } else {
                $onemesg =0;
                return json_encode($onemesg);
            }
        }
    }

    // public function relay()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === "POST") {

    //         $body = $_POST['e'];
    //         $json = json_encode($body);
    //         $jsons = json_decode($json);
    //         $buserid = $jsons->id;        //點到的ID
    //         $username = $jsons->username;
    //         setcookie('peopid', $buserid, '0', '/');
    //         setcookie('usernames', $username, '0', '/');
    //     }
    // }

    //查詢一般會員購買紀錄 使用smarty抓到資料導入到peoplebuy.html
    public function colnebefore()
    {

        //驗證ID是否正確
        if ($this->bodycheck()) {    //如果前頁判斷出flase就直接出去
            return $this->smarty->display('login2.html');
        }


        if ($_SERVER['REQUEST_METHOD'] === "GET") {

            $buserid = $_GET['id'];
            $buserids = is_numeric($buserid) ? $buserid : false;
            $busername = $_GET['name'];
            $busernames = is_string($busername) ? $busername : false;
            if ($buserids === false && $busernames === false) {
                $error = "資料庫連線錯誤";
                $this->smarty->assign('messages', $error);
                return $this->smarty->display('error.html');
            }

            $link = $this->db();

            $sqlss = "SELECT productName,buyquantity,unitprice,total FROM listbuy WHERE userid = $buserid ";
            $results = mysqli_query($link, $sqlss);
            if ($results === false) {
                $onemesg =  1;
                $this->smarty->assign('messages', $onemesg);
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
                $onemesg =  "操作失敗稍後再試";
                $this->smarty->assign('messages', $onemesg);
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

            $zeo = 0;
            $one = 1;
            // $pages 如果等於0 表示 ; 如果沒有任何商品
            $username = $this->operator->adminname ?? '???';

            // $smarty = $this->smarty();
            $this->smarty->assign('start', $start);   //用來判斷分頁開始的第1分頁數
            $this->smarty->assign('username', $username);
            $this->smarty->assign('buserid',  $buserid); //傳送當前id
            $this->smarty->assign('busername', $busername);     //查詢客人的名字用url取得
            $this->smarty->assign('zeo', $zeo);   //判斷總分頁是否從1開始
            $this->smarty->assign('one', $one);   //判斷總分頁是否從0開始
            $this->smarty->assign('noany', $pages); //開始總分頁數
            $this->smarty->assign('end', $end);   //用來判斷分頁開始的第1分頁數
            $this->smarty->assign('page', $page);  //當前頁
            $this->smarty->assign('pages', $pages); //總頁數
            $this->smarty->assign('arrs', $row_result2); //總數值內容 
            return $this->smarty->display('peoplebuy.html'); //***如果過來get請求就作頁面轉***

        }
    }
}
