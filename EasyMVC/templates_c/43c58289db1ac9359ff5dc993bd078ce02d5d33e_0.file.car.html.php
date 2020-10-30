<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 06:53:02
  from '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/car.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f96643e1f7db5_62693066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c58289db1ac9359ff5dc993bd078ce02d5d33e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/MVC22/EasyMVC/views/Home/car.html',
      1 => 1603691579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f96643e1f7db5_62693066 (Smarty_Internal_Template $_smarty_tpl) {
?><!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery mycart Plugin Example</title>
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
      
      $(document).ready(function() {
      var result ="<?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
";
      // console.log(result);
      if (result == 1) {
        alert("查詢不到再試一次");
      }
    });


  <?php echo '</script'; ?>
>

  <style>
  
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  #order{
  text-align:center;
  color:red;
  font-size:30px;
  }
  img{
      width:100px;
      height:100px;
  }
  #img{
    width:300px;
    height:300px;
  }
  h1{
      font-family:fantasy;
      background-color:#D7C4BB;
  }
  #ttt{
    display:none;
    position: absolute;
    left:75%;
    top:13%;
  }
  #ttt2{
    position: absolute;
    left:78%;
    top:16%;
  }
  #u{
    color:red;
  }
  </style>
<?php echo '<script'; ?>
>
      window.onload = function () {

      var x = document.getElementById("aaaa");
      var y = document.getElementById("ttt");

      function myclick(parameter1,parameter2) {
      parameter1.onmouseover = function () {
        parameter2.style.display="block";	
      }
        parameter1.onmouseout = function () {
          parameter2.style.display="none";
      }
      }    
      myclick(x,y);
      }
<?php echo '</script'; ?>
>

</head>

<body >

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
      <a class="navbar-brand">選冊網</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    

    <div class="text-primary" style="position:absolute;right:780px; top:8px;">
      <h4>

        <?php if ($_smarty_tpl->tpl_vars['abc']->value != null) {?>
        會員<?php echo $_smarty_tpl->tpl_vars['abc']->value;?>

        <?php } else { ?>
        遊客
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['stopadmin']->value == $_smarty_tpl->tpl_vars['one']->value && $_smarty_tpl->tpl_vars['stopadmin']->value != null) {?>
           <span class="text-danger" >已暫停使用!!!</span>  
        <?php } else { ?>
        您好
        <?php }?>

      </h4>
    </div>



      
      <ul class="nav navbar-nav navbar-right">
        <li id = "first"><a href="/MVC22/EasyMVC/Home/login/">購買會員登入</a></li>
        <li id = "two"><a href="/MVC22/EasyMVC/Home/logout/">登出</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">會員功能表 <span class="caret"></span></a>
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



  <div class="container" class="page-header">
  
    <h1>歡迎來到購物車&nbsp;&nbsp;&nbsp;Welcome toshopping cart 
      <div style="float: right; cursor: pointer;">
      
        <!-- <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span  class="badge badge-notify my-cart-badge">商品品項:<?php echo '<?=';?>
$_SESSION["o1"]<?php echo '?>';?>

        </span></a> -->
        <br>
<br><br>                                    
</br></span>
<br>
  </div>
      
    </h1>
  </div>
  
  <div id="carbon-block" align="center" style="margin:30px auto;"></div>
<div align="center" style="margin:30px auto;"><?php echo '<script'; ?>
 type="text/javascript">
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
<?php echo '</script'; ?>
>

  <div class="row container">
  <div class="col-md-12 text-center">

    
     
          <img src="data:image/jpg;base64,<?php echo $_smarty_tpl->tpl_vars['bigpicture']->value;?>
" id="img"> 
      
        <br>
        <strong>商品名稱:<?php echo $_smarty_tpl->tpl_vars['bigname']->value;?>
</strong>       <!--  名稱  -->
        <br>
        <strong>價格(CASH):<?php echo $_smarty_tpl->tpl_vars['bigprice']->value;?>
 元</strong>   <!--  價格  -->
        <br>
        <strong>剩餘數量[<?php echo $_smarty_tpl->tpl_vars['Quantity']->value;?>
]</strong>      <!-- 數量  -->
       <br>
       <strong><?php echo $_smarty_tpl->tpl_vars['bigcontent']->value;?>
</strong>              <!-- 詳細內容  -->
        <br>
       
       
        <form method="post" action="/MVC22/EasyMVC/Product/cookiecart">
          <br>
       你要購買 
    <input style="width: 50px;" id="amount" name="amount" class="num" type="number" value="0"
        max=<?php echo $_smarty_tpl->tpl_vars['Quantity']->value;?>
 min=0  >
    本
        <input type="submit"      name="c" value="購買" class=" first  btn btn-info"></input>
        <input type="hidden" id="values" name="values" value=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
>
        <input type="hidden" id="pages" name="pages" value=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
>
         </form>
       
        <strong class="ld ld-bounce" id="u">你可能會想購買的商品</strong>
      </div>

        
       
    
      <br>    
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcontent']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
      

      <div class="col-md-3 text-center">
      <a href="/MVC22/EasyMVC/Product/message/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&value=<?php echo $_smarty_tpl->tpl_vars['a']->value[0];?>
" >
      <img src="data:image/jpg;base64,<?php echo $_smarty_tpl->tpl_vars['a']->value[6];?>
" ></a>
      
    <br>
     <strong>名稱:<?php echo $_smarty_tpl->tpl_vars['a']->value[1];?>
</strong>
     <strong>價錢:<?php echo $_smarty_tpl->tpl_vars['a']->value[4];?>
</strong>
     <br>
    </div>

   
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     <tr >

      <div class="container" style="position:absolute;right:270px; top:1100px;">
      <td colspan="9" align="center" height="50" class="pagelist">


          <nav aria-label="Page navigation">
            <ul class="pagination">
              
              <?php if ($_smarty_tpl->tpl_vars['start']->value != $_smarty_tpl->tpl_vars['one']->value) {?>
              <li>
                  <a href="/MVC22/EasyMVC/Product/message/?page=<?php echo $_smarty_tpl->tpl_vars['one']->value;?>
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
              <li><a href="/MVC22/EasyMVC/Product/message/?page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
&value=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
              <?php }?>
               <?php }
}
?>

               <?php if ($_smarty_tpl->tpl_vars['pages']->value != $_smarty_tpl->tpl_vars['end']->value) {?>
              <li>
                  <a href="/MVC22/EasyMVC/Product/message/?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
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
    </div>

    </tr>

    </div>

<?php echo '<script'; ?>
>

function parseCookie() {
    var cookieObj = {};
    var cookieAry = document.cookie.split(';');
    var cookie;
    
    for (var i=0, l=cookieAry.length; i<l; ++i) {
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

$(document).on('click','.first',function(){
var $this = $(this);
console.log($this.prev().val());
let val = "<?php echo $_smarty_tpl->tpl_vars['Quantity']->value;?>
";

  
   var results = "<?php echo $_smarty_tpl->tpl_vars['stopadmin']->value;?>
";
    if(results == null)
    {
    alert("先註冊才能購買:::::至登入系統");
    
    }else if(results==="0")
    {
      if (confirm("此帳號無法購買任何商品") ){
    return false;
    }else{
    return false;
   }

    
    }

    else if(val==0)
    {
      if (confirm("已經沒有任何庫存") ){
         return false;
      }else{
        return false;
      }
    } else if($this.prev().val()==0)
    {

    if (confirm("請填入數量") ){
    return false;
    }else{
    return false;
   }
   }
    else{

       if (!confirm("確定購買?")){
         return false;
       }
    }
})


<?php echo '</script'; ?>
>



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
<?php echo '<script'; ?>
 type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

<?php echo '</script'; ?>
>


</html><?php }
}
