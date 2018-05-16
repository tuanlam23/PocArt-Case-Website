<?php
	include_once('connect.php');
	if(isset($_POST['btn_them_san_pham'])){
		if($_POST['TenSP']==''&&$_FILES["img"]["name"]==''){
			echo "Chưa nhập tên/ảnh<br>Vui lòng nhập lại...";
			header('refresh:3 ,url = ../pages/tables/danh_sach_san_pham.php');
		} else{
			$TenSP = $_POST['TenSP'];
			$sanpham_detail = $_POST['sanpham_detail'];
			$id_cate = $_POST['id_cate'];
			$img = $_FILES["img"]["name"];
			// Lấy ảnh
						$target_dir = "../../img/";
						$target_file = $target_dir . basename($_FILES["img"]["name"]);
						$uploadOk = 1;
						$flag_exist = 0;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["img"]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".<br>";
								$uploadOk = 1;
							} else {
								echo "File không phải ảnh.<br>";
								header('refresh:3 ,url = ../pages/tables/danh_sach_san_pham.php');
								$uploadOk = 0;
							}
						}
						// Check if file already exists
						if (file_exists($target_file)) {
							echo "<br>";
							$uploadOk = 0;
							$flag_exist = 1;
						}
						// Check file size
						if ($_FILES["img"]["size"] > 500000) {
							echo "File quá lớn.<br>";
							header('refresh:3 ,url = ../pages/tables/danh_sach_san_pham.php');
							$img ='';
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" && $img != '') {
							echo "File không phải định dạng JPG, JPEG, PNG & GIF. Kiểm tra lại...<br>";
							header('refresh:3 ,url = ../pages/tables/danh_sach_san_pham.php');
							$img ='';
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0 && $flag_exist == 0) {
							echo "Chưa upload ảnh thành công...<br>";
							header('refresh:3 ,url = ../pages/tables/danh_sach_san_pham.php');
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
								echo "Ảnh đã được upload thành công!<br>";
							} else {
								if($img ==''){
									
								}else{
									echo "Có lỗi trong quá trình upload... (Liên hệ BE)<br>";
								header('refresh:3 ,url = ../apages/tables/danh_sach_san_pham.php');
								}
								
							}
						}
			// Kết thức lấy ảnh
			
			// SQL
			// Lấy ngàu giờ
			date_default_timezone_set('asia/ho_chi_minh');
			$date_in = date("Y-m-d h:i:s") ;
			//Kết thức lấy ngày giờ
			//Lấy ID
			$query_get_date_last= mysqli_query($conn,"SELECT MAX(date_in) FROM sanpham");
			while($row_date =mysqli_fetch_array($query_get_date_last)){
				$date_last =$row_date['MAX(date_in)'];
			}
			$query_get_id = mysqli_query($conn,"SELECT * FROM sanpham WHERE date_in = '$date_last'");
			while($row_id = mysqli_fetch_array($query_get_id)){
				$ID_SP = $row_id['ID_SP']+1;
			}
			//Kết thức lấy ID
			
			//Nếu sửa mà k up ảnh thì ảnh giữ nguyên
			if(isset($_POST['btn_sua_san_pham'])){
				$Status = $_POST['Status'];
				$id_sua = $_POST['id_sua'];
				if($img == ''){
					
					$query_up_san_pham = mysqli_query($conn,"UPDATE `sanpham` SET `TenSP` = '$TenSP', `Status` = '$Status', `id_cate` = '$id_cate', `sanpham_detail` = '$sanpham_detail', `date_in` = '$date_in' WHERE `sanpham`.`ID_SP` = '$id_sua'");
					if($query_up_san_pham == 1){
					echo("Sửa sản phẩm thành công!");
					header('refresh:1 ,url = ../pages/tables/danh_sach_san_pham.php');
					}else{
					echo("Sửa sản phẩm lỗi... Thử lại...");
					header('refresh:10 ,url = ../pages/tables/danh_sach_san_pham.php');
					}
				} else{
					
					$query_up_san_pham = mysqli_query($conn,"UPDATE `sanpham` SET `TenSP` = '$TenSP', `Status` = '$Status', `id_cate` = '$id_cate',`img` ='$img', `sanpham_detail` = '$sanpham_detail', `date_in` = '$date_in' WHERE `sanpham`.`ID_SP` = '$id_sua'");
					if($query_up_san_pham == 1){
					echo("Sửa sản phẩm thành công!");
					header('refresh:1 ,url = ../pages/tables/danh_sach_san_pham.php');
					}else{
					echo("Sửa sản phẩm lỗi... Thử lại...");
					
					header('refresh:10 ,url = ../pages/tables/danh_sach_san_pham.php');
					}
				}
				
				
			} else{
				$query_up_san_pham = mysqli_query($conn,"INSERT INTO `sanpham` (`TenSP`,`ID_SP` , `Status`, `id_cate`, `img`, `sanpham_detail`, `date_in`) VALUES ('$TenSP','$ID_SP', '1', '$id_cate', '$img', '$sanpham_detail', '$date_in')");
				if($query_up_san_pham == 1){
				echo("Thêm sản phẩm thành công!");
				header('refresh:1 ,url = ../pages/tables/danh_sach_san_pham.php');
				}else{
				echo("Thêm sản phẩm lỗi... Thử lại...");
				
				header('refresh:10 ,url = ../pages/tables/danh_sach_san_pham.php');
				}
			}
			
			
			
			
		}
	}

//xóa sản phẩm
	if(isset($_POST['btn_xoa_san_pham'])){
		$id_xoa = $_POST['btn_xoa_san_pham'];
		$query_xoa = mysqli_query($conn,"DELETE FROM `sanpham` WHERE `sanpham`.`ID_SP` = ".$id_xoa);
		echo("Xóa thành công!");
		header('refresh:1 ,url = ../pages/tables/danh_sach_san_pham.php');
	}

//Sửa concept
if(isset($_POST['btn_sua_concept'])){
				$id_cate_sua = $_POST['btn_sua_concept'];
				$name_cate_sua = $_POST['sua_concept_'.$id_cate_sua];
				$query_sua_concept = mysqli_query($conn,"UPDATE `categories` SET `name_cate` = '$name_cate_sua' WHERE `categories`.`id_cate` = $id_cate_sua");
				if($query_sua_concept==1){
					echo("Sửa thành công...");
					header('refresh:1 ,url = ../pages/tables/danh_sach_concept.php');
				}else echo("Có lỗi trong quá trình sửa...");
			}
//Sửa banner
if(isset($_POST['btn_sua_banner'])){
	$ten_banner = $_POST['btn_sua_banner'];
	$img_banner = $img = $_FILES["img_banner"]["name"];
	// Lấy ảnh
						$target_dir = "../../img/";
						$target_file = $target_dir . basename($_FILES["img_banner"]["name"]);
						$uploadOk = 1;
						$flag_exist = 0;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["img_banner"]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".<br>";
								$uploadOk = 1;
							} else {
								echo "File không phải ảnh.<br>";
								header('refresh:3 ,url = ../pages/tables/page.php');
								$uploadOk = 0;
							}
						}
						// Check if file already exists
						if (file_exists($target_file)) {
							echo "<br>";
							$uploadOk = 0;
							$flag_exist = 1;
						}
						// Check file size
						if ($_FILES["img_banner"]["size"] > 500000) {
							echo "File quá lớn.<br>";
							header('refresh:3 ,url = ../pages/tables/page.php');
							$img ='';
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" && $img != '') {
							echo "File không phải định dạng JPG, JPEG, PNG & GIF. Kiểm tra lại...<br>";
							header('refresh:3 ,url = ../pages/tables/page.php');
							$img ='';
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0 && $flag_exist == 0) {
							echo "Chưa upload ảnh thành công...<br>";
							header('refresh:3 ,url = ../pages/tables/page.php');
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["img_banner"]["tmp_name"], $target_file)) {
								echo "Ảnh đã được upload thành công!<br>";
							} else {
								if($img ==''){
									
								}else{
									echo "Có lỗi trong quá trình upload... (Liên hệ BE)<br>";
								header('refresh:3 ,url = ../apages/tables/page.php');
								}
								
							}
						}
			// Kết thức lấy ảnh
			if($img_banner !=''){
				$query_set_banner = mysqli_query($conn,"UPDATE `banner` SET `img_banner` = '$img_banner' WHERE `banner`.`ten_banner` = '$ten_banner'");
				if($query_set_banner == 1){
					echo("<br>Thay banner thành công!");
					header('refresh:1 ,url = ../pages/tables/page.php');
				}
			}else{
				echo("<br>Vui lòng chọn ảnh!");
				header('refresh:3 ,url = ../pages/tables/page.php');
			}
}
	// sửa loại case
	if(isset($_POST['btn_sua_kieu'])){
		$id_kieu = $_POST['btn_sua_kieu'];
		$ten_kieu = $_POST['ten_kieu'.$id_kieu];
		$gia_kieu = $_POST['gia_kieu'.$id_kieu];
		$query_set_kieu = mysqli_query($conn,"UPDATE `kieu` SET `ten_kieu` = '$ten_kieu', `gia_kieu` = '$gia_kieu' WHERE `kieu`.`id_kieu` = '$id_kieu'");
		if($query_set_kieu == 1){
			echo("Sửa loại case thành công!");
			header('refresh:1 ,url = ../pages/tables/danh_sach_loai_case.php');
		}else{
			echo("Sửa thất bại, vui lòng thử lại...");
			header('refresh:3 ,url = ../pages/tables/danh_sach_loai_case.php');
		}
	}
	
	//Thêm loại case
	if(isset($_POST['btn_them_kieu'])){
		$ten_kieu_them = $_POST['ten_kieu_them'];
		$gia_kieu_them = $_POST['gia_kieu_them'];
		$query_id_kieu_them= mysqli_query($conn,"SELECT MAX(id_kieu) FROM `kieu` WHERE 1") ;
		while($row_id_them = mysqli_fetch_array($query_id_kieu_them)){
			$id_kieu_them = $row_id_them['MAX(id_kieu)'];
		}
		$id_kieu_them++;
		$query_them_kieu = mysqli_query($conn,"INSERT INTO `kieu` (`id_kieu`, `ten_kieu`, `gia_kieu`) VALUES ('$id_kieu_them', '$ten_kieu_them', '$gia_kieu_them')");
		if($query_them_kieu == 1){
			echo("Thêm loại case thành công!");
			header('refresh:1 ,url = ../pages/tables/danh_sach_loai_case.php');
		}else{
			echo("Thêm thất bại, vui lòng thử lại...");
			header('refresh:3 ,url = ../pages/tables/danh_sach_loai_case.php');
		}
	}

	//Đổi status của order
	if(isset($_POST['btn_xong_order'])){
		$ID_Order = $_POST['btn_xong_order'];
		$query_set_status_order = mysqli_query($conn,"UPDATE `orders` SET `status_order` = '1' WHERE `orders`.`ID_Order` = $ID_Order");
		if($query_set_status_order == 1){
			echo("Xong thành công!");
			header('refresh:1 ,url = ../pages/tables/danh_sach_order.php');
		} else{
			echo("Xong thất bại, vui lòng thử lại...");
			header('refresh:3 ,url = ../pages/tables/danh_sach_order.php');
		}
	}
	// Xóa feedback
	if(isset($_POST['btn_xoa_feedback'])){
		$id_feedback = $_POST['btn_xoa_feedback'];
		$query_del_feedback = mysqli_query($conn,"DELETE FROM `feedback` WHERE `feedback`.`id_feedback` = $id_feedback");
		if($query_del_feedback == 1){
			echo("Xóa thành công!");
			header('refresh:1 ,url = ../pages/tables/feedback.php');
		} else{
			echo("Xoá thất bại, vui lòng thử lại...");
			header('refresh:3 ,url = ../pages/tables/feedback.php');
		}
	}
	//thêm feedback
	if(isset($_POST['btn_them_feedback'])){
		$img = $_FILES["img"]["name"];
		// Lấy ảnh
						$target_dir = "../../img/";
						$target_file = $target_dir . basename($_FILES["img"]["name"]);
						$uploadOk = 1;
						$flag_exist = 0;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["img"]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".<br>";
								$uploadOk = 1;
							} else {
								echo "File không phải ảnh.<br>";
								header('refresh:3 ,url = ../pages/tables/feedback.php');
								$uploadOk = 0;
							}
						}
						// Check if file already exists
						if (file_exists($target_file)) {
							echo "<br>";
							$uploadOk = 0;
							$flag_exist = 1;
						}
						// Check file size
						if ($_FILES["img"]["size"] > 500000) {
							echo "File quá lớn.<br>";
							header('refresh:3 ,url = ../pages/tables/feedback.php');
							$img ='';
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" && $img != '') {
							echo "File không phải định dạng JPG, JPEG, PNG & GIF. Kiểm tra lại...<br>";
							header('refresh:3 ,url = ../pages/tables/feedback.php');
							$img ='';
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0 && $flag_exist == 0) {
							echo "Chưa upload ảnh thành công...<br>";
							header('refresh:3 ,url = ../pages/tables/feedback.php');
						// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
								echo "Ảnh đã được upload thành công!<br>";
							} else {
								if($img ==''){
									
								}else{
									echo "Có lỗi trong quá trình upload... (Liên hệ BE)<br>";
								header('refresh:3 ,url = ../apages/tables/feedback.php');
								}
								
							}
						}
			// Kết thức lấy ảnh
		$query_set_feedback = mysqli_query($conn,"INSERT INTO `feedback` (`id_feedback`, `img_feedback`) VALUES (NULL, '$img')");
		if($query_set_feedback == 1){
			echo("Thêm thành công!");
			header('refresh:1 ,url = ../pages/tables/feedback.php');
		} else{
			echo("Thêm thất bại, vui lòng thử lại...");
			header('refresh:3 ,url = ../pages/tables/feedback.php');
		}
	}
	
?>