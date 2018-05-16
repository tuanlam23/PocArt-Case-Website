
	
		<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../model/connect.php');
	function alert(){
		echo '<script type="text/javascript">alert("Nhập đầy đủ thông tin... ")</script>';
	}
     if(isset($_POST['submit'])){
		 $TenSP = $_POST['TenSP'];
		 $sanpham_detail = $_POST['sanpham_detail'];
		 $id_cate = $_POST['select_cate'];
		 $image = $_FILES['img']['name'];

		 if($TenSP ==null  ){
			 
			 alert();
			 
		 }else{
			 $connect = mysql_connect('localhost', 'u112936407_linh', 'ruanguangda13');
			 if(!$connect){
				 die('Không thể kết nối...'.mysql_error());
			 }
			 mysql_query("set names 'utf8'");
									 $target_dir = "../img/";
						$target_file = $target_dir . basename($_FILES["img"]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["img"]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "File is not an image.";
								$uploadOk = 0;
							}
						}
						// Check if file already exists
						if (file_exists($target_file)) {
							echo "Sorry, file already exists.";
							$uploadOk = 0;
						}
						// Check file size
						if ($_FILES["img"]["size"] > 500000) {
							echo "Sorry, your file is too large.";
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
							echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
							echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
								echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
							} else {
								echo "Sorry, there was an error uploading your file.";
							}
						}
			 
			 // Mã số sản phẩm tự tăng
			 $query_count = mysql_query("SELECT MAX(ID_SP) FROM sanpham");
			 while($x = mysql_fetch_array($query_count)){
				 $count = $x['MAX(ID_SP)'];
			 }
			 $count++;
			 
			 ////////
			 
			 $sql = "INSERT INTO sanpham(TenSP, ID_SP, status, img, id_cate, sanpham_detail) VALUES ('$TenSP', '$count', '1', '$image', '$id_cate','$sanpham_detail')";
			 
			 mysql_select_db('u112936407_linh');
			  $retval = mysql_query( $sql, $connect );
			 if(! $retval )
   {
      die('Không thể nhập dữ liệu: ' . mysql_error());
   }
   
   echo "<br>Nhập dữ liệu thành công\n";
			 
			 
   
   mysql_close($connect);
		 }
		 
	 }


//sửa
	else if(isset($_POST['submitSua'])){
		
		$TenSP = $_POST['TenSP'];
		$ID_SP =  $_POST['ID_SP'];
		$sanpham_detail = $_POST['sanpham_detail'];
		$Status = $_POST['Status'];
		$id_cate = $_POST['select_cate'];
		//$image = $_FILES['img']['name'];
		if($TenSP ==null ){
			 alert();
		}else{
				
			$connect = mysql_connect('localhost', 'u112936407_linh', 'ruanguangda13');
			if(!$connect){
				 die('Không thể kết nối...'.mysql_error());
			 }
			 mysql_query("set names 'utf8'");
//			 $duong_dan_up_load="img/".$image;
//			 if(move_uploaded_file($_FILES['img']['name'],"../img/$image")){
//				 echo("Upload thành công...........");
//				 
//			 } else {
//				 echo("$duong_dan_up_load 111");
//				 echo("../img/$image");
//				 
//			 }
								$image = $_FILES["img"]["name"];
								$target_dir = "../img/";
								$target_file = $target_dir . basename($_FILES["img"]["name"]);
								$uploadOk = 1;
								$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
								// Check if image file is a actual image or fake image
								if(isset($_POST["submit"])) {
									$check = getimagesize($_FILES["img"]["tmp_name"]);
									if($check !== false) {
										echo "File is an image - " . $check["mime"] . ".";
										$uploadOk = 1;
									} else {
										echo "File is not an image.";
										$uploadOk = 0;
									}
								}
								// Check if file already exists
								if (file_exists($target_file)) {
									echo "Sorry, file already exists.";
									$uploadOk = 0;
								}
								// Check file size
								if ($_FILES["img"]["size"] > 500000) {
									echo "Sorry, your file is too large.";
									$uploadOk = 0;
								}
								// Allow certain file formats
								if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
								&& $imageFileType != "gif" ) {
									echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
									$uploadOk = 0;
								}
								// Check if $uploadOk is set to 0 by an error
								if ($uploadOk == 0) {
									echo "Sorry, your file was not uploaded.";
								// if everything is ok, try to upload file
								} else {
									if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
										echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
									} else {
										echo "Sorry, there was an error uploading your file.";
									}
								}

			
			
			 
			 
			 

			if($image == ''){
				$retval = mysql_query("UPDATE `sanpham` SET `TenSP` = '$TenSP', `Status` = '$Status', `sanpham_detail` = '$sanpham_detail',`id_cate` = '$id_cate'  WHERE `sanpham`.`ID_SP` = '$ID_SP'");
			}else{
				$retval = mysql_query("UPDATE `sanpham` SET `TenSP` = '$TenSP', `Status` = '$Status', `img` = '$image', `sanpham_detail` = '$sanpham_detail',`id_cate` = '$id_cate'  WHERE `sanpham`.`ID_SP` = '$ID_SP'");
			}
			
			
			 if(! $retval )
   {
      die('Không thể sửa dữ liệu: ' . mysql_error());
   }
   
   echo "<br>Sửa dữ liệu thành công\n";
			 
			 
   
   mysql_close($connect);
			
		}
		
	}


//Phần banner
	if(isset($_POST['btn_logo'])){
		$image = $_FILES['img_logo']['name'];
		if($image==null){
			
		}else{
			$target_dir = "../img/";
						$target_file = $target_dir . basename($_FILES["img_logo"]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["img_logo"]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "File is not an image.";
								$uploadOk = 0;
							}
						}
						// Check if file already exists
						if (file_exists($target_file)) {
							echo "Sorry, file already exists.";
							$uploadOk = 0;
						}
						// Check file size
						if ($_FILES["img_logo"]["size"] > 500000) {
							echo "Sorry, your file is too large.";
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
							echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
							echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["img_logo"]["tmp_name"], $target_file)) {
								echo "The file ". basename( $_FILES["img_logo"]["name"]). " has been uploaded.";
							} else {
								echo "Sorry, there was an error uploading your file.";
							}
						}
			
			if($image != null){
				 $query_up_img = "UPDATE `banner` SET `img_banner` = '$image' WHERE `banner`.`ten_banner` = 'logo'";
				 $sql = mysql_query($query_up_img);
			if($sql){
				echo("<br>Upload ảnh thành công.");
			} else echo("<br>Lỗi...".mysql_error());
		}
		}
		
	}

//left
if(isset($_POST['btn_left_banner'])){
		$image = $_FILES['img_left_banner']['name'];
		if($image==null){
			echo("Vui lòng chọn ảnh...");
		}else{
			
												$target_dir = "../img/";
							$target_file = $target_dir . basename($_FILES["img_left_banner"]["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
							// Check if image file is a actual image or fake image
							if(isset($_POST["submit"])) {
								$check = getimagesize($_FILES["img_left_banner"]["tmp_name"]);
								if($check !== false) {
									echo "File is an image - " . $check["mime"] . ".";
									$uploadOk = 1;
								} else {
									echo "File is not an image.";
									$uploadOk = 0;
								}
							}
							// Check if file already exists
							if (file_exists($target_file)) {
								echo "Sorry, file already exists.";
								$uploadOk = 0;
							}
							// Check file size
							if ($_FILES["img_left_banner"]["size"] > 500000) {
								echo "Sorry, your file is too large.";
								$uploadOk = 0;
							}
							// Allow certain file formats
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" ) {
								echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
								$uploadOk = 0;
							}
							// Check if $uploadOk is set to 0 by an error
							if ($uploadOk == 0) {
								echo "Sorry, your file was not uploaded.";
							// if everything is ok, try to upload file
							} else {
								if (move_uploaded_file($_FILES["img_left_banner"]["tmp_name"], $target_file)) {
									echo "The file ". basename( $_FILES["img_left_banner"]["name"]). " has been uploaded.";
								} else {
									echo "Sorry, there was an error uploading your file.";
								}
							}
			if($image != null){
				 $query_up_img = "UPDATE `banner` SET `img_banner` = '$image' WHERE `banner`.`ten_banner` = 'left_banner'";
				 $sql = mysql_query($query_up_img);
			if($sql){
				echo("<br>Upload ảnh thành công.");
			} else echo("<br>Lỗi...".mysql_error());
		}
		}
		
	}
//right

if(isset($_POST['btn_right_banner'])){
		$image = $_FILES['img_right_banner']['name'];
		if($image==null){
			echo("Vui lòng chọn ảnh...");
		}else{
			
													$target_dir = "../img/";
							$target_file = $target_dir . basename($_FILES["img_right_banner"]["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
							// Check if image file is a actual image or fake image
							if(isset($_POST["submit"])) {
								$check = getimagesize($_FILES["img_right_banner"]["tmp_name"]);
								if($check !== false) {
									echo "File is an image - " . $check["mime"] . ".";
									$uploadOk = 1;
								} else {
									echo "File is not an image.";
									$uploadOk = 0;
								}
							}
							// Check if file already exists
							if (file_exists($target_file)) {
								echo "Sorry, file already exists.";
								$uploadOk = 0;
							}
							// Check file size
							if ($_FILES["img_right_banner"]["size"] > 500000) {
								echo "Sorry, your file is too large.";
								$uploadOk = 0;
							}
							// Allow certain file formats
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" ) {
								echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
								$uploadOk = 0;
							}
							// Check if $uploadOk is set to 0 by an error
							if ($uploadOk == 0) {
								echo "Sorry, your file was not uploaded.";
							// if everything is ok, try to upload file
							} else {
								if (move_uploaded_file($_FILES["img_right_banner"]["tmp_name"], $target_file)) {
									echo "The file ". basename( $_FILES["img_right_banner"]["name"]). " has been uploaded.";
								} else {
									echo "Sorry, there was an error uploading your file.";
								}
							}
			if($image != null){
				 $query_up_img = "UPDATE `banner` SET `img_banner` = '$image' WHERE `banner`.`ten_banner` = 'right_banner'";
				 $sql = mysql_query($query_up_img);
			if($sql){
				echo("<br>Upload ảnh thành công.");
			} else echo("<br>Lỗi...".mysql_error());
		}
		}
		
	}
//center 1
if(isset($_POST['btn_center_banner_1'])){
		$image = $_FILES['img_center_banner_1']['name'];
		if($image==null){
			echo("Vui lòng chọn ảnh...");
		}else{
			
												$target_dir = "../img/";
							$target_file = $target_dir . basename($_FILES["img_center_banner_1"]["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
							// Check if image file is a actual image or fake image
							if(isset($_POST["submit"])) {
								$check = getimagesize($_FILES["img_center_banner_1"]["tmp_name"]);
								if($check !== false) {
									echo "File is an image - " . $check["mime"] . ".";
									$uploadOk = 1;
								} else {
									echo "File is not an image.";
									$uploadOk = 0;
								}
							}
							// Check if file already exists
							if (file_exists($target_file)) {
								echo "Sorry, file already exists.";
								$uploadOk = 0;
							}
							// Check file size
							if ($_FILES["img_center_banner_1"]["size"] > 500000) {
								echo "Sorry, your file is too large.";
								$uploadOk = 0;
							}
							// Allow certain file formats
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" ) {
								echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
								$uploadOk = 0;
							}
							// Check if $uploadOk is set to 0 by an error
							if ($uploadOk == 0) {
								echo "Sorry, your file was not uploaded.";
							// if everything is ok, try to upload file
							} else {
								if (move_uploaded_file($_FILES["img_center_banner_1"]["tmp_name"], $target_file)) {
									echo "The file ". basename( $_FILES["img_center_banner_1"]["name"]). " has been uploaded.";
								} else {
									echo "Sorry, there was an error uploading your file.";
								}
							}
			if($image != null){
				 $query_up_img = "UPDATE `banner` SET `img_banner` = '$image' WHERE `banner`.`ten_banner` = 'center_banner_1'";
				 $sql = mysql_query($query_up_img);
			if($sql){
				echo("<br>Upload ảnh thành công.");
			} else echo("<br>Lỗi...".mysql_error());
		}
		}
		
	}
//center 2
if(isset($_POST['btn_center_banner_2'])){
		$image = $_FILES['img_center_banner_2']['name'];
		if($image==null){
			echo("Vui lòng chọn ảnh...");
		}else{
			
											$target_dir = "../img/";
						$target_file = $target_dir . basename($_FILES["img_center_banner_2"]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["img_center_banner_2"]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "File is not an image.";
								$uploadOk = 0;
							}
						}
						// Check if file already exists
						if (file_exists($target_file)) {
							echo "Sorry, file already exists.";
							$uploadOk = 0;
						}
						// Check file size
						if ($_FILES["img_center_banner_2"]["size"] > 500000) {
							echo "Sorry, your file is too large.";
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
							echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
							echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["img_center_banner_2"]["tmp_name"], $target_file)) {
								echo "The file ". basename( $_FILES["img_center_banner_2"]["name"]). " has been uploaded.";
							} else {
								echo "Sorry, there was an error uploading your file.";
							}
						}
			if($image != null){
				 $query_up_img = "UPDATE `banner` SET `img_banner` = '$image' WHERE `banner`.`ten_banner` = 'center_banner_2'";
				 $sql = mysql_query($query_up_img);
			if($sql){
				echo("<br>Upload ảnh thành công.");
			} else echo("<br>Lỗi...".mysql_error());
		}
		}
		
	}
//center 3
if(isset($_POST['btn_center_banner_3'])){
		$image = $_FILES['img_center_banner_3']['name'];
		if($image==null){
			echo("Vui lòng chọn ảnh...");
		}else{
			
									$target_dir = "../img/";
						$target_file = $target_dir . basename($_FILES["img_center_banner_3"]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["img_center_banner_3"]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "File is not an image.";
								$uploadOk = 0;
							}
						}
						// Check if file already exists
						if (file_exists($target_file)) {
							echo "Sorry, file already exists.";
							$uploadOk = 0;
						}
						// Check file size
						if ($_FILES["img_center_banner_3"]["size"] > 500000) {
							echo "Sorry, your file is too large.";
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
							echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
							echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["img_center_banner_3"]["tmp_name"], $target_file)) {
								echo "The file ". basename( $_FILES["img_center_banner_3"]["name"]). " has been uploaded.";
							} else {
								echo "Sorry, there was an error uploading your file.";
							}
						}
			if($image != null){
				 $query_up_img = "UPDATE `banner` SET `img_banner` = '$image' WHERE `banner`.`ten_banner` = 'center_banner_3'";
				 $sql = mysql_query($query_up_img);
			if($sql){
				echo("<br>Upload ảnh thành công.");
			} else echo("<br>Lỗi...".mysql_error());
		}
		}
		
	}
//out
if(isset($_POST['btn_out'])){
	session_start();
	session_destroy();
	header('Location: view/login.php');
}
	
	
	

     
?>








