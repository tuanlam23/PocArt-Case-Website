<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../../model/connect.php');
	if(isset($_POST['btn_search_SP'])){
		if($_POST['search_name'] ==''){
			include_once('../view/search.php');
			echo "Vui lòng nhập tên muốn tìm...";
		} else{
			$name = $_POST['search_name'];
			$query_search_name = "SELECT * FROM sanpham JOIN categories ON sanpham.id_cate = categories.id_cate WHERE TenSP like '%$name%'";
			$sql = mysql_query($query_search_name);
			if(!$sql){
				die("Không thể tìm kiếm. Error... ".mysql_error());
			} else{
				include_once('../view/DanhSachSP.php');
			}
		}
	}
?>