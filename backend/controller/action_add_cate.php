<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../../model/connect.php');
	if(isset($_POST['btn_name_cate'])){
		$name_cate = $_POST['name_cate'];
		$query_count_cate = mysql_query("SELECT id_cate FROM categories");
		$count = mysql_num_rows($query_count_cate);
		
		$sql = "INSERT INTO categories(name_cate, id_cate) VALUES ('$name_cate', '$count')";
		$query_add_cate = mysql_query($sql);
		if(! $query_add_cate )
   {
      die('Không thể nhập dữ liệu: ' . mysql_error());
   }
   
   echo "Nhập dữ liệu thành công\n";
	}

	if(isset($_POST['change_cate'])){
		$query_get_name_cate = mysql_query("SELECT * FROM categories WHERE id_cate =".$_POST['change_cate']);
		while($item = mysql_fetch_array($query_get_name_cate)){
			$id_stock = $item['id_cate'];
			$name_stock = $item['name_cate'];
		}
		?>
			<html>
				<body>
					Sửa ID: <?= $id_stock?><br> Tên: <?= $name_stock?>
					<br>
					Tên muốn sửa:<br>
					<form action="action_add_cate.php" method="post">
						<input type="text" name="name_sua"><br>
						<input type="submit" name="sub_sua" value="OK">
						<input type="hidden" name="id_cate_tmp" value="<?= $id_stock?>">
					</form>
				</body>
			</html>
		<?php
	}
	if(isset($_POST['sub_sua'])){
		$name = $_POST['name_sua'];
		$id = $_POST['id_cate_tmp'];
		$query_change_name_cate = "UPDATE categories SET name_cate = '$name' WHERE id_cate = '$id'";
		$sql = mysql_query($query_change_name_cate);
		if($sql ){
			echo "Sửa dữ liệu thành công";
		} else {
			echo "Sửa thất bại";
		}}



// phần thêm kiểu
if(isset($_POST['btn_ten_kieu'])){
		$ten_kieu = $_POST['ten_kieu'];
		$gia_kieu = $_POST['gia_kieu'];
		$query_count_kieu= mysql_query("SELECT id_kieu FROM kieu");
		$count = mysql_num_rows($query_count_kieu);
		
		$sql = "INSERT INTO kieu(ten_kieu, id_kieu, gia_kieu) VALUES ('$ten_kieu', '$count','$gia_kieu')";
		$query_add_kieu = mysql_query($sql);
		if(! $query_add_kieu )
   {
      die('Không thể nhập dữ liệu: ' . mysql_error());
   }
   
   echo "Nhập dữ liệu thành công\n";
	}

//phần sửa kiểu
if(isset($_POST['change_kieu'])){
		$query_get_ten_kieu = mysql_query("SELECT * FROM kieu WHERE id_kieu =".$_POST['change_kieu']);
		while($item = mysql_fetch_array($query_get_ten_kieu)){
			$id_stock = $item['id_kieu'];
			$name_stock = $item['ten_kieu'];
			$gia_stock = $item['gia_kieu'];
		}
		?>
			<html>
				<body>
					Sửa ID: <?= $id_stock?><br> Tên: <?= $name_stock?> Giá: <?=$gia_stock?>
					<br>
					Tên muốn sửa:<br>
					<form action="action_add_cate.php" method="post">
						<input type="text" name="name_sua"><br>
						Giá muốn sửa:<br>
						<input type="text" name="gia_sua"><br>
						<input type="submit" name="sub_sua_kieu" value="OK">
						<input type="hidden" name="id_cate_tmp" value="<?= $id_stock?>">
					</form>
				</body>
			</html>
		<?php
	}
	if(isset($_POST['sub_sua_kieu'])){
		$name = $_POST['name_sua'];
		$id = $_POST['id_cate_tmp'];
		$gia = $_POST['gia_sua'];
		$query_change_ten_kieu = "UPDATE kieu SET ten_kieu = '$name' WHERE id_kieu = '$id'";
		$query_change_gia = "UPDATE kieu SET ten_kieu = '$gia' WHERE id_kieu = '$id'";
		$sql1 = mysql_query($query_change_ten_kieu);
		$sql2 = mysql_query($query_change_gia);
		if($sql1 && $sql2){
			echo "Sửa dữ liệu thành công";
		} else {
			echo "Sửa thất bại";
		}}


?>