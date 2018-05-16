
<html>
<head>
<meta charset="utf-8">
<title>Categories</title>
</head>

<body>

	<table border="1px">
		<tr>
			<td width="183">
				THÊM CHỦNG LOẠI
			</td>
			<td width="352">
				CÁC CHỦNG LOẠI SẢN PHẨM
			</td>
		</tr>
		<tr>
			<td>
				<form action="../controller/action_add_cate.php" method="post">
					Nhập tên chủng loại:<br>
					<input type="text" name="name_cate">
					<br>
					<br>
					<input type="submit" name="btn_name_cate" value="OK">
				
				
				
			</td>
			<td width="369">
			<table width="372">
				<?php
				error_reporting(E_ALL ^ E_DEPRECATED);
					include_once('../../model/connect.php');
					$query_all_cate = mysql_query("SELECT * FROM categories");
					
					
					while($row = mysql_fetch_array($query_all_cate)){
						?>
						<tr>
							<td width="275"> ID: <?= $row['id_cate']?> | Tên: <?=$row['name_cate'] ?>  </td><td width="85">
							<button name="change_cate" type="submit" value="<?= $row['id_cate']?>">Sửa</button>
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