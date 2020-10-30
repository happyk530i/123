<?php
error_reporting(0);
?>

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
            font-size: 18px;
            padding: 5px 7px 10px 5px;
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



            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- nav bar結束 -->







    <div style="position:absolute;left:300px; top:120px; ">


        <div class="container">
            <div class="row">
                <?php
                error_reporting(0);
                ?>

                <div class="col-sm-4">
                    <ul id="latestNews" class="list-group " style="width:300px;">
                        <li class="list-group-item">First item<span class="pull-right"><button class="btn btn-info btn-xs editItem"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<button class="btn btn-danger btn-xs "><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span></li>

                    </ul>
                </div>


                <div style="position:absolute;left:297px; top:0px; " class="col-sm-4">
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
                    <h4>訂購紀錄</h4>
                </div>

                <div class="modal-body">



                    <div class="col-sm-4">
                        <ul id="latestNewss" class="list-group " style="width:1200px;">
                            <li class="list-group-item">First item<span class="pull-right"><button class="btn btn-info btn-xs editItem"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>&nbsp;<button class="btn btn-danger btn-xs "><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></span></li>

                        </ul>
                    </div>



                    <div class="form-group">
                        <label for="ymdTextBox">
                            <span class=""></span>

                        </label>
                        <input type="text" style="display: none">
                    </div>
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
                password: "Item 1"
            }];

            // var newsLists = [{
            //     name: "2017-05-01",
            //     password: "Item 1"
            // }];



            $.get("/MVC22/EasyMVC/Ｍember/getadmin", function(list) {
                console.log(list);



                newsList = JSON.parse(list);
                if (newsList ==1 ) {
                    alert("資料庫錯誤");
                }
                refreshNewsUI();

            })


            function refreshNewsUI() {
                $("#latestNews").empty();
                $("#latestNewss").empty();

                $.each(newsList, function(key, obj) {
                    let x = obj.stopadmin;
                    if (x === "0") {
                        x = "<span style='color:red;'>帳號暫停</span>";
                    } else {
                        x = "<span style='color:green;'>正常使用</span>";
                    }

                    var newsTexts = "狀態:" + " " + " " + x;
                    var $li = $("<pre></pre>").html(newsTexts).prepend("<h5></h5>").addClass(" ff list-group-item");
                    // $li.prepend("<h5></h5>");
                    $li.append('<span class="pull-right"><button style="position:absolute;left:300px; top:13px; " class="btn btn-warning btn-xss editItem"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></button>&nbsp;</span>');
                    $li.appendTo("#latestNewss");


                    var newsText = "帳號名稱:" + " " + " " + obj.username;
                    var $li = $("<pre></pre>").text(newsText).prepend("<h5></h5>").addClass(" ff list-group-item");
                    $li.append('<span class="pull-right"><button class="btn btn-success btn-xss deleteItem"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></button>&nbsp;</span>');
                    $li.appendTo("#latestNews");
                })


                //  變更狀態
                $(".editItem").click(function() {
                    var iIndex = $(this).closest("pre").index();
                    // alert(123);
                    // console.log(iIndex);
                    // console.log(newsList);
                    // console.log(newsList[iIndex]);
                    // console.log(newsList[iIndex].id);
                    $.ajax({
                            type: "post",
                            url: "/MVC22/EasyMVC/Ｍember/stopadmin",
                            data: {
                                list: newsList[iIndex]
                            }
                            // newsList[iIndex]
                            //  {e:JSON.stringify(newsList[iIndex])}
                        })
                        .then(function(list) {
                            console.log(JSON.parse(list));
                            newsList = JSON.parse(list);
                            if (newsList ==1 ) {
                                alert("錯誤");
                            }else{
                                alert("變更成功");

                            }



                            $.get("/MVC22/EasyMVC/Ｍember/getadmin", function(list) {

                                newsList = JSON.parse(list);

                                refreshNewsUI();
                            })
                        })
                    // .then(function(e) {
                    //     console.log(e);

                    //     $.get("/MVC22/EasyMVC/Ｍember/getadmin", function(e) {
                    //         newsList = JSON.parse(e);
                    //         refreshNewsUI();
                    //     })
                    // })
                })


                //導入至 訂購紀錄
                $(".deleteItem").click(function() {
                    var iIndex = $(this).closest("pre").index();
                    console.log(iIndex);
                    console.log(newsList);
                    console.log(newsList[iIndex]);
                    console.log(newsList[iIndex].id);
                    let haveid = newsList[iIndex].id;
                    let havename = newsList[iIndex].username;


                    $.then(window.location.href = "/MVC22/EasyMVC/Ｍember/colnebefore?id=" + haveid + "&name=" + havename)

                })


            }

        })
    </script>
    <script>



    </script>


</body>

</html>


<!-- window.location.href="/MVC22/EasyMVC/Doajaxs/doajax"; -->