
<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

//Phần tạo giỏ hàng
//	session_start();
	include_once('model/connect.php');
    include_once('controller/SPcontroller.php');
include_once('model/add_to.php');
//		if(isset($_GET['add'])){
//			$id = $_GET['add'];
//		if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
//			$count = count($_SESSION['giohang']);
//			$flag = false;
//			for($i = 0; $i<$count;$i++){
//				if($_SESSION['giohang'][$i]['id']==$id){
//					
//					$_SESSION['giohang'][$i]['soluong'] += 1;
//					$flag= true;
//					break;
//				}
//				
//			}
//			if($flag==false){
//				$_SESSION['giohang'][$count]['id'] = $id;
//				$_SESSION['giohang'][$count]['soluong'] = 1;
//			}
//		}else{
//			$_SESSION['giohang'] = array();
//			$id = $_GET['add'];
//			$_SESSION['giohang'][0]['id'] = $id;
//			$_SESSION['giohang'][0]['soluong'] = 1;
//			
//		}
//			
//			header('Location: index.php');
//	}
//kết thúc tạo giỏ hàng
	
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick-theme.css">
  <!---->
<link rel="image_src" href="img/logofinal.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<title> PocArt - Ốp in hình</title>

<meta property="og:image" content="http://pocartcase.com/img/as.jpg" />
<link rel="icon" href="img/favicon.png" />
<meta property="fb:app_id" content="966242223397117" />
<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Pocartcase là đơn vị cung cấp ốp, skin cho hơn 600 dòng điện thoại trên thị trường hiện nay!
"Ốp là một nghệ thuật, người dùng ốp là một nghệ sĩ""/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="web/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="web/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="web/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="web/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	   
	   ////////////////////////

  </script>
<link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 100%;
/*        margin: 100px auto;*/
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

  </style>
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
					
					<a href="index.php">
					<img src="img/giflogo.gif" style="width: 50px; z-index: 1; position: absolute; ">
					<img src="img/<?=$logo?>" alt="" style="width:180px;height:82px; z-index: 3;margin-left: 7px;margin-top: 3px"></a>	
				</div>
			<div class="col-sm-4 world">
				<p align="center">ỐP LÀ MỘT NGHỆ THUẬT</p>
				<p align="center">NGƯỜI DÙNG ỐP LÀ MỘT NGHỆ SỸ</p>
			</div>
			<div class="col-sm-4 world" align="right">		
					<br>
					<div id="gio_hang_tren">
					<a href="check.php">
						<h3> <a id="buy" href="view/check.php" style=" color: black"><?php
							if(isset($_SESSION['giohang'])){
									echo count($_SESSION['giohang']);
								
							}else echo("0");
							?></a>&nbsp;
							<a href="view/check.php"><img src="img/cart.png" alt="" style="width: 30"/></a></h3>
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
											<li><a href="concept.php?id_cate=<?=$cate['id_cate']?>"><?=$cate['name_cate']?></a></li>
											<?php
										}
										?>
										
									</ul>	
								</div>							
							



						  </div>
						</div>
			    </li>
				<li><a  href="view/congtacvien.php">Đăng ký cộng tác viên</a></li>
				<li><a  href="#">Danh sách dòng máy</a></li>		
				<li><a  href="https://www.instagram.com/pocart.case/" target="_blank">Instagram</a></li>						
			  </ul> 
			</div>
				<div  align="right" style="margin-top: 12px;margin-right: 15px">
				<div id="gio_hang_duoi" style="display: inline">
				<a  href="check.php">
						 <a id="buy" href="view/check.php" style=" color: white"><?php
							if(isset($_SESSION['giohang'])){
									echo count($_SESSION['giohang']);
								
							}else echo("0");
							?></a>&nbsp;
							<a href="view/check.php"><img src="img/cart.png" alt="" style="width: 30"/></a>
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
					  <script type="text/javascript" src="web/js/modernizr.custom.min.js"></script>    
					<link href="web/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="web/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login" >
						<form action="search.php" method="post">
							
						
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
</div>
<!--banner-->

<!--//banner-->
<!--content-->
<div class="content">
<div class="container">
	<?php
		$search = $_POST['text_search'];
	?>
	<br><br>
	<a style="color: #535353" href="index.php">TRANG CHỦ </a>/ <a style="color: #535353"><b>SEARCH: "<?= $search?>"</b></a>
	
		<div class="content-top">
			
			<div class="content-top1">
			<!--Phân trang-->
				<?php
					$query_get_all = mysqli_query($conn,"SELECT * FROM sanpham WHERE TenSP like '%$search%' ORDER BY date_in DESC");
					$so_item  = mysqli_num_rows($query_get_all);
			 		$so_trang = ceil($so_item/8);
			 		
					
			 		//Lấy 8 tin 1
			 		if(isset($_GET['page'])){
						$from = ($_GET['page']-1)*8;
			 			$query_get_8 = mysqli_query($conn,"(SELECT * FROM sanpham WHERE TenSP like '%$search%' ORDER BY date_in DESC) LIMIT $from, 8");
			 			while($item_8 = mysqli_fetch_array($query_get_8)){
							?>
							<!---->
								<div class="col-md-3 col-md2" style="margin-bottom: 30px">
								 <div >
							<a href="view/product.php?id=<?=$item_8['ID_SP']?>" style="color: #535353;text-decoration: none; ">
							
							<div style="background-color: rgba(249,249,249,1.00);color: rgba(85,85,85,1.00);"><img class="img-responsive" src="img/<?= $item_8['img'] == ''? 'case_empty.png':$item_8['img'] ?>" />
								<p style="font-size: 20px; margin-top: 10px; " align="center"><b><?= $item_8['TenSP']?></b></p>
								<p style="margin-bottom: 10px"><a href="index.php?page=0&add=<?=$item_8['ID_SP']?>" style="font-size: 13px"><img src="img/cart.png" style="width: 35px">Thêm vào giỏ</a>
								
								</p>
							</div>
							
							</a>
							</div>
								
							</div>	
							
							<!---->
							<?php
								include_once('model/add_to.php');
						}
					}else{
						$query_get_8 = mysqli_query($conn,"(SELECT * FROM sanpham WHERE TenSP like '%$search%' ORDER BY date_in DESC) LIMIT 0, 8");
			 			while($item_8 = mysqli_fetch_array($query_get_8)){
							?>
								<!---->
								<div class="col-md-3 col-md2" style="margin-bottom: 30px">
								 <div >
							<a href="view/product.php?id=<?=$item_8['ID_SP']?>" style="color: #535353;text-decoration: none; ">
							
							<div style="background-color: rgba(249,249,249,1.00);color: rgba(85,85,85,1.00);"><img class="img-responsive" src="img/<?= $item_8['img'] == ''? 'case_empty.png':$item_8['img'] ?>" />
								<p style="font-size: 20px; margin-top: 10px; " align="center"><b><?= $item_8['TenSP']?></b></p>
								<p style="margin-bottom: 10px"><a href="index.php?page=0&add=<?=$item_8['ID_SP']?>" style="font-size: 13px"><img src="img/cart.png" style="width: 35px">Thêm vào giỏ</a>
								
								</p>
							</div>
							
							</a>
							</div>
								
							</div>		
							
							<!---->
							
							<?php
						}
					}
			 		
				?>
			
			
			<!---->
				
			
			
			
			<div class="clearfix"> </div>
			</div>
</div>
<?php
		if(isset($_GET['page'])){
		for($t = 1; $t<= $so_trang; $t++){
				if($t == $_GET['page']){
							echo("<b>Trang $t</b>");
						}else{
							echo"<a href='search?page=$t'>Trang $t</a><a>&nbsp|&nbsp</a>";
						}
						}}
		else{
			echo("<b>Trang 1 </b>");
			for($t = 2; $t<= $so_trang; $t++){
				echo"<a href='search?page=$t'>Trang $t</a><a>&nbsp|&nbsp</a>";
			}
		}
		
		?>
		<br>

	</div>
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