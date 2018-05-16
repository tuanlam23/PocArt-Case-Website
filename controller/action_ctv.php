<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../model/connect.php');
	
	if(isset($_POST['dang_ky'])){
		$sdt_ctv = $_POST['phone'];
		$ho_ten = $_POST['ho_ten'];
		$email = $_POST['email'];
		$fb = $_POST['fb'];
		$DOB = $_POST['DOB'];
		if($sdt_ctv == '' || $ho_ten== '' || $email== '' || $fb== '' || $DOB== ''){
			echo("Vui lòng nhập đầy đủ thông tin!");
		} else{
			$query_set_ctv = mysql_query("INSERT INTO `cong_tac_vien` (`sdt_ctv`, `ho_ten`, `email`, `fb`, `DOB`) VALUES ('$sdt_ctv', '$ho_ten', '$email', '$fb', '$DOB')");
			if($query_set_ctv == 1){
				echo("Đăng ký thành công!");
				header('refresh:3 ,url = ../index.php');
			} else{
				echo("Đăng ký thất bại. Vui lòng thử lại.");
			}
		}
	}



?>