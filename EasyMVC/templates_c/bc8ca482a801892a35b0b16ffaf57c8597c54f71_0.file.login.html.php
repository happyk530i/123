<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 07:08:45
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f93b6ddea5984_22164179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc8ca482a801892a35b0b16ffaf57c8597c54f71' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/login.html',
      1 => 1603516122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f93b6ddea5984_22164179 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" xmlns:margin-top="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="/MVC1/public/css/user.css" rel="stylesheet">
    <link rel="stylesheet" href="/MVC1/public/css/loading.css">
    <!-- 整體背景 -->
    <link id="order" rel="stylesheet" type="text/css" href="/MVC1/public/css/order.css">
    <meta charset=utf-8>

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
                var test = [" ", "$", "%", "#"];
                var name = $("#username").val();
                if (name.trim(name.length) == 0) {
                    $("#nameError").html("帳號長度錯誤");
                    countTest++;
                }
                var password = $("#password").val();
                if (password.length == 0 || password.trim(password.length) == 0) {
                    $("#passwordError").html("密碼不能為空");
                    countTest++;
                }
                for (var x = 0; x < name.length; x++) {
                    for (var i = 0; i < test.length; i++) {
                        if (name[x] == test[i]) {
                            $("#nameError").html("帳號不可含有特殊符號");
                            countTest++;
                        }
                    }
                }
                if (countTest > 0) {
                    return false;
                }

            });
    
        });
         $(document).ready(function() {
      var result ="<?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
";
     if (result == 1) {
        alert("查詢不到再試一次");
      }
    });

      $(document).ready(function() {
      var result ="<?php echo $_smarty_tpl->tpl_vars['sqlerror']->value;?>
";
     if (result == 1) {
        alert("資料庫錯誤");
      }
      
    //   else if (result ==0) {
    //     alert("沒有權限");

    //   }
      

    });

    $(document).ready(function() {
      var result ="<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
";
      // console.log(result);
      if (result == 1) {
        alert("請包含英文字或數字");
      }
      

    });


    <?php echo '</script'; ?>
>


</head>

<body>

    <div class="covervid-wrapper">
        <div class="container">
            <div class="row row-centered">
                <div class="col-xs-6 col-md-4 col-center-block">
                    <!-- 透過引用loading.css -->
                    <h1 class="" style="color:gray">
                        Welcome login <br>歡迎來到登入 </h1>


                    <form action="/MVC22/EasyMVC/Home/login" method="post" id="form1">
                        <!-- "/MVC/EasyMVC/Home/login"重要 -->

                        <!-- 輸入id -->
                        <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon1">
                                <i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="username" placeholder="請輸入帳號" />
                        </div>
                        <div id="nameError" style="display:inline;color:red;background-color:white;"></div>


                        <!-- 輸入密碼 -->
                        <div class="edit input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon2">
                                <i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="請輸入密碼" />
                        </div>
                        <div id="passwordError" style="display:inline;color:red;background-color:white;"></div>

                        <h4 class="textcolor  ld-bounce">
                            <a href="/MVC22/EasyMVC/views/Home/adhomepage.php">
                                返回首頁</a></h4>


                        <input type="submit" class="btn btn-success btn-block" name="submit" value="登入">
                        <!-- href="/MVC/EasyMVC/Home/register/" -->
                        <a type="submit" class="btn btn-primary btn-block" href="/MVC22/EasyMVC/Home/register/" style="margin-bottom: 20%">註冊</a>
                        <h1 class="  ld-bounce text-secondary bg-warning text-white" style="color:red;  font-size:30px;">



                    </form>
                </div>
            </div>
        </div>



</body>

</html><?php }
}
