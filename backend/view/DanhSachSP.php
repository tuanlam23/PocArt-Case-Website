<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Danh sách sản phẩm</title>
</head>

<body>
<table width="716" border="1px">
	<tr>
		<td width="135">Tên sản phẩm</td>
		<td width="94">Mã sản phẩm (ID)</td>
		<td width="183">Ảnh</td>
		<td>Chủng loại</td>
		<td width="66">Trạng thái</td>
		<td>Hành động</td>
	</tr>
	
	<!--Cơ sở dữ liệu-->
	<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		include_once('../../model/connect.php');
	/////Lấy danh sách, phân trang

					$query_get_all = mysql_query("SELECT * FROM sanpham ORDER BY date_in DESC");
					$so_item  = mysql_num_rows($query_get_all);
			 		$so_trang = ceil($so_item/5);
			 		
					
			 		//Lấy 8 tin 1
			 		if(isset($_GET['page'])){
						$from = ($_GET['page']-1)*5;
			 			$query_get_8 = mysql_query("SELECT * FROM sanpham JOIN categories ON sanpham.id_cate = categories.id_cate LIMIT $from, 5");
			 			while($row = mysql_fetch_array($query_get_8)){
							?>
							<!---->
			
			<tr> 
			<td><?=$row['TenSP']?></td>
			<td><?=$row['ID_SP']?></td>
			<td><?=$row['img']==null? 'Không có ảnh':''?> <img src="../../img/<?= $row['img'] == null ? 'case_empty.png':$row['img'] ?>" style="width: 50"; height="50"/></td>
			<td><?=$row['name_cate']?></td>
			<td>
				<?php
					if($row['Status'] == 1) echo "Còn kinh doanh";
						else echo "Ngừng"
				?>
			</td>
			
			<td width="97">
			<form action="../../backend/controller/SP_BE_Controller.php" method="post">
				<input type="submit" value="Sửa" name="btnSua">
				<input type="submit" value="Xóa" name="btnXoa">
				<input type="hidden" value="<?=$row['ID_SP']?>" name="id_SP">
			</form>
			</tr>
			
							<!---->
							<?php
						}
					}else{
						$query_get_8 = mysql_query("SELECT * FROM sanpham JOIN categories ON sanpham.id_cate = categories.id_cate LIMIT 0, 5");
			 			while($row = mysql_fetch_array($query_get_8)){
							?>
								<!---->
													<tr> 
			<td><?=$row['TenSP']?></td>
			<td><?=$row['ID_SP']?></td>
			<td><?=$row['img']==null? 'Không có ảnh':''?> <img src="../../img/<?= $row['img'] == null ? 'case_empty.png':$row['img'] ?>" style="width: 50"; height="50"/></td>
			<td><?=$row['name_cate']?></td>
			<td>
				<?php
					if($row['Status'] == 1) echo "Còn kinh doanh";
						else echo "Ngừng"
				?>
			</td>
			
			<td width="97">
			<form action="../../backend/controller/SP_BE_Controller.php" method="post">
				<input type="submit" value="Sửa" name="btnSua">
				<input type="submit" value="Xóa" name="btnXoa">
				<input type="hidden" value="<?=$row['ID_SP']?>" name="id_SP">
			</form>
			</tr>		
							
							<!---->
							
							<?php
						}
					}
			 		
	
//	////danh sách
			if(isset($_GET['page'])){
		for($t = 1; $t<= $so_trang; $t++){
				if($t == $_GET['page']){
							echo("<b>Trang $t</b>");
						}else{
							echo"<a href='DanhSachSP.php?page=$t'>Trang $t</a><a>&nbsp|&nbsp</a>";
						}
						}}
		else{
			echo("<b>Trang 1 </b>");
			for($t = 2; $t<= $so_trang; $t++){
				echo"<a href='DanhSachSP.php?page=$t'>Trang $t</a><a>&nbsp|&nbsp</a>";
			}
		}
	
	
//		for($t = 1; $t<= $so_trang; $t++){
//						echo"<a href='DanhSachSP.php?page=$t'>Trang $t</a><a>&nbsp|&nbsp</a>";
//						
//					}
		
	///trang
	
	
	
	

	?>
	
	<!--kết thúc_Cơ sở dữ liệu-->
	
</table>

</body>
</html>