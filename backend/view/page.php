<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../../model/connect.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Page</title>
</head>

<body>
	<table border="1px">
		<tr>
			<td width="200">
				Ảnh Logo:
			</td>
			<td width="200">
				Ảnh banner trái:
			</td>
			<td width="200">
				Ảnh banner phải:
			</td>
		</tr>
		<tr>
			<td>
				<?php
					$query_logo = mysql_query("SELECT * FROM banner WHERE ten_banner = 'logo'");
					while($row = mysql_fetch_array($query_logo)){
						echo('<img src="../../img/'.$row['img_banner'].'" style="width: 100"/>');
					}
					
				?>
				
				<br>
				Upload ảnh:<br>
 				<form action="../all_post.php" method="post" enctype="multipart/form-data">
 					<input type="file" name="img_logo"><br><br>
 					<button type="submit" name="btn_logo">Thay ảnh</button>
 				
  				
			</td>
			<td>
				<?php
					$query_logo = mysql_query("SELECT * FROM banner WHERE ten_banner = 'left_banner'");
					while($row = mysql_fetch_array($query_logo)){
						echo('<img src="../../img/'.$row['img_banner'].'" style="width: 100"/>');
					}
				?>
				<br>
				Upload ảnh:<br>
 				
 					<input type="file" name="img_left_banner"><br><br>
 					<button type="submit" name="btn_left_banner">Thay ảnh</button>
 				
			</td>
			<td>
				<?php
					$query_logo = mysql_query("SELECT * FROM banner WHERE ten_banner = 'right_banner'");
					while($row = mysql_fetch_array($query_logo)){
						echo('<img src="../../img/'.$row['img_banner'].'" style="width: 100"/>');
					}
				?>
				<br>
				Upload ảnh:<br>
 				
 					<input type="file" name="img_right_banner"><br><br>
 					<button type="submit" name="btn_right_banner">Thay ảnh</button>
 				
			</td>
		</tr>
		<tr>
			<td>
				Ảnh trung tâm 1:
			</td>
			<td>
				Ảnh trung tâm 2:
			</td>
			<td>
				Ảnh trung tâm 3:
			</td>
		</tr>
		<tr>
			<td>
				<?php
					$query_logo = mysql_query("SELECT * FROM banner WHERE ten_banner = 'center_banner_1'");
					while($row = mysql_fetch_array($query_logo)){
						echo('<img src="../../img/'.$row['img_banner'].'" style="width: 100"/>');
					}
				?>
				<br>
				Upload ảnh:<br>
 				
 					<input type="file" name="img_center_banner_1"><br><br>
 					<button type="submit" name="btn_center_banner_1">Thay ảnh</button>
 				
			</td>
			<td>
				<?php
					$query_logo = mysql_query("SELECT * FROM banner WHERE ten_banner = 'center_banner_2'");
					while($row = mysql_fetch_array($query_logo)){
						echo('<img src="../../img/'.$row['img_banner'].'" style="width: 100"/>');
					}
				?>
				<br>
				Upload ảnh:<br>
 				
 					<input type="file" name="img_center_banner_2"><br><br>
 					<button type="submit" name="btn_center_banner_2">Thay ảnh</button>
 				
			</td>
			<td>
				<?php
					$query_logo = mysql_query("SELECT * FROM banner WHERE ten_banner = 'center_banner_3'");
					while($row = mysql_fetch_array($query_logo)){
						echo('<img src="../../img/'.$row['img_banner'].'" style="width: 100"/>');
					}
				?>
				<br>
				Upload ảnh:<br>
 				
 					<input type="file" name="img_center_banner_3"><br><br>
 					<button type="submit" name="btn_center_banner_3">Thay ảnh</button>
 				</form>
			</td>
		</tr>
	</table>

</body>
</html>