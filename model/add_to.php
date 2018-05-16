<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

//Phần tạo giỏ hàng
	session_start();

		if(isset($_GET['add'])){
			$id = $_GET['add'];
		if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
			$count = count($_SESSION['giohang']);
			$flag = false;
			for($i = 0; $i<$count;$i++){
				if($_SESSION['giohang'][$i]['id']==$id){
					
					//$_SESSION['giohang'][$i]['soluong'] += 1;
					$flag= true;
					break;
				}
				
			}
			if($flag==false){
				$_SESSION['giohang'][$count]['id'] = $id;
				//$_SESSION['giohang'][$count]['soluong'] = 1;
			}
		}else{
			$_SESSION['giohang'] = array();
			$id = $_GET['add'];
			$_SESSION['giohang'][0]['id'] = $id;
			//$_SESSION['giohang'][0]['soluong'] = 1;
			
		}
			if(isset($_GET['id'])){
				header('Location: product.php?id='.$_GET['id']);
			}
			else header('Location: index.php');
	}
	if(isset($_GET['del'])){
		session_destroy();
		if(isset($_GET['id'])){
				header('Location: product.php?id='.$_GET['id']);
			}
			else header('Location: index.php');
	}
//kết thúc tạo giỏ hàng

// xóa 1 item
	if(isset($_POST['btn_check_xoa'])){
		array_splice($_SESSION['giohang'], $_POST['btn_check_xoa'],1);
		header('Location: ../view/check.php');
	}
	
?>