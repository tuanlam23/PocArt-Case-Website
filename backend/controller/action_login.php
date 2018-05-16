<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../../model/connect.php');
	if(isset($_POST['btn_login'])){
		$user = $_POST['user_login'];
		$password = md5($_POST['password_login']);
		$query_get_user ="SELECT * FROM quantri WHERE ten_dang_nhap ='$user'";
		$sql_get_user = mysqli_query($conn,$query_get_user);
		while($row = mysqli_fetch_array($sql_get_user)){
			$password_in = $row['mat_khau'];
		}
		if(isset($password_in)){
			if($password == $password_in){
				session_start();
				$_SESSION["ss_user"] = "$user";
				echo("Đăng nhập thành công!");
				header('Location: ../index.php');
				
			}
			else{
				echo("Đăng nhập thất bại!<br>Sai mật khẩu/ tên đăng nhập...");
			}
		}
		else{
			echo("Tên đăng nhập không tồn tại...");
		}

	}
?>