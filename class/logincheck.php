<?php
		$user = $_POST["username"];
		$psw = $_POST["password"];
		if($user == "" || $psw == "")
		{
			header("Location:../view/login.php?errinfo=�������û���������");
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
				/*$row = mysql_fetch_array($result);	//��������������ʽ������������
				echo $row[0];//��ʾ�û���*/
				Session_start(); //ʹ��SESSIONǰ������øú�����
				$_SESSION['name']= $user ; //ע��һ��SESSION����
				mysqli_free_result($result);
				header("Location:../view/main.php");
	exit;
				}
			else
			{
				header("Location:../view/login.php?errinfo=�û������������");
			}
		}


?>
