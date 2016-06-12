<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="zh"><![endif]-->
<!--[if gt IE 7]><!-->
<html lang="zh">
<!--<![endif]-->
<head>
    <title>熊出没啦</title>
    <meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="xiongchumo,timeline">
	<meta http-equiv="description" content="个人主页">
	<link href="../css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	#login{
	width:250px;
	height:200px;
	padding-top:20px;
	padding-left:20px;
	background-color:#e0ffff;
}
/* ----------输入框---------- */
.input_1{
	width:165px;
  	height:32px; 
   	padding-left:8px;
   	padding-top:4px;
   	padding-bottom:4px;
   	border:solid 1px #ccc;
    -webkit-border-radius:5px; 
    -moz-border-radius:5px; 
    -khtml-border-radius:5px; 
    border-radius:5px;color:#666; 
    font:normal 14px Arial, Helvetica, sans-serif;
    }
    .input_1:hover,
    .input_1:active{border:solid 1px #5ca32d;}
    .input_1_error{width:165px; height:31px; padding:8px 5px; border:solid 1px #f00; -webkit-border-radius:5px; -moz-border-radius:5px; -khtml-border-radius:5px; border-radius:5px; background:#ffb9b9; color:#f00; font-size:14px; line-height:31px;}

.login{
	margin-left:15px;
	
}
.login_input{
	width:100px;
	height:35px;
	font-size:14px;
}
	
</style>
</head>
<body>
<div class="content" align="center">
	<form action="../class/logincheck.php" method="post">
	 <input class="input_1" type='text' name='username'  size=20  placeholder="用户名" tabindex="1" ><br/><br/>
	 <input class="input_1"  type='password' name='password' size=20  placeholder="密码" tabindex="2" /><br/><br/>
	 <span class='login'><input class="login_input" type='submit' size=25 value='登录' /></span>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="reg.php">注册</a>
	</form>

	  <br>
	  	 <span style="color: red;">
	  	 <?php 
	  	 	@$erro = $_GET["errinfo"];
	  	 	if($erro!=null){
		  		echo $erro; 
	  	 	}
	  	 ?>
	  	 </span>	  
	   
</div>
<div class="footer">
  <div class="footer-content clearfix">
    <div align="center" style="padding-top:10px;"> Power by 魏观武 </div>
  </div>
</div>
	
</body>
</html>


