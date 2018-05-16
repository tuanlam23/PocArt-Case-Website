
<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../model/connect.php');
    include_once('../model/add_to.php');
	
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<title> PocArt - Case điện thoại</title>
<link rel="icon" href="../img/favicon.png" />
<link href="../web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="../web/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../web/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="../web/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="../web/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>


<!-- facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!---->
<div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <style>#cfacebook{position:fixed;bottom:0px;right:10px;z-index:999999999999999;width:350px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:center;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:right;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:350px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:1px;font-size:18px;}#cfacebook a.chat_fb:hover{color:aquamarine;text-decoration:none;}</style>
  <script>
  jQuery(document).ready(function () {
  jQuery(".chat_fb").click(function() {
jQuery('.fchat').toggle('slow');
  });
  });
  </script>
  <div id="cfacebook" align="center">
  <a href="javascript:;" class="chat_fb" onclick="return:false;"><i class="fa fa-facebook-square"></i>Chat với chúng tôi</a>
  <div class="fchat">
  <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/pocartcase" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
  </div>
  </div>
<!-- facebook-->

<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
		
				<div class="col-sm-4 logo" >
					<?php 
						$query_get_img = "SELECT * FROM banner WHERE ten_banner = 'logo'";
						$sql = mysqli_query($conn,$query_get_img);
						while($row = mysqli_fetch_array($sql)){
							$logo = $row['img_banner'];
						}
					?>
					
					<a href="../index.php">
					
					<img src="../img/<?=$logo?>" alt="" style="width:180px;height:82px; z-index: 3;margin-left: 7px;margin-top: 3px"></a>	
				</div>
			<div class="col-sm-4 world">
				<p align="center">ỐP LÀ MỘT NGHỆ THUẬT</p>
				<p align="center">NGƯỜI DÙNG ỐP LÀ MỘT NGHỆ SỸ</p>
			</div>
			<div class="col-sm-4 world" align="right">		
					<br>
					<div id="gio_hang_tren">
					<a href="../check.php">
						<h3> <a id="buy" href="../view/check.php" style=" color: black"><?php
							if(isset($_SESSION['giohang'])){
									echo count($_SESSION['giohang']);
								
							}else echo("0");
							?></a>&nbsp;
							<a href="../view/check.php"><img src="../img/cart.png" alt="" style="width: 30"/></a></h3>
						</a></div>
						
				
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div style="background: #535353; padding-top: 1; "
			<div class="head-top">
				
		 <div class="col-sm-10 h_menu4" align="center" style="margin-bottom: 5px;">
				<ul class="memenu skyblue">
					  

				    <li class="grid"><a  href="#">Chọn theo concept</a>
					  	<div class="mepanel">
						<div class="row">
							
								<div class="h_nav">
									<ul>
									<?php
										$query_get_cate = mysqli_query($conn,"SELECT * FROM categories");
										while($cate = mysqli_fetch_array($query_get_cate)){
											?>
											<li><a href="../concept.php?id_cate=<?=$cate['id_cate']?>"><?=$cate['name_cate']?></a></li>
											<?php
										}
										?>
										
									</ul>	
								</div>							
							



						  </div>
						</div>
			    </li>
				<li><a  href="congtacvien.php">Đăng ký cộng tác viên</a></li>
				<li><a  href="#">Danh sách dòng máy</a></li>		
				<li><a  href="https://www.instagram.com/pocart.case/" target="_blank">Instagram</a></li>						
			  </ul> 
			</div>
				<div  align="right" style="margin-top: 12px;margin-right: 15px">
				<div id="gio_hang_duoi" style="display: inline">
				<a  href="../check.php">
						 <a id="buy" href="../view/check.php" style=" color: white"><?php
							if(isset($_SESSION['giohang'])){
									echo count($_SESSION['giohang']);
								
							}else echo("0");
							?></a>&nbsp;
							<a href="../view/check.php"><img src="../img/cart.png" alt="" style="width: 30"/></a>
					</a></div>
						<script>
toggle();
window.onresize = function() {
    toggle();
}

function toggle() {
    if (window.innerWidth < 900) {
        document.getElementById('gio_hang_tren').style.display = 'none';
        
		document.getElementById('gio_hang_duoi').style.display = 'inline';     
    }
    else {
        document.getElementById('gio_hang_tren').style.display = 'block';
        document.getElementById('gio_hang_duoi').style.display = 'none';                
    }    
}
</script>
						
						
				&nbsp;	&nbsp;							
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog" style="color: white"><i class="glyphicon glyphicon-search" style="margin-right: 3px"> </i>Tìm</a>
		</div>
		<div class="clearfix" > </div>
			<!---pop-up-box---->
					  <script type="text/javascript" src="../web/js/modernizr.custom.min.js"></script>    
					<link href="../web/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="../web/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login" >
						<form action="../search.php" method="post">
							
						
							<input type="submit" name="btn_search" value="">
							<input type="text" name="text_search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							</form>
						</div>
						<p>	Ốp iphone</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>

      				

<!--content-->
<div class="container">
	
   	    
   	    
   	    <!---->
   	    <h5 style="text-align: center;font-size: 30">
   	    	<br>Check out<br><br>
   	    </h5>
   	   <table border="1px">
   	   	<tr>
   	   	<th>
   	   		
   	   	</th>
   	   		<th style="color: black">
   	   			Danh sách
   	   		</th>
   	   		<th style="color: black">
   	   			Ảnh
   	   		</th>
   	   		<th style="color: black">
   	   			Loại
   	   		</th>
   	   		<th style="color: black">
   	   			Giá
   	   		</th>
   	   		<th style="color: black">
   	   			Tên điện thoại
   	   		</th>
   	   	</tr>
  	   				<form id ="add_to" action="../model/add_to.php" method="post"></form>
  	   				<form action="../controller/action_buy.php" method="post">
   	   				<?php
		   			$stt = 0;
						
		   			$select_kieu = array();
		   if(isset($_SESSION['giohang']) && !isset($_POST['btn_now'])){
				for($j = 0; $j < count($_SESSION['giohang']); $j++){
					$select_kieu[$j] ='select_kieu'.$j;
					$stt++;
					$id = $_SESSION['giohang'][$j]['id'];				
					$query_get_item = mysqli_query($conn,"SELECT * FROM sanpham WHERE ID_SP =$id");
					$item = mysqli_fetch_array($query_get_item);
					$query_get_kieu = mysqli_query($conn,"SELECT * FROM kieu");
						
					?>
 	   	
  	   	<tr>
  	   		<td><button id="add_to" style="background-color: #535353 ;width:100%" type="submit" name="btn_check_xoa" value=<?=$j?>><a style="color: white;">Xóa</a></button></td>
  	   		<td width="15%">
  	   			<?=$stt?> . <?= $item['TenSP']?>
  	   		</td>
  	   		<td width="20%"><a href="../view/product.php?id=<?=$id?>" class="at-in"><img src="../img/<?= $item['img']?>" class="img-responsive" alt=""></a></td>
  	   		<td width="20%">
 	   				  	   			
  	   				  	   			<select name="<?=$select_kieu[$j]?>" id="syn_list<?=$stt?>" onChange="get_gia(<?=$stt?>)" style="width: 100%">
								<?php
									$query_get_kieu = mysqli_query($conn,"SELECT * FROM kieu");
												   while($row = mysqli_fetch_array($query_get_kieu)){
												?>
									<option  value=<?=$row['id_kieu']?>|<?=$row['gia_kieu']?>|<?=$id?> ><?=$row['ten_kieu']?></option>
									
									<?php
										}
												   
									?>
								</select>
								
  	   		</td>
  	   		<td width="20%">

								<?php
									$get_first = mysqli_query($conn,"SELECT * FROM kieu WHERE id_kieu = 0");
									while($a = mysqli_fetch_array($get_first)){
										$gia_first = $a['gia_kieu'];
									}
									?>
								<a id="demo<?=$stt?>" style="font-size: 20px">  <?=$gia_first ?></a> ₫
								<script>

									function get_gia(y){
										var x = $("#syn_list"+y).val();
										var gia = x.split("|");
										document.getElementById("demo"+y).innerHTML = gia[1];
										
									}
									

									</script>
  	   		</td>
  	   		   	   
  	   		
  	   		<td width="20%"><input type="text" name="ten_dt" style="width:100%">
								
								
								</td>
  	   		
  	   	</tr>
  	   	
   	   	<?php 
				}} else {if(isset($_POST['btn_now'])){
			   
			   $now = $_POST['btn_now'];
						 $value = $_POST['select_kieu'];
						 $id_kieu = explode("|", $value);
			   $query_get_now = mysqli_query($conn,"SELECT * FROM sanpham WHERE ID_SP = $now ");
			   while($get_now = mysqli_fetch_array($query_get_now)){
				   $ten_now = $get_now['TenSP'];
				   $img_anh = $get_now['img'];
				   
			   }
						 ?>
						 <input type="hidden" name="id_sp" value="<?=$now?>">
						 <input type="hidden" name="id_k" value="<?= $id_kieu[0]?>"
						 <?php
						 $query_kieu= mysqli_query($conn,"SELECT * FROM kieu WHERE id_kieu = $id_kieu[0]");
						 while($kieu = mysqli_fetch_array($query_kieu)){
							 $get_ten_kieu = $kieu['ten_kieu'];
							 $get_gia_kieu = $kieu['gia_kieu'];
						 }
			   ?>
			   <tr>
			   	<td>
					
			   	</td>
			   	
			   	
				   <td width="15%">
				   	1. <?=$ten_now?>
				   </td>
				   <td width="20%"><a href="../view/product.php?id=<?=$now?>" class="at-in"><img src="../img/<?= $img_anh?>" class="img-responsive" alt=""></a></td>
			   
						<td width="20%"><?=$get_ten_kieu?></td>
						<td width="20%"><?=$get_gia_kieu?> ₫</td>
			   
			   <td width="20%"><input type="text" name="ten_dt" style="width:100%">
			   </tr>
			   <?php
			   
		   } else echo("Không có sản phẩm nào...<br>");
						
						}
		   
		   
		   ?>

   	   </table>

   	    
   	    <!---->
   	    
    	    
		  

	</table>
	
	<div class="contact">
			<div class="container">
				<h5 style="text-align: center;font-size: 30">
   	    	Thông tin liên hệ<br><br>
   	    </h5>
				
				<div class="contact-grids">
					<div class="contact-form">
							
								<div class="contact-bottom">
									<div class="col-md-4 in-contact">
										<span >Họ tên</span>
										<input type="text" name="TenKH" style="color: black">
									</div>
									<div class="col-md-4 in-contact">
										<span>Email</span>
										<input type="text" name="Mail" style="color: black">
									</div>
									<div class="col-md-4 in-contact">
										<span>Số điện thoại</span>
										<input type="text" name="SDT" style="color: black">
									</div>
									<div class="clearfix"> </div>
								</div>
							
								<div class="contact-bottom-top">
									<span>Địa chỉ</span>
									<input type="text" name="DiaChi" style="width: 100%; height: 50" style="color: black">							
									</div>
								<input type="submit" name="dat_hang" value="ĐẶT HÀNG" style="background-color: #535353">
								
							</form>
						</div>
				<div class="address">
					<div class=" address-more">
						
						<div class="col-md-4 address-grid">
							<i class="glyphicon glyphicon-map-marker" style="color: #535353"></i>
							<div class="address1">
								<p style="color: black">Ha Noi</p>
								
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-phone" style="color: #535353"></i>
							<div class="address1">
								<p style="color: black">0963 28 5309</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-envelope" style="color: #535353"></i>
							<div class="address1">
								<p><a href="mailto:@gmail.com"  style="color: black"> pocartcase@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
	
	

				</div>
			</div>
	<br>
	<div class="clearfix"> </div>
    </div>
</div>

<!--//content-->
<div align="center"><div class="fb-like" data-href="https://www.facebook.com/pocartcase/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>
<!--footer-->
<div class="clearfix"> </div>
				<p class="footer-class"> © 2017 Pocart Case | Produce by <a style="color: black">MARCH</a></p>
				<br>
				<br>
			</div>
<!--//footer-->

</body>
</html>