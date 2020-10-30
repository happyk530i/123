<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/jquery.toast.css">
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




    // $(document).ready(function() {
    //   var result = getCookieByName('UserNameS');
    //   if (result !== "admin") {
    //     $("#three").hide();
    //   }
    // });

    $(document).ready(function() {
      var result = getCookieByName('ids');
      if (result) {
        $("#logadmin").hide();
      }
    });
    $(document).ready(function() {
      var result = getCookieByName('ids');
      if (result) {
        $("#logadmins").hide();
      }
    });

    $(document).ready(function() {
      var result = getCookieByName('ids');
      if (!result) {
        $("#first ").hide();
        
      }
    });

    $(document).ready(function() {
      var result = getCookieByName('idss');
      if (result) {
        $("#lihid").hide();
        $("#logadmin").hide();
        
      }
       if (!result){

        $("#sec").hide();
       }



    });




  </script>

</head>

<body>
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
        
      <ul id="lastchange"  class="nav navbar-nav">
          <li class=><a href="#"> <span class="sr-only">(current)</span></a></li>
          <li id="logadmin"><a href="http://localhost/MVC22/EasyMVC/Admin/login">後台帳號登入</a></li>
          <li id="first" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">後台功能表 <span class="caret"></span></a>
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




        <ul id="logadmins" class="nav navbar-nav navbar-right">
          <li id="lihid"><a href="/MVC22/EasyMVC/Home/login/">購買會員登入</a></li>
          <li id="sec" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">一般會員功能表<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="/MVC22/EasyMVC/Product/colnebefore?page=1">查看購買歷史</a></li>
            <li><a href="/MVC22/EasyMVC/Product/message?page=1&">商品瀏覽</a></li>
          </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>