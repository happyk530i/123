<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 03:13:47
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/addproduct.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9630db992fa0_57908039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea0a2d407450547d08c9365de5d6b1dc26db2da6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/addproduct.html',
      1 => 1603677476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9630db992fa0_57908039 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
    function parseCookie() {
      var cookieObj = {};
      var cookieAry = document.cookie.split(';');
      var cookie;

      for (var i = 0, l = cookieAry.length; i < l; ++i) {
        cookie = jQuery.trim(cookieAry[i]);
        cookie = cookie.split('=');
        cookieObj[cookie[0]] = cookie[1];
      }

      return cookieObj;
    }


    function getCookieByName(name) {
      var value = parseCookie()[name];
      if (value) {
        value = decodeURIComponent(value);
      }

      return value;
    }

    $(document).ready(function() {
      var result = getCookieByName('mark');
      if (result !== "5" && result !== "7") {
        $("#first").hide();
      }
    });

    $(document).ready(function() {
      var result = getCookieByName('mark');
      if (result !== "3") {
        $("#sec").hide();
      }
    });

    $(document).ready(function() {
      var result = getCookieByName('mark');
      if (result !== "7") {
        $("#three").hide();
      }
    });
   
    $(document).ready(function() {
      var result ="<?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
";
      // console.log(result);
      if (result == 123) {
        alert("連線成功");
      }
      

    });



    $(document).ready(function() {
      var result = getCookieByName('UserNameS');
      if (result) {
        $("#logadmin").hide();
      }
    });

    $(document).ready(function() {
      var result = getCookieByName('ids');
      if (result) {
        $("#first").hide();
      } else {

        $("#two").hide();
 }
    });
    $(function() {
            var newsList = [{
                name: "2017-05-01",
                password: "Item 1"
            }];
            $.get("/MVC22/EasyMVC/Admin/getusername", function(list) {

                newsList = JSON.parse(list);
                if (newsList == "資料庫錯誤") {
                    alert(newsList);
                }
                refreshNewsUI();
            })

            function refreshNewsUI() {
                $("#getnames").empty();
                $.each(newsList, function(key, obj) {
                    var newsText = obj.name ;
                    var $li = $("<h4></h4>").html(newsText);
                    // $li.append('<span class="pull-right"><button class="btn btn-info btn-xss editItem"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<button class="btn btn-danger btn-xss deleteItem"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span>');
                    $li.appendTo("#getnames");
                })
            }
        })

  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript" src="/MVC1/public/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      $("#form1").submit(function() {
        var countTest = 0;
        $("#nameError").html("");
        $("#passwordError").html("");
        $("#priceError").html("");
        $("#photoError").html("");

        var test = [" ", "$", "%", "#"];

        var name = $("#name").val();
        if (name.trim(name.length) == 0) {
          $("#nameError").html("名稱不能空白");
          countTest++;
        }
        var password = $("#content").val();
        if (password.length == 0 || password.trim(password.length) == 0) {
          $("#passwordError").html("簡介不能空白");
          countTest++;
        }

        var Phone = $("#price").val();
        if (Phone.length == 0 || Phone.trim(password.length) == 0) {
          $("#priceError").html("價格不能空白");
          countTest++;
        }

        var quantity = $("#quantity").val();
        if (quantity.length == 0 ) {
          $("#quantityError").html("數量不能空白");
          countTest++;
        }else if (quantity <= 0){
          $("#quantityError").html("數量不能小於等於0");
          countTest++;
        }else{
          $("#quantityError").html("");
        }
        


        var Phone = $("#price").val();
        if (Phone < '1') {
          $("#priceError").html("價格不能小於１塊錢");
          countTest++;
        }





        var photo = $("#myfile").val();

        if (photo.length == 0 || photo.trim(photo.length) == 0) {
          $("#photoError").html("請必須選擇檔案");
          countTest++;
        }

        var phone = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
        var Phone = $("#price").val();

        var count = 0;
        for (var x = 0; x < Phone.length + 1; x++) {
          if (count == 10) {
            $("#priceError").html("請輸入阿拉伯數字");
            countTest++;
            break;
          }
          count = 0;
          for (var y = 0; y < phone.length; y++) {
            if (Phone[x] != phone[y]) {
              count++;
            }
          }
        }

        if (countTest > 0) {
          return false;
        }
      });
    });
  <?php echo '</script'; ?>
>
<style type="text/css">
  
  h4 {position:absolute;right:380px; top:1px;}
  h1{position:absolute;left:50px; top:50px; }

  #formup{
    position:absolute;left:290px; top:150px;width:450px ;

  }
  </style>

</head>

<body>

  <!-- nav bar開始 -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">選冊網</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=><a href="#"> <span class="sr-only">(current)</span></a></li>
          <li id="first"><a href="http://localhost/MVC22/EasyMVC/Admin/login">後台帳號登入</a></li>
          <li id="two"><a href="/MVC22/EasyMVC/Home/logout/">登出</a></li>
          <li id="first" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">後台功能表<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/MVC22/EasyMVC/Doajaxs/doajax">商品編輯</a></li>
              <li><a href="/MVC22/EasyMVC/Product/addproduct">上傳商品</a></li>
              <li><a href="/MVC22/EasyMVC/views/Home/Member.php">會員管理&訂單</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/MVC22/EasyMVC/Admin/goajax">後台帳號新增＆管理</a></li>
              <li role="separator" class="divider"></li>

            </ul>
          </li>
        </ul>

        <h4 class="text-primary"  id="getnames" >
         
              後台會員 您好
          
      </h4>

        


      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- nav bar結束 -->

  <h1 >商品<small>上傳</small></h1>


  <!-- Form -->

  <div id="formup"   >
    <form id="form1" method="POST" type="file" action="/MVC22/EasyMVC/Product/addproduct" enctype="multipart/form-data">
      <div class="">
        <label for="InputName">書籍名稱：</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="">
        <div id="nameError" style="display:inline;color:red;background-color:white;"></div>
      </div>
      <div class="">
        <label for="InputTel">書籍簡介：</label>
        <input type="tel" class="form-control" id="content" name="content" placeholder="">
        <div id="passwordError" style="display:inline;color:red;background-color:white;"></div>
      </div>
      <div class="">
        <label for="InputTel">書籍價格：</label>
        <input type="tel" class="form-control" name="price" id="price" placeholder="">
        <div id="priceError" style="display:inline;color:red;background-color:white;"></div>
      </div>

      <div class="">
        <label for="InputTel">上架數量</label>
        <input type="tel" class="form-control" name="quantity" id="quantity" placeholder="">
        <div id="quantityError" style="display:inline;color:red;background-color:white;"></div>
      </div>

      <div class="">
        <label for="Textarea">上傳照片：</label>
        <input type="file" name="myfile" id="myfile" accept="image/*">
      </div>
      <div id="photoError" style="display:inline;color:red;background-color:white;"></div>



      <button class="btn btn-primary" type="submit">送出</button>



    </form>
  </div>





  



  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
