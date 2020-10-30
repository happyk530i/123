<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 03:57:20
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/error.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f963b10872133_88538429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d786f0f6ab6b1773b92d72fdf74ad2c88ea5f4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/error.html',
      1 => 1603673910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f963b10872133_88538429 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
      var result = getCookieByName('ids');
      if (result) {
      $("#first").hide();
      }else{

      $("#two").hide();

      }
      });

   



  <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  
<?php echo '</script'; ?>
>


</head>

<body>
<!-- nav bar開始 -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >選冊網</a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=><a href="#"> <span class="sr-only">(current)</span></a></li>
         <li id="first"><a href="http://localhost/MVC22/EasyMVC/Admin/login">後台帳號登入</a></li>
          <li id = "two"><a href="/MVC22/EasyMVC/Home/logout/">登出</a></li>
        <li id="first" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">後台功能表<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/MVC22/EasyMVC/Doajaxs/doajax">商品編輯</a></li>
            <li><a href="/MVC22/EasyMVC/Product/addproduct">上傳商品</a></li>
            <li><a href="/MVC22/EasyMVC/Ｍember/forMember">會員管理&訂單</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/MVC22/EasyMVC/Admin/goajax">後台帳號新增＆管理</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>
      </ul>

      <div class="text-primary" style="position:absolute;right:730px; top:8px;">
        <h4>

         

        </h4>
      </div>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- nav bar結束 -->


          <h3 style="position:absolute;right:850px; top:60px;">
            <?php if ($_smarty_tpl->tpl_vars['messages']->value == 1) {?>
            錯誤
            <?php } else { ?>
            
            <?php }?>
          </h3>
          <br>
          <a style="position:absolute;right:850px; top:150px;"  id="myId"   >返回前頁  </a>
        </td>


<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src="js/jquery.mycart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
<?php echo '</script'; ?>
>


</body>

  
  
  
    </div>
    
   
  
  
  <?php echo '<script'; ?>
>
  
  
  try {
    fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
      return true;
    }).catch(function(e) {
      var carbonScript = document.createElement("script");
      carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
      carbonScript.id = "_carbonads_js";
      document.getElementById("carbon-block").appendChild(carbonScript);
    });
  } catch (error) {
    console.log(error);
  }
  <?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
>
   
      // $("#myId").attr("href","<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
");
        
      $(document).on('click',function(){
        $(".myId").attr("href",window.history.back());



})
      
      
      <?php echo '</script'; ?>
>



</html><?php }
}
