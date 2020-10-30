<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 09:25:20
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f93d6e01eca05_84466710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df05ad36ed5a9be45523b10433d05d469ebe012' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/register.html',
      1 => 1603524313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f93d6e01eca05_84466710 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
error_reporting(0);
<?php echo '?>';?>

<!DOCTYPE html>
<html lang="en" xmlns:margin-top="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/MVC1/public/css/user.css" rel="stylesheet">
    <link href="/MVC1/public/css/loading.css" rel="stylesheet">
    <!-- 整體背景 -->
    <style type="text/css">
        h1 {
            text-align: center;
        }

        h4 {
            text-align: right;
            color: red;
        }

        table {
            left: 40%;
            position: absolute;
        }
    </style>
    <?php echo '<script'; ?>
 type="text/javascript" src="/MVC22/public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
            $("#form1").submit(function() {
                var countTest = 0;
                $("#nameError").html("");

                $("#passwordError").html("");
                $("#relpasswordError").html("");


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
                var relpassword = $("#relpassword").val();
                if (relpassword.length == 0 || relpassword.trim(relpassword.length) == 0) {
                    $("#relpasswordError").html("確認密碼不能為空");
                    countTest++;
                } else if (password != relpassword) {
                    $("#relpasswordError").html("確認密碼不正確,請從新輸入");
                    countTest++;
                }

                for (var x = 0; x < name.length; x++) {
                    for (var i = 0; i < test.length; i++) {
                        if (name[x] == test[i]) {
                            $("#nameError").html("帳號不可含有特殊符號($,%,#)或空格");
                            countTest++;
                        }
                    }
                }
                for (var x = 0; x < password.length; x++) {
                    for (var i = 0; i < test.length; i++) {
                        if (password[x] == test[i]) {
                            $("#relpasswordError").html("密碼不可含有特殊符號");
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
        alert("請包含英文字或數字");
      }
    });

    $(document).ready(function() {
      var result ="<?php echo $_smarty_tpl->tpl_vars['sqlerror']->value;?>
";
     if (result == 1) {
        alert("資料庫錯誤");
      }
    });
    $(document).ready(function() {
      var result ="<?php echo $_smarty_tpl->tpl_vars['doubleid']->value;?>
";
     if (result == 1) {
        alert("帳號重複");
      }
    });


    <?php echo '</script'; ?>
>
    <style type="text/css">

    </style>

    <style>
        body {
            margin: 0;
            background: transparent;
        }

        video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            background: url('polina.jpg') no-repeat;
            background-size: cover;
        }

        #polina {
            font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
            font-weight: 100;
            background: rgba(0, 0, 0, 0.3);
            color: white;
            padding: 2rem;
            width: 33%;
            margin: 2rem;
            float: right;
            font-size: 1.2rem;
        }

        #polina button {
            display: block;
            width: 80%;
            padding: .4rem;
            border: none;
            margin: 1rem auto;
            font-size: 1.3rem;
            background: rgba(255, 255, 255, .23);
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
            -webkit-transition: .3s background;
            transition: .3s background;
        }

        #polina button:hover {
            background: rgba(0, 0, 0, .5)
        }

        @media screen and (max-width: 500px) {
            #polina {
                width: 50%;
            }
        }

        .stopfade {
            opacity: .8
        }
    </style>
</head>

<body>

    <!-- 兩個輸入框 -->
    <div class="container">
        <div class="row row-centered">
            <div class="col-xs-6 col-md-4 col-center-block">
                <!-- <h1 class="textcolor  ld-bounce">welcome to register</h1> -->
                <h1 class="" style="color:gray">
                    Welcome register <br>歡迎來到註冊 </h1>

                <form action="/MVC22/EasyMVC/Home/register" method="post" id="form1">


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
                    <div class="edit input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon2">
                            <i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" name="relpassword" id="relpassword" placeholder="請再輸入一次密碼" />
                    </div>

                    <br />
                    <h1 class=" ld ld-bounce text-secondary bg-warning text-white" style="color:red;  font-size:30px;"></h1>
                    <h1 class="textcolor ld ld-bounce"><a href="/MVC22/EasyMVC/Home/login" style="background-color:#A5DEE4;font-size:20px;color:#E03C8A;">&nbsp;&nbsp;返回&nbsp;&nbsp;</a></h1>
                    <input type="submit" class="btn btn-success btn-block" name="submit" value="註冊"></input>
                    <input type="reset" class="btn btn-success btn-block" name="submit" value="重置"></input>

                </form>



            </div>
        </div>
    </div>
</body>

</html><?php }
}
