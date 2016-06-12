<?php
		$user = $_POST["username"];
		$psw = $_POST["password"];
		if($user == "" || $psw == "")
		{
			header("Location:../view/login.php?errinfo=请输入用户名和密码");
			exit;
		}
		else
		{
			mysql_connect("localhost","root","root");
			mysql_select_db("xiong");
			mysql_query("set names 'gbk'");
			$sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";
			$result = mysql_query($sql);
			$num = mysql_num_rows($result);
			if($num == 1)
			{
				/*$row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
				echo $row[0];//显示用户名*/
				Session_start(); //使用SESSION前必须调用该函数。
				$_SESSION['name']= $user ; //注册一个SESSION变量
				mysqli_free_result($result);
				header("Location:../view/main.php");
	exit;
				}
			else
			{
				header("Location:../view/login.php?errinfo=用户名或密码错误");
			}
		}


?>
