<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../../model/connect.php');
	include_once('SP_BE_Controller.php');
	if(isset($_POST['btnYes'])){
		$query = "DELETE FROM sanpham WHERE ID_SP = ".$_POST['id_SP'];
		$check_query = mysql_query($query);
		if(! $check_query )
   {
      die('Không thể xóa dữ liệu....\n ' . mysql_error());
   }
   
   echo "Xóa dữ liệu thành công\n";
	}

?>