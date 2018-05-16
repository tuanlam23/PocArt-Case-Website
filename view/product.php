
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
					<img src="../img/giflogo.gif" style="width: 50px; z-index: 1; position: absolute; ">
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


<!--//content-->

							<div class="single">

<div class="container">
<div class="col-md-10">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    
		        <!--Lấy thông tin sản phẩm-->
						<?php
							if(isset($_GET['id'])){
								$id = $_GET['id'];
							} else $id = 0;
							$query_get_sp =mysqli_query($conn,"SELECT * FROM sanpham WHERE ID_SP = ".$id);
							while($sp = mysqli_fetch_array($query_get_sp)){
								$TenSP = $sp['TenSP'];
								$sanpham_detail = $sp['sanpham_detail'];
								$img = $sp['img'];
								$id_cate = $sp['id_cate'];
								
							}
							if($img ==''){
								$img = 'case_empty.png';
							}
							?>
			        <div class="thumb-image"> <img src="../img/<?=$img?>" data-imagezoom="true" class="img-responsive"> </div>
			    

			  </ul>
		</div>
	</div>	
<div class="col-md-5 single-top-in">
						<div class="single-para simpleCart_shelfItem">
						
						<!---->
							<h1 style="color: black"><?=$TenSP?></h1>
							
							<div class="star-on">
								<svg height="20" width="50">
  										<line x1="0" y1="00" x2="50" y2="0" style="stroke:#535353;stroke-width:8" />
  
								</svg>
								<br><p>
									
										
								
								</p>

							
							</div>
							<ul style="list-style-type: circle">
										<li>
											Mẫu thiết kế áp dụng với hơn <b>600</b> dòng máy <br>(Xem Danh sách dòng máy tại đây).
										</li>
										<li>
											Chất liệu nhựa cao cấp, hình in vĩnh viễn.
										</li>
										<li>
											Thanh toán khi nhận hàng toàn quốc.
										</li>
										<li>
											Miễn phí vận chuyển với đơn hàng từ 02 sản phẩm.
										</li>
										<br>
											Bạn có thể đặt hàng trên web hoặc nhận sự tư vấn qua Facebook ở box chat bên dưới.
										
									</ul>
								
							
							<div class="available">
								<h6 style="color: black">Loại :</h6>
								<ul>
								<!--Lấy kiểu-->
								<li><form  action="../view/check.php" method="post"><select name="select_kieu" id="syn_list" onChange="get_gia()">
								<?php
									$query_get_kieu = mysqli_query($conn,"SELECT * FROM kieu");
												   while($row = mysqli_fetch_array($query_get_kieu)){
												?>
									<option  value=<?=$row['id_kieu']?>|<?=$row['gia_kieu']?> ><?=$row['ten_kieu']?></option>
									
									<?php
										}
												   
									?>
								</select>
								<?php
									$get_first = mysqli_query($conn,"SELECT * FROM kieu WHERE id_kieu = 0");
									while($a = mysqli_fetch_array($get_first)){
										$gia_first = $a['gia_kieu'];
									}
									?>
								Giá: <a id="demo" style="font-size: 20px">  <?=$gia_first ?></a> ₫
								<script>

									function get_gia(){
										var x = $("#syn_list").val();
										var gia = x.split("|");
										document.getElementById("demo").innerHTML = gia[1];
										

									}
									
										
									</script>
									
								
					
								</li>
								
							</ul>
						</div>
							<button type="submit" name="btn_now" value=<?=$id?>>Mua ngay</button>
								
						</div>
						</form>
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">
			<p style="font-size: 20px">&nbsp;&nbsp;&nbsp;Sản phẩm bạn có thể thích:</p><br><br>
			<!--Lấy 3 sản phẩm gần sản phẩm này nhất-->
				<?php
					$query_get_num = mysqli_query($conn,"SELECT * FROM sanpham ");
									$query_max = mysqli_query($conn,"SELECT MAX(ID_SP) FROM sanpham ");
									while($tmp = mysqli_fetch_array($query_max)){
										$num = $tmp['MAX(ID_SP)'];
									}
					
					$id_lay = array($id -3,$id -2,$id -1,$id +1,$id + 2,$id + 3);
					$counter = 0;
					for($i = 0 ; $i < 6; $i++){
						if($id_lay[$i] >= 0 && $id_lay[$i]<$num){
							
							$counter = $counter + 1;
							$query_relate = mysqli_query($conn,"SELECT * FROM sanpham WHERE ID_SP = $id_lay[$i]");
							while($relate = mysqli_fetch_array($query_relate)){
								?>
													
									
									<div class="col-md-4 col-md3" style="margin-bottom: 30px">
								 <div >
							<a href="product.php?id=<?=$relate['ID_SP']?>" style="color: #535353;text-decoration: none; ">
							
							<div style="background-color: rgba(249,249,249,1.00);color: rgba(85,85,85,1.00);"><img class="img-responsive" src="../img/<?=$relate['img'] != ''?$relate['img']:'case_empty.png'  ?>" alt="" />
								<p style="font-size: 20px; margin-top: 10px; " align="center"><b><?=$relate['TenSP']?></b></p>
								<p style="margin-bottom: 10px"><a href="index.php?page=0&add=<?=$relate['ID_SP'] ?>" style="font-size: 13px"><img src="../img/cart.png" style="width: 35px">Thêm vào giỏ</a>
								
								</p>
							</div>
							
							</a>
							</div>
								
							</div>
								
								<?php
							}
						}
						if($counter ==3){
							break;
						}
					}
					
					
					
								
	
					
	
	
				?>
			
			<!---->
			

			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
			
			<!---->
			
			

		</div>
	</div>
</div>


<div align="center"><div class="fb-like" data-href="https://www.facebook.com/pocartcase/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>
<!--footer-->
<div class="clearfix"> </div>
				<p class="footer-class"> © 2017 Pocart Case | Produce by <a style="color: black">MARCH</a></p>
				<br>
				<br>
			</div>
<!--//footer-->
<!-- slide -->
<!--<script src="../web/js/jquery.min.js"></script>-->
<script src="../web/js/imagezoom.js"></script>
</body>
</html>