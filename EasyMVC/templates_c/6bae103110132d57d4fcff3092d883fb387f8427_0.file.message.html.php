<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 10:05:15
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC/EasyMVC/views/Home/message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c533b8dd6f9_78366295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bae103110132d57d4fcff3092d883fb387f8427' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC/EasyMVC/views/Home/message.html',
      1 => 1600934711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c533b8dd6f9_78366295 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="/MVC/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link id="order" rel="stylesheet" type="text/css" href="/MVC/public/css/mycss.css">
  <link href="/MVC/public/css/resume.min.css" rel="stylesheet">
  




</head>


</div>
<body id="page-top">

<div id="o1">
    
  <div id="carouselExampleControls" class="carousel slide" >
          <div class="carousel-inner" id="education">
            <div class="carousel-item active">
              <section class="resume-section p-3 p-lg-5 d-flex align-items-center" >
                <div class="w-100">
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <h3 class="mb-0">親愛的用戶：<?php echo $_smarty_tpl->tpl_vars['usern']->value;?>
</h3>
                    <div class="resume-content">
                      <h3 class="mb-0">大家的留言</h3>
                      <a class="mb-0" href="/MVC/EasyMVC/Blog/messagedo">自己的留言</a>
                     <div class="subheading mb-3">
                      <div id="controller1" class="row" id="number-area">

                      
                      


<table border="1">

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
</table>
             


                           
                             
                            </div>


                      </div>
                    </div>

                </div>
              </section>
            </div>



</div>

  <!-- Bootstrap core JavaScript -->
  
  <?php echo '<script'; ?>
 src="/MVC/public/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/MVC/public/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <!-- Plugin JavaScript -->
  
  
  <?php echo '<script'; ?>
 src="/MVC/public/vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>
  <!-- Custom scripts for this template -->
  <?php echo '<script'; ?>
 src="/MVC/public/js/resume.min.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
