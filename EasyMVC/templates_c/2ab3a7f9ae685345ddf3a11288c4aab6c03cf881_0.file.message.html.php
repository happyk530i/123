<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 11:54:23
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC1/EasyMVC/views/Home/message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73044fd7c8b4_11290900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ab3a7f9ae685345ddf3a11288c4aab6c03cf881' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC1/EasyMVC/views/Home/message.html',
      1 => 1601373259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73044fd7c8b4_11290900 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>

<body>


  <div class="page-header">
    <h1>會員<small>留言板功能</small></h1>

    <div  id="ordertest1" style="position:absolute;right:50px; top:15px;" >
    <?php if ($_smarty_tpl->tpl_vars['abc']->value == $_smarty_tpl->tpl_vars['abcd']->value) {?>
    <span id="login2">Hello!<?php echo $_smarty_tpl->tpl_vars['abcd']->value;?>

      <a  id="login1" href="/MVC1/EasyMVC/Home/login/" >登入/註冊</a>
    <?php } else { ?>
    <a  id="login1" href="/MVC1/EasyMVC/Home/logout/" >登出</a>
    <span id="login2">歡迎您使用者:<?php echo $_smarty_tpl->tpl_vars['abc']->value;?>

    <?php }?>
</div>


</div>
  <div class="panel panel-default">
    <!-- Default panel contents -->
    
    <div class="panel-body">
      <a href="http://localhost/MVC1/EasyMVC/Blog/messagedos" class="panel-heading" >自己的留言</a>
      <a href="/MVC1/EasyMVC/Home/tohomepage" class="panel-heading" >返回首頁</a>
    </div>

    <!-- Table -->
    <table class="table">
<tr>
<td class="text-success"><h5>名字</h5></td>
<td class="text-success"><h5>文章內容</h5></td>

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




</body>

</html><?php }
}
