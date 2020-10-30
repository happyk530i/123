<?php

class DoajaxsController extends Controller
{
    //判斷是否擁有權限（＊商品編輯）
    public function doajax()
    {
        if ($this->checktwo()) {

            return $this->view("Home/index");
        } else {
            return $this->smarty->display('login2.html');
        }
    }



    //得到商品訊息  (查.刪.修)共一頁

    public function getajax()
    {
        if ($this->bodycheck()) {    //如果前頁判斷出flase就直接出去
            return $this->smarty->display('login2.html');
        }

        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $link = $this->db();
            $sql = "select * from Product";
            $result = mysqli_query($link, $sql);
            if ($result === false) {
                $onemesg =  1;
                $this->smarty->assign('messages', $onemesg);
                return $this->smarty->display('error.html');
            }

            $row_result2 = [];
            while ($row_result = mysqli_fetch_assoc($result)) {
                $row_result2[] = $row_result;
            }

            return json_encode($row_result2);
        }
    }


    //刪除商品
    public function delajax()
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
            $sqls = "DELETE FROM Product WHERE id ='$id'";
            $result = mysqli_query($link, $sqls);
            if ($result === false) {
                $onemesg =  1;
                $this->smarty->assign('messages', $onemesg);
                return $this->smarty->display('error.html');
            }
            $okmes =0;
             return json_encode($okmes);
        }
    }

    //修改商品
    public function putajax()
    {

        if ($this->bodycheck()) {    //如果前頁判斷出flase就直接出去
            return $this->smarty->display('login2.html');
        }

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $link = $this->db();
            $body = $_POST['list'];
            $json = json_decode($body);
            $jsons = json_decode($json);
            $jsonscheck = is_object($json) ? $json : "0";
            if ($jsonscheck === "0") {
                $onemesg = 1;
                return json_encode($onemesg);
            }
            //設定安全判斷
            $id = $json->id;
            $ids = is_numeric($id) ? $id  : false;
            $name = $json->name;
            $names = is_string($name) ? $name : false;
            $content = $json->content;
            $contents = is_string($content) ? $name : false;
            $price = is_numeric($json->price) ? $json->price : 0;
            $Quantity = is_numeric($json->Quantity) ? $json->Quantity : 0;
            if ($ids===false || $names===false || $contents===false) {
                $onemesg = 1;
                return json_encode($onemesg);
            }

            $sqls = "UPDATE Product SET name='$name', content='$content',price='$price',Quantity='$Quantity' where id='$id'";
            $result = mysqli_query($link, $sqls);
            if ($result === false) {
                $onemesg = 1;
                return json_encode($onemesg);
            }

             $okmes =0;
             return json_encode($okmes);
        }


    }
}
