
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
										while($cate = mysqli_fetch_array($conn,$query_get_cate)){
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
				<li><a  href="#">Đăng ký cộng tác viên</a></li>
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
   	    

		
			<br><br>
				<h3 align="center">CỘNG TÁC VIÊN POCARTCASE</h3><br>
<h3>GIỚI THIỆU SƠ LƯỢC VỀ POCARTCASE</h3><br>
<p><strong><a href="http://www.POCARTCASE.com/" target="_blank">POCARTCASE.COM</a></strong> là 1 online shop chuyên cung cấp dịch vụ sản xuất ốp, skin cho theo yêu cầu cho hàng trăm dòng máy điện thoại và laptop. Nhận được nhiều phản hồi tích cực từ khách hàng nhờ chất lượng sản phẩm tốt và thái độ phục vụ. Để mở mạng lưới rộng hơn với khách hàng, POCARTCASE tuyển cộng tác viên, số lượng có hạn!<br>
</p>
<p><strong><br>
Cộng tác viên quảng bá sản phẩm ốp lưng điện thoại in hình theo yêu cầu.</strong></p><br>

<ul>
<h4>Ưu&nbsp;điểm:</h4><br>
<ul>
<li>Bắt đầu biết đến <strong>kinh doanh thực sự</strong> là gì.</li>
<li>Vốn ban đầu không cần nhiều, chỉ 80k đã có thể khởi nghiệp</li>
<li>Không cần bận tâm khâu nhập hàng, sản xuất, giao hàng, thu tiền.</li>
<li>Làm việc online tại bất kỳ đâu.</li>
<li>Được giải đáp, hỗ trợ về mẫu thiết kế và kỹ năng marketing gia tăng doanh số.</li>
<li>Thu nhập <strong>không giới hạn</strong>&nbsp;(tùy thuộc vào năng lực).</li>
<li>Sản phẩm tại POCARTCASE luôn đạt <strong>chất lượng và dịch vụ tốt</strong>, POCARTCASE chịu trách nhiệm với bất kỳ lỗi phát sinh ở khâu sản xuất.</li>
<li>Hoa hồng được đối soát và thanh toán <strong>minh bạch</strong>.</li>
</ul><br>
<h4>Nhược&nbsp;điểm:</h4><br>
<ul>
<li>Có rủi ro: Vì đặc thù<strong> sản phẩm sản xuất theo yêu cầu</strong> và <strong>thanh toán khi nhận hàng</strong> nên nếu khách&nbsp;không&nbsp;nhận hàng (không phải vì lý do kỹ thuật) thì CTV sẽ phải chịu phần thiệt hại đó&nbsp;(giá vốn ốp và phí vận chuyển)</li>
<li>Phương thức thanh toán khi nhận hàng nên tiền thu hộ&nbsp;nhận từ dịch vụ&nbsp;ship về và đối soát đơn hàng sẽ mất vài tuần đến một tháng để đối soát và thanh toán hoa hồng.</li><br>
</ul>
</li>
</ul>
<p><strong>TẤT CẢ NHỮNG GÌ BẠN CẦN LÀ:</strong></p><br>
<ul>
<li>Máy tính và smart phone để hoạt động kinh doanh.</li>
<li>Kỹ năng giới thiệu sản phẩm đến khách hàng, internet marketing.</li>
<li>Biết thiết kế cơ bản và tìm mẫu thích hợp.</li>
<li>Kỹ năng chăm sóc khách hàng, trả lời tin nhắn đặt hàng.</li>
</ul><br>
<p><strong>CƠ HỘI KHI TRỞ THÀNH ĐỐI TÁC THẬM CHÍ LÀ THÀNH VIÊN CỦA POCARTCASE:</strong></p><br>
<ul>
<li>Chiết khấu hấp dẫn. (ít nhất là 40k/sp)</li>
<li>Sản phẩm chất lượng (điều này quan trọng để có sự uy tín tồn tại lâu dài)</li>
<li>Được giải đáp thắc mắc, học hỏi thêm về kỹ năng marketing online.</li>
</ul><br>
<h3>CHI TIẾT CÔNG VIỆC:</h3>
<ol>
<li>CTV quảng bá sản phẩm</li>
<li>Nhận đơn đặt hàng từ khách hàng</li>
<li>Chuyển đơn hàng cho POCARTCASE kèm giá tiền cần thu hộ</li>
<li>POCARTCASE sẽ sản xuất, liên kết dịch vụ giao hàng, giao đến tay khách và nhận thanh toán từ khách hàng.</li>
<li>Tiền hoa hồng sẽ thanh toán lại cho CTV sau khi đối soát vào hai đợt, ngày 15 và ngày 29 hàng tháng.</li>
</ol>
<p><em><span style="text-decoration: underline;">Để đăng ký trở thành cộng tác viên của <strong>POCARTCASE&nbsp;</strong>và nhận email&nbsp;hướng dẫn, báo giá cụ thể, vui lòng hoàn thành các trường thông tin bên dưới:</span></em>.</p>
<p><!-- Begin MailChimp Signup Form --></p>

			
			


   	    
   	    <!---->
   	    
    	    
		  

	
	
	<div class="contact">
			<div class="container">
				<h5 style="text-align: center;font-size: 30">
   	    	Thông tin liên hệ<br><br>
   	    </h5>
				<form action="../controller/action_ctv.php" method="post">
				<div class="contact-grids">
					<div class="contact-form">
							
								
							
								<div class="contact-bottom-top">
									<span>Họ tên *</span>
									<input type="text" name="ho_ten" style="width: 100%; height: 40" style="color: black">	
									<br><br><span>Số điện thoại *</span>
									<input type="text" name="phone" style="width: 100%; height: 40" style="color: black">
									<br><br><span>Địa chỉ email *</span>
									<input type="text" name="email" style="width: 100%; height: 40" style="color: black">
									<br><br><span>Địa chỉ facebook *</span>
									<input type="text" name="fb" style="width: 100%; height: 40" style="color: black">	
									<br><br><span>Năm sinh *</span>
									<input type="text" name="DOB" style="width: 100%; height: 40" style="color: black">
									
																					
									</div>
								<input type="submit" name="dang_ky" value="ĐĂNG KÝ" style="background-color: #535353">
								
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