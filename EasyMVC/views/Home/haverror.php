<!DOCTYPE html>
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
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
      }else{

      $("#two").hide();

      }
      });


  </script>
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

          後台會員 {{$abc}} 您好

        </h4>
      </div>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- nav bar結束 -->

  <div class="page-header">
    

    <!-- <div  id="ordertest1" style="position:absolute;right:50px; top:15px;" >
    {{if $abc eq $abcd}}
    <span id="login2">Hello!{{$abcd}}
      <a  id="login1" href="/MVC1/EasyMVC/Home/login/" >登入/註冊</a>
    {{else}}
    <a  id="login1" href="/MVC1/EasyMVC/Home/logout/" >登出</a>
    <span id="login2">歡迎您使用者:{{$abc}}
    {{/if}}
    </div> -->




</div>
  <div class="panel panel-default">
    <!-- Default panel contents -->
    
    <!-- <div class="panel-body">
      <a href="http://localhost/MVC1/EasyMVC/Blog/messagedos" class="panel-heading" >自己的留言</a>
      <a href="/MVC1/EasyMVC/Home/tohomepage" class="panel-heading" >返回首頁</a>
    </div> -->

    <!-- Table -->
    <table class="table">


      {{foreach $arrs as $arr}}
      <tr>
        {{foreach $arr as $value}}
        <td>{{$value}}</td>
        {{/foreach}}
      </tr>
      {{/foreach}}

      <!-- pages = {{$pages}} -->
      <tr>
        <td colspan="9" align="center" height="50" class="pagelist">


          <h3>資料連線錯誤</h3>
        </td>


      </tr>
    </table>
  </div>

</script>

<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type='text/javascript' src="js/jquery.mycart.js"></script>
<script type="text/javascript">

</script>


</body>

</html>