<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 03:06:35
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC1/EasyMVC/views/Home/test.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d429b3b6166_03223526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05492660dea02a7122edb990d7fce18e1a94ca78' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC1/EasyMVC/views/Home/test.html',
      1 => 1600942000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d429b3b6166_03223526 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<script'; ?>
 src="/MVC/public/js/jquery.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<?php echo '<script'; ?>
>

    $(window).ready(function () {

        $("#abc").click(function () {
            $.ajax({

                type: "get",
                url: "/MVC/EasyMVC/Test/get123"

            }).then(function (e) {

                alert(e);
                $("#www").text(e);


            })
        })
})

<?php echo '</script'; ?>
>

<body>
    <?php echo $_smarty_tpl->tpl_vars['ars']->value;?>



    <button type="button" id="abc">fhhj</button>
    
    
    <p id="www"></p>

    
</body>

</html><?php }
}
