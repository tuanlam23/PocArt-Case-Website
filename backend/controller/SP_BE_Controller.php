<html>
<body>
<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../../model/connect.php');
	include_once('../../model/SanPham.php');
	

	if(isset($_POST['btnSua'])){
		$sp = new SanPham();
		$sp1 = $sp :: getSanPham($_POST['id_SP']);
		include_once('../view/QLSanPham.php');
		
		
	} else if(isset($_POST['btnXoa'])){
		
		echo "XÓA SẢN PHẨM<br>";
		$query_xoa = mysql_query('SELECT * FROM sanpham WHERE ID_SP = '.$_POST['id_SP']);
		while($sp = mysql_fetch_array($query_xoa)){
			?>
			Tên sản phẩm: 
			<?=$sp['TenSP']?>
			<br>
			Mã số sản phẩm: 
			<?=$sp['ID_SP']?>
			<br>
			
			Ảnh:<br> <img src = "../../img/<?= $sp['img']?>" style="width: 70px"/>
			<br>
			<form action="action_xoa.php" method="post">
				<input type="submit" value="Đồng ý" name="btnYes">
				<input type="hidden" value="<?=$sp['ID_SP']?>" name="id_SP">
				<a href="../view/DanhSachSP.php" target="iframe">Hủy bỏ</a>
			</form>
			<?php
			
		}
		
	}
?>
</body>
</html>