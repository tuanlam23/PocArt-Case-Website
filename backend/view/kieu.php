<html>
	<body>
		<table width="578" border="1px">
			<tr>
				<td width="60">
					THÊM KIỂU
				</td>
				<td width="336">
					DANH SÁCH KIỂU VÀ GIÁ
				</td>
			</tr>
			
			
			<tr>
			<td>
				<form action="../controller/action_add_cate.php" method="post">
					Nhập tên kiểu:<br>
					<input type="text" name="ten_kieu">
					<br>
					Nhập giá của kiểu:<br>
					<input type="text" name="gia_kieu"><br>
					<br>
					<input type="submit" name="btn_ten_kieu" value="OK">
				
				
				
			</td>
			<td width="160">
			<table>
				<?php
				error_reporting(E_ALL ^ E_DEPRECATED);
					include_once('../../model/connect.php');
					$query_all_kieu = mysql_query("SELECT * FROM kieu");
					
					
					while($row = mysql_fetch_array($query_all_kieu)){
						?>
						<tr>
							<td>
							<table>
								<tr>
									<td>
										 ID: <?= $row['id_kieu']?> | Tên: <?=$row['ten_kieu'] ?> | Giá: <?=$row['gia_kieu']?>
									</td>
								</tr>
							</table>
							 
							   </td><td>
							<button name="change_kieu" type="submit" value="<?= $row['id_kieu']?>">Sửa</button>
						</td>
						</tr>
						<?php
					}
					?>
			</table>
			</td></form>
		</tr>
		</table>
</body>
</html>