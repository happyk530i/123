<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lab</title>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
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
            } else {

                $("#two").hide();

            }
        });
    </script>


    <style>
        .modal-header,
        h4,


        .modal-footer {
            background-color: #f9f9f9;
        }

        .btn-xss,
        .btn-group-xs>.btn {
            margin-right: 10px;
            padding: 5px 5px 5px 5px;
            font-size: 10px;
            line-height: 1;
            border-radius: 3px
        }

        .btn-xsss,
        .btn-group-xs>.btn {
            margin-right: 3px;
            padding: 5px 5px 5px 5px;
            font-size: 10px;
            line-height: 1;
            border-radius: 3px
        }

        .ff {
            font-size: 17px;
            padding: 8px 7px 10px 5px;
            margin-right: 3px;
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

                <div class="text-primary" style="position:absolute;right:650px; top:8px;">
                    <h4 id="getnames">
                        後台會員 您好
                    </h4>
                </div>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/MVC22/EasyMVC/Home/login/">購買會員登入</a></li>
                    <li id="sec" class="dropdown">
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


    <h1 style="position:absolute;left:50px; top:50px;">商品<small>修改</small></h1>




    <div style="position:absolute;left:30px; top:120px; ">


        <div class="container">
            <div class="row">
                <?php
                error_reporting(0);
                ?>

                <div class="col-sm-4">

                    <ul id="latestNews" class="list-group" style="width:900px;  font-size:10px;">
                        <li class="list-group-item">First item<span class="pull-right"><button class="btn btn-info btn-xs editItem"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<button class="btn btn-danger btn-xs "><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span></li>
                        </h4>

                </div>

                <div style="position:absolute;left:330px; top:0px; " class="col-sm-4">
                    <ul id="latestNewss" class="list-group " style="width:350px;">
                        <li class="list-group-item">First item<span class="pull-right"><button class="btn btn-info btn-xs editItem"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<button class="btn btn-danger btn-xs "><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span></li>

                    </ul>
                </div>


            </div> <!-- end of row -->

        </div> <!-- end of container -->
    </div>




    <!-- 對話盒 -->
    <div id="newsModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>修改</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="titleTextBox">
                                <span class="glyphicon glyphicon-bullhorn"></span>
                                名稱
                            </label>
                            <input type="text" id="titleTextBox" class="form-control" placeholder="請輸入名稱" />

                        </div>

                        <div class="form-group">
                            <label for="titleTextBox">
                                <span class="glyphicon glyphicon-bullhorn"></span>
                                內容
                            </label>
                            <input type="text" id="oneTextBox" class="form-control" placeholder="請輸入內容" />
                            <div id="passwordError" style="display:inline;color:red;background-color:white;"></div>
                        </div>

                        <div class="form-group">
                            <label for="titleTextBox">
                                <span class="glyphicon glyphicon-bullhorn"></span>
                                單價
                            </label>
                            <input type="number" id="twoTextBox" class="form-control" placeholder="請輸入單價" min=1 required="required" />
                            <div id="priceError" style="display:inline;color:red;background-color:white;"></div>
                        </div>

                        <div class="form-group">
                            <label for="titleTextBox">
                                <span class="glyphicon glyphicon-bullhorn"></span>
                                數量
                            </label>
                            <input type="number" id="threeTextBox" class="form-control" placeholder="請輸入數量" min=0 required="required" />
                        </div>
                        <div id="quantityError" style="display:inline;color:red;background-color:white;"></div>
                        <div class="form-group">
                            <label for="ymdTextBox">
                                <span class=""></span>

                            </label>
                            <input type="text" style="display: none">
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <div class="pull-right">
                        <button type="button" id="okButton" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span> 確定
                        </button>
                        <button type="button" id="cancelButton" class="btn btn-default" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> 取消
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /對話盒 -->


    <!-- ========== UI 與 JavaScript 分隔線 ========== -->


    <script src="/MVC22/public/js/jquery.js"></script>
    <script src="/MVC22/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/MVC22/public/js/jquery.toast.js"></script>

    <script>
        $(function() {

            var newsList = [{
                    name: "2017-05-01",
                    content: "2017-05-01",
                    price: "2017-05-01",
                    Quantity: "2017-05-01"
                }, {
                    name: "2017-05-01",
                    content: "2017-05-01",
                    price: "2017-05-01",
                    Quantity: "2017-05-01"
                }

            ];
            $.get("/MVC22/EasyMVC/Doajaxs/getajax", function(list) {
                console.log(list);
                if (list ===1 ) {
                    alert("資料庫錯誤");
                }
                newsList = JSON.parse(list);
                refreshNewsUI();

            })

            function refreshNewsUI() {
                $("#latestNews").empty();
                $("#latestNewss").empty();

                $.each(newsList, function(key, obj) {



                    var newsText = "冊名:" + " " + obj.name + " " + " " + "內容:" + " " + obj.content + " " + " " + "單價:" + " " + obj.price + " " + " " + "數量:" + " " + obj.Quantity;
                    var $li = $("<pre ></pre>").text(newsText).addClass(" ff  list-group-item");
                    $li.append('<span class="pull-right"><button class="btn btn-info btn-xss editItem"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<button class="btn btn-danger btn-xss deleteItem"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span>');
                    $li.appendTo("#latestNews");




                })





                //修改 先調取資料 尚未發送
                $(".editItem").click(function() {
                    // var iIndex = $(this).parent().parent().index();
                    var iIndex = $(this).closest("pre").index();
                    currentIndex = iIndex;
                    $("#titleTextBox").val(newsList[iIndex].name);
                    $("#oneTextBox").val(newsList[iIndex].content);
                    $("#twoTextBox").val(newsList[iIndex].price);
                    $("#threeTextBox").val(newsList[iIndex].Quantity);
                    $("#newsModal").modal({
                        backdrop: "static"
                    });
                })
                //刪除
                $(".deleteItem").click(function() {

                    var iIndex = $(this).closest("pre").index();
                    console.log(iIndex);
                    console.log(newsList);
                    console.log(newsList[iIndex]);

                    if (!confirm("確定刪除？")) {
                        return false;
                    }

                    $.ajax({
                            type: "post",
                            url: "/MVC22/EasyMVC/Doajaxs/delajax",
                            data: {
                                list: newsList[iIndex]
                            }
                            // newsList[iIndex]
                            //  {e:JSON.stringify(newsList[iIndex])}
                        })
                        .then(function(list) {
                            console.log(JSON.parse(list));
                            newsList = JSON.parse(list);
                            if (newsList == 1) {
                                alert("錯誤");
                            } else {
                                alert("完成");
                                console.log(312);
                            }

                            $.get("/MVC22/EasyMVC/Doajaxs/getajax", function(list) {

                                newsList = JSON.parse(list);
                                refreshNewsUI();
                            })
                        })
                })

            } // refreshNewsUI

            $("#okButton").click(function() {
                $("#priceError").html("");
                var price = $("#twoTextBox").val();
                if (price <= 0) {
                    $("#priceError").html("價格請大於0");
                }

                $("#quantityError").html("");
                var quantity = $("#threeTextBox").val();
                if (quantity < 0) {
                    $("#quantityError").html("數量不能為負數");
                }

                let tTBox = $("#twoTextBox").val();
                let thBox = $("#threeTextBox").val();


                if ($("#titleTextBox").val() && $("#oneTextBox").val() && tTBox > 0 && thBox >= 0) {
                    newsList[currentIndex].name = $("#titleTextBox").val();
                    newsList[currentIndex].content = $("#oneTextBox").val();
                    newsList[currentIndex].price = $("#twoTextBox").val();
                    newsList[currentIndex].Quantity = $("#threeTextBox").val();
                    refreshNewsUI();
                    $("#newsModal").modal("hide");

                    $.ajax({
                            type: "POST",
                            url: "/MVC22/EasyMVC/Doajaxs/putajax",
                            data: {
                                list: JSON.stringify(newsList[currentIndex])
                            }

                        })
                        .then(function(list) {

                            newsList = JSON.parse(list);

                            if (newsList == "操作失敗稍後再試") {
                                alert(newsList);

                            } else {
                                alert("修改完成");
                                console.log(312);
                            }

                            $.get("/MVC22/EasyMVC/Doajaxs/getajax", function(list) {

                                newsList = JSON.parse(list);
                                refreshNewsUI();
                            })



                        })
                } else {


                }
            })

            $("#cancelButton").click(function() {

                $("#quantityError").html("");
                $("#priceError").html("");
            })




        }) // end of init.
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
                    var newsText = obj.name + "你好";
                    var $li = $("<h4></h4>").html(newsText);
                    // $li.append('<span class="pull-right"><button class="btn btn-info btn-xss editItem"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<button class="btn btn-danger btn-xss deleteItem"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span>');
                    $li.appendTo("#getnames");

                })

            }
        })
    </script>

</body>

</html>