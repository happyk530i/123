<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 10:17:01
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC/EasyMVC/views/Home/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c55fdf27096_00806872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b67495f1d4ca4418e25c10ee0426a75b6b75888' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC/EasyMVC/views/Home/index.html',
      1 => 1600931046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c55fdf27096_00806872 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab</title>
    <html> <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/MVC/public/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .modal-header, h4, .close {
            background-color: #5cb85c;
            color: white;
            text-align: center;
            font-size: 2em;
        }

        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="row">

        <div class="col-sm-4">
            <h2>最新消息<span class="pull-right"><button id="newItem" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></span></h2>
            <ul id="latestNews" class="list-group">
                
                <li class="list-group-item">First item
                    <span class="pull-right">
                        <button class="btn btn-info btn-xs editItem">
                           <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </button>&nbsp;
                    <button class="btn btn-danger btn-xs deleteItem">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </span>
            </li>  
            <li class="list-group-item">Second item
                <span class="pull-right">
                    <button class="btn btn-info btn-xs editItem">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>&nbsp;
                <button class="btn btn-danger btn-xs deleteItem">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </span>
        </li>
        <li class="list-group-item">Third item
            <span class="pull-right">
                <button class="btn btn-info btn-xs editItem">
                   <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>&nbsp;
            <button class="btn btn-danger btn-xs deleteItem">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
        </span>
    </li>
       </ul>
        </div>

        <div class="col-sm-4">
            &nbsp;
        </div>

        <div class="col-sm-4">
            &nbsp;
        </div>

    </div>  <!-- end of row -->

</div> <!-- end of container -->



<!-- 對話盒 -->
<div id="newsModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>新增/修改</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="titleTextBox">
                            <span class="glyphicon glyphicon-bullhorn"></span>
                            標題
                        </label>
                        <input type="text"
                               id="titleTextBox"
                               class="form-control"
                               placeholder="請輸入標題" />
                    </div>

                    <div class="form-group">
                        <label for="ymdTextBox">
                            <span class="glyphicon glyphicon-time"></span>
                            日期
                        </label>
                        <input type="text"
                               id="ymdTextBox"
                               class="form-control"
                               placeholder="yyyy-mm-dd 例如: 2017-05-20">
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                    <div class="pull-right">
                        <button type="button"
                                id="okButton"
                                class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span> 確定
                        </button>
                        <button type="button"
                                id="cancelButton"
                                class="btn btn-default"
                                data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> 取消
                        </button>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- /對話盒 -->


<!-- ========== UI 與 JavaScript 分隔線 ========== -->


<?php echo '<script'; ?>
 src="/MVC/public/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/MVC/public/js/bootstrap.min.js"><?php echo '</script'; ?>
>








<?php echo '<script'; ?>
>

$(function () {

    var newsList =


    
        [
            { text: "2017-05-01", time: "Item 1" },
            { text: "2017-05-01", time: "Item 2" },
            { text: "2017-05-02", time: "Item 3" },
            { text: "2017-05-03", time: "Item 4" },
            { text: "2017-05-04", time: "Item 5" }
        ];


            
    $.get("/MVC/EasyMVC/Blog/messagedo", function (e) {
        
        newsList = JSON.parse(e);
        refreshNewsUI();
        
    })

    function refreshNewsUI() {
        $("#latestNews").empty();

        $.each(newsList, function (key, obj) {
            var newsText = obj.title + " [" + obj.time + "]";
            var $li = $("<li></li>")
                        .text(newsText)
                        .addClass("list-group-item");
            $li.append('<span class="pull-right"><button class="btn btn-info btn-xs editItem"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<button class="btn btn-danger btn-xs deleteItem"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span>');
            $li.appendTo("#latestNews");
        })
    
        $(".editItem").click(function () {
            // var iIndex = $(this).parent().parent().index();
            var iIndex = $(this).closest("li").index();
            currentIndex = iIndex;
            $("#titleTextBox").val(newsList[iIndex].title);
            $("#ymdTextBox").val(newsList[iIndex].ymd);
            $("#newsModal").modal( { backdrop: "static" } );
        })

        $(".deleteItem").click(function () {
            var iIndex = $(this).closest("li").index();
            $.ajax({
                type: "delete",
                url: "/home/news",
                data: newsList[iIndex]
            })
            .then(function (e) {
                
                $.get("/home/news", function (e) {
                    newsList = JSON.parse(e);
                    refreshNewsUI();
                })
            })
        })

    }  // refreshNewsUI

    var currentIndex = -1;
    
    $("#okButton").click(function () {
        if (currentIndex >= 0) { // edit
            newsList[currentIndex].title = $("#titleTextBox").val();
            newsList[currentIndex].ymd = $("#ymdTextBox").val();
            refreshNewsUI();
            $("#newsModal").modal("hide");
            
            $.ajax({
                type: "put",
                url: "/home/news",
                data: newsList[currentIndex]
            })
            .then(function (e) {
               
            })
        }
        else {  // new
            var newItem = {
                title: $("#titleTextBox").val(),
                ymd: $("#ymdTextBox").val()
            };
            $.ajax({
                type: "post",
                url: "/home/news",
                data: newItem
            })
            .then(function (e) {
                $.get("/home/news", function (e) {
                    newsList = JSON.parse(e);
                    refreshNewsUI();
                })
            })
            $("#newsModal").modal("hide");
        }
        
        
    })

    $("#newItem").click(function () {
        currentIndex = -1;
        $("#titleTextBox").val("");
        $("#ymdTextBox").val("");
        $("#newsModal").modal( { backdrop: "static" } );
    })


})  // end of init.

<?php echo '</script'; ?>
>

</body>
</html><?php }
}
