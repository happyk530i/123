<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 08:49:06
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/forlooking.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f93ce627c9e00_00714805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a87d0efe4ecf37be06d197661c4f3d994b285d8f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/forlooking.html',
      1 => 1603520642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f93ce627c9e00_00714805 (Smarty_Internal_Template $_smarty_tpl) {
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
          var result = getCookieByName('idss');
          if (result) {
              $("#first").hide();
            }else
            {

            $("#two").hide();

          }
      });
      
      $(document).ready(function() {
          var result = getCookieByName('ids');
          if (result) {
              $("#first").hide();
          }
      });



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
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >選冊網</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li id = "first"><a href="/MVC22/EasyMVC/Home/login/">購買會員登入</a></li>
        <li id = "two"><a href="/MVC22/EasyMVC/Home/logout/">登出</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">會員功能表<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/MVC22/EasyMVC/Product/colnebefore?page=1">查看購買歷史</a></li>
            <li><a href="/MVC22/EasyMVC/Product/message?page=1&">商品瀏覽</a></li>
           
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- nav bar結束 -->

  <div class="page-header">
    <h1>購買<small>歷史</small></h1>

  




</div>
  <div class="panel panel-default">
    <!-- Default panel contents -->
    
    <!-- <div class="panel-body">
      <a href="http://localhost/MVC1/EasyMVC/Blog/messagedos" class="panel-heading" >自己的留言</a>
      <a href="/MVC1/EasyMVC/Home/tohomepage" class="panel-heading" >返回首頁</a>
    </div> -->

    <!-- Table -->
    <table class="table">
<tr>
<td class="text-success"><h5>名稱</h5></td>
<td class="text-success"><h5>購買數量</h5></td>
<td class="text-success"><h5>單價</h5></td>
<td class="text-success"><h5>總金額</h5></td>

</tr>



      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrs']->value, 'arr');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
      <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <!-- pages = <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
 -->
      <tr>
        <td colspan="9" align="center" height="50" class="pagelist">


            <nav aria-label="Page navigation">
              <ul class="pagination">
                
                <?php if ($_smarty_tpl->tpl_vars['start']->value != $_smarty_tpl->tpl_vars['one']->value) {?>
                <li>
                    <a href="?page=<?php echo $_smarty_tpl->tpl_vars['one']->value;?>
" aria-label="Next">
                    <span aria-hidden="true"> << </span>
                    </a>
                </li>
                <?php } else { ?>
                <li></li>
                <?php }?>

                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['foo']->value) {?>
                <li class="active";><a><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                <?php } else { ?>
                <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                <?php }?>
                 <?php }
}
?>

                 <?php if ($_smarty_tpl->tpl_vars['pages']->value != $_smarty_tpl->tpl_vars['end']->value) {?>
                <li>
                    <a href="?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
" aria-label="Next">
                    <span aria-hidden="true">...<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</span>
                    </a>
                </li>
                <?php } else { ?>
                <li></li>
                <?php }?>
              </ul>
            </nav>
        </td>


      </tr>
    </table>
  </div>

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

</html><?php }
}
