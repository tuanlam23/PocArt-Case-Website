
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
						$sql = mysql_query($query_get_img);
						while($row = mysql_fetch_array($sql)){
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
										$query_get_cate = mysql_query("SELECT * FROM categories");
										while($cate = mysql_fetch_array($query_get_cate)){
											?>
											<li><a href="#"><?=$cate['name_cate']?></a></li>
											<?php
										}
										?>
										
									</ul>	
								</div>							
							


						  </div>
						</div>
			    </li>
				<li><a  href="#">Đăng ký cộng tắc viên</a></li>
				<li><a  href="#">Danh sách dòng máy</a></li>		
				<li><a  href="#">Instagram</a></li>						
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
<div class="banner" >
						
<marquee direction="right">Chào mừng bạn đến với <b>Pocart Case</b>...</marquee>
<p>&nbsp;</p>
	<div class="col-sm-3 banner-mat">
				<?php 
						$query_get_img = "SELECT * FROM banner WHERE ten_banner = 'left_banner'";
						$sql = mysql_query($query_get_img);
						while($row = mysql_fetch_array($sql)){
							$logo = $row['img_banner'];
						}
					?>
		<img class="img-responsive"	src="img/<?= $logo?>" alt="" style=" height : 422; width: 422; margin-top: 5px">
	</div>
	<div class="col-sm-6 matter-banner" >
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul>

      		
      			
      				
      					
      						
      								<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1" >
<div class="ws_images"><ul>
	<?php 
						$query_get_img = "SELECT * FROM banner WHERE ten_banner = 'center_banner_1'";
						$sql = mysql_query($query_get_img);
						while($row = mysql_fetch_array($sql)){
							$logo1 = $row['img_banner'];
						}
			 			$link = 20;
			 
			 			$query_link = mysql_query("SELECT * FROM sanpham WHERE img = '$logo1'");
			 			if(isset($query_link)){
							while($get_link = mysql_fetch_array($query_link)){
							$link = $get_link['ID_SP'];
						} 
						
						}
						
					?>
		<li><a href="view/product.php?id=<?=$link?>" target="_blank"><img src="img/<?= $logo1?>" alt="Sản phẩm hot" title="Sản phẩm hot" id="wows1_0"/></a></li>
		<?php 
						$query_get_img = "SELECT * FROM banner WHERE ten_banner = 'center_banner_2'";
						$sql = mysql_query($query_get_img);
						while($row = mysql_fetch_array($sql)){
							$logo2 = $row['img_banner'];
						}
						$link2 = 20;
$query_link2 = mysql_query("SELECT * FROM sanpham WHERE img = '$logo2'");
			 			if(isset($query_link2)){
							while($get_link2 = mysql_fetch_array($query_link2)){
							$link2 = $get_link2['ID_SP'];
						} 
						
						}
					?>
		<li><a href="view/product.php?id=<?=$link2?>" target="_blank"><img src="img/<?= $logo2?>" alt="Sản phẩm hot" title="Sản phẩm hot" id="wows1_1"/></a></li>
		<?php 
						$query_get_img = "SELECT * FROM banner WHERE ten_banner = 'center_banner_3'";
						$sql = mysql_query($query_get_img);
						while($row = mysql_fetch_array($sql)){
							$logo3 = $row['img_banner'];
						}$query_link3 = mysql_query("SELECT * FROM sanpham WHERE img = ".$logo3);
			 			$link3 = 20;
$query_link3 = mysql_query("SELECT * FROM sanpham WHERE img = '$logo3'");
			 			if(isset($query_link3)){
							while($get_link3 = mysql_fetch_array($query_link3)){
							$link3 = $get_link3['ID_SP'];
						} 
						
						}
					?>
		<li><a href="view/product.php?id=<?=$link3?>" target="_blank"><img src="img/<?= $logo3?>" alt="Sản phẩm hot" title="Sản phẩm hot" id="wows1_2"/></a></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Sản phẩm hot"><span><img src="img/<?= $logo1?>" style="height: 50px" alt="Sản phẩm hot"/>1</span></a>
		<a href="#" title="Sản phẩm hot"><span><img src="img/<?= $logo2?>" style="height: 50px" alt="Sản phẩm hot"/>2</span></a>
		<a href="#" title="Sản phẩm hot"><span><img src="img/<?= $logo3?>" style="height: 50px" alt="Sản phẩm hot"/>3</span></a>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="col-sm-3 banner-mat">
				<?php 
						$query_get_img = "SELECT * FROM banner WHERE ten_banner = 'right_banner'";
						$sql = mysql_query($query_get_img);
						while($row = mysql_fetch_array($sql)){
							$logo = $row['img_banner'];
						}
					?>
		<img class="img-responsive" src="img/<?= $logo?>" alt="" style=" height : 422; width: 422;margin-top: 5px">
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1 >Ốp điện thoại đẹp</h1>
			<div class="content-top1">
			<!--Phân trang-->
				<?php
					$query_get_all = mysql_query("SELECT * FROM sanpham ORDER BY date_in DESC");
					$so_item  = mysql_num_rows($query_get_all);
			 		$so_trang = ceil($so_item/8);
			 		
					
			 		//Lấy 8 tin 1
			 		if(isset($_GET['page'])){
						$from = ($_GET['page']-1)*8;
			 			$query_get_8 = mysql_query("(SELECT * FROM sanpham ORDER BY ID_SP DESC) LIMIT $from, 8");
			 			while($item_8 = mysql_fetch_array($query_get_8)){
							?>
							<!---->
								<div class="col-md-3 col-md2">
								         <div class="col-md1 simpleCart_shelfItem">
									       <a href="view/product.php?id=<?=$item_8['ID_SP']?>">
										   <img class="img-responsive" src="img/<?= $item_8['img'] != ''? $item_8['img']:'case_empty.png'?>" />
									       </a>
									<h3><a href="view/product.php?id=<?=$item_8['ID_SP']?>"> <?= $item_8['TenSP']?></a></h3>
										
									<div class="price">
											
											<a href="?page=<?=$_GET['page']?>&add=<?=$item_8['ID_SP']?>" class="item_add" onClick="add_to()">Thêm vào giỏ</a>
											<div class="clearfix"> </div>
									</div>
								</div>
							</div>		
							
							<!---->
							<?php
								include_once('model/add_to.php');
						}
					}else{
						$query_get_8 = mysql_query("(SELECT * FROM sanpham ORDER BY ID_SP DESC) LIMIT 0, 8");
			 			while($item_8 = mysql_fetch_array($query_get_8)){
							?>
								<!---->
								<div class="col-md-3 col-md2">
								         <div class="col-md1 simpleCart_shelfItem">
									       <a href="view/product.php?id=<?=$item_8['ID_SP']?>">
										   <img class="img-responsive" src="img/<?= $item_8['img'] != ''? $item_8['img']:'case_empty.png'?>" />
									       </a>
									<h3><a href="view/product.php?id=<?=$item_8['ID_SP']?>"> <?= $item_8['TenSP']?></a></h3>
									<div class="price">
											
											<a href="index.php?page=0&add=<?=$item_8['ID_SP']?>" class="item_add">Thêm vào giỏ</a>
											<div class="clearfix"> </div>
									</div>
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
							echo"<a href='index.php?page=$t'>Trang $t</a><a>&nbsp|&nbsp</a>";
						}
						}}
		else{
			echo("<b>Trang 1 </b>");
			for($t = 2; $t<= $so_trang; $t++){
				echo"<a href='index.php?page=$t'>Trang $t</a><a>&nbsp|&nbsp</a>";
			}
		}
		
		?>
		<br>
		<div align="center">
		
			<h1><br>Feedback của khách hàng</h1><br>
			
			<!---->
		  <section class="variable slider" style="height: 50%">
			  <?php
				$query_get_feedback = mysql_query("SELECT * FROM feedback");
				while($row_feedback = mysql_fetch_array($query_get_feedback)){
					$img_feedback = $row_feedback['img_feedback'];
					?>
					<div>
      					<img src="img/<?= $img_feedback?>" style="height: 300px; width: auto">
    				</div>
    				<?php
				}
			?>
			  
  </section>

  
  <script src="slick-1.6.0/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {

      $(".variable").slick({
		 autoplay: true,
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>
		</div>
			


	</div>
	
	
</div>


<!--//content-->
<div align="center"><div class="fb-like" data-href="https://www.facebook.com/pocartcase/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>
<!--footer-->
<div class="clearfix"> </div>
				<p class="footer-class"> © 2017 Pocart Case | Produce by <a style="color: aquamarine">MARCH</a></p>
				<br>
				<br>
			</div>
<!--//footer-->

</body>
</html>