<html>
	<body>
	<table width="546" border="1px">
		<tr>
			
			<td width="230" align="center">
			
				<?= isset($sp1)? 'SỬA SẢN PHẨM:': 'THÊM SẢN PHẨM:' ?>
				<form enctype="multipart/form-data" action="../all_post.php" method="post" >
  				Tên sản phẩm:<br>
  				<input type="text" name="TenSP" value="<?= isset($sp1)? $sp1['TenSP']:''?>"><br>
  				Chi tiết sản phẩm:<br>
  				<input type="text" name="sanpham_detail" value="<?= isset($sp1)? $sp1['sanpham_detail']:''?>"><br>
  				Chủng loại:<br>
  				<!--Lấy chửng loại-->
  				<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					include_once('../../model/connect.php');
					$query_get_cate = mysql_query("SELECT * FROM categories");
					?><select name="select_cate"><?php
					while($row = mysql_fetch_array($query_get_cate)){
						?>
						<option value=<?=$row['id_cate']?>><?=$row['name_cate']?></option>
						<?php
					}
					?></select><?php
					?>
						
				
  				<!---->
  				<input type="text" hidden="true" name="ID_SP" value="<?= isset($sp1)? $sp1['ID_SP']:''?>" <?= isset($sp1)? 'readonly = "readonly"': '' ?>><br>
  				
  				Trạng thái:<br>
  				<input type="radio" name="Status" value="1" checked> Còn kinh doanh<br>
  				<?= isset($sp1)? '<input type="radio" name="Status0" value="0"> Ngừng kinh doanh<br>':''   ?>
  				<?=isset($sp1)? '<img src="../../img/'.$sp1['img'].'" style="width: 50"; height="50"/><br>':''?>
  				<div style="display: none">Tên ảnh cũ: <input type="text" name="img" value="<?= isset($sp1)? $sp1['img']:''?>" <?= isset($sp1)? 'readonly = "readonly"': '' ?>><br></div>
  				Upload ảnh:<br>
  				<input type="file" name="img"><br>
  				<?=isset($sp1)?'<input type="submit" value="Sửa" name="submitSua">':'<input type="submit" value="Submit" name="submit">' ?>
				</form>
			</t>
			
		</tr>
	</table>
	
</body>
</html>