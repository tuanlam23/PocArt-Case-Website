<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$inactive = 1800; 
	ini_set('session.gc_maxlifetime', $inactive);
    session_start();
	include_once('all_post.php');
	
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="../admin/css/theme.css" />
<link rel="stylesheet" type="text/css" href="../admin/css/style.css" />
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="css/' + StyleFile + '">');
</script>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
</head>
<?php
	if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
	}
	$_SESSION['testing'] = time();
	if(isset($_SESSION['ss_user']) && $_SESSION['ss_user'] != null){
		
	
?>
<body>
<?php
	//echo($_SESSION['ss_user']); die();
	?>
	<div id="container">
    	<div id="header">
        	<h2><a href="../index.php" style="color: white">POCART CASE ADMIN</a></h2>
    <div id="topmenu">
            	<ul>
                	<li class="current"><a href="index.php">Trang chủ</a></li>
                    <li><a href="#">Orders</a></li>
                	<li><a href="users.html">Users</a></li>
                    <li><a href="#">Manage</a></li>
                    <li><a href="#">CMS</a></li>
                    <li><a href="#">Statistics</a></li>
                    <li><a href="#">Settings</a></li>
              </ul>
          </div>
      </div>
        <div id="top-panel">
            <div id="panel">
                <ul><form action="all_post.php" method="post">
                    <li><a href="../backend/view/QLSanPham.php" class="report" target="iframe">Thêm sản phẩm</a></li>
                    <li><a href="../backend/view/DanhSachSP.php" target="iframe" class="cart">Products</a></li>
                    <li><a href="../backend/view/cate.php" target="iframe" class="folder">Product categories</a></li>
                    <li><a href="../backend/view/search.php" class="search" target="iframe">Search</a></li>
                    <li><button type="submit" name="btn_out" value="0">Logout</button></form></li>
                    
                </ul>
            </div>
      </div>
        <div id="wrapper">
            <div id="content">
              <div id="infowrap">
                <iframe src="../backend/view/QLSanPham.php" name="iframe" width="100%" height="400px" frameborder="0"></iframe>
              </div>
            </div>
            <div id="sidebar">
  				<ul>
                	<li><h3><a href="index.php" class="house">Trang chủ</a></h3>
                        <ul>
                        	<li><a href="../backend/view/QLSanPham.php" class="report" target="iframe">Thêm sản phẩm</a></li>
                    		<li><a href="#" class="report">Sales Report</a></li>
                            <li><a href="../backend/view/search.php" class="search" target="iframe">Search</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="#" class="folder_table">Orders</a></h3>
          				<ul>
                        	<li><a href="#" class="addorder">New order</a></li>
                          <li><a href="#" class="shipping">Shipments</a></li>
                            <li><a href="#" class="invoices">Invoices</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="#" class="manage">Manage</a></h3>
          				<ul>
                            <li><a href="view/page.php" class="manage_page" target="iframe">Pages</a></li>
                            <li><a href="../backend/view/DanhSachSP.php" target="iframe" class="cart">Products</a></li>
                            <li><a href="../backend/view/cate.php" target="iframe" class="folder">Product categories</a></li>
            				<li><a href="../backend/view/kieu.php" class="promotions" target="iframe">Kiểu</a></li>
                        </ul>
                    </li>
                  <li><h3><a href="#" class="user">Users</a></h3>
          				<ul>
                            <li><a href="#" class="useradd">Add user</a></li>
                            <li><a href="#" class="group">User groups</a></li>
            				<li><a href="#" class="search">Find user</a></li>
                            <li><a href="#" class="online">Users online</a></li>
                        </ul>
                    </li>
				</ul>       
          </div>
      </div>
        <div id="footer">
        <div id="credits">
   		<p>Pocart Case | Produce by <a style="color: aquamarine">MARCH</a></p>
        </div>
        <div id="styleswitcher">
            <ul>
                <li><a href="javascript: document.cookie='theme='; window.location.reload();" title="Default" id="defswitch">d</a></li>
                <li><a href="javascript: document.cookie='theme=1'; window.location.reload();" title="Blue" id="blueswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=2'; window.location.reload();" title="Green" id="greenswitch">g</a></li>
                <li><a href="javascript: document.cookie='theme=3'; window.location.reload();" title="Brown" id="brownswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=4'; window.location.reload();" title="Mix" id="mixswitch">m</a></li>
                <li><a href="javascript: document.cookie='theme=5'; window.location.reload();" title="Mix" id="defswitch">m</a></li>
            </ul>
        </div><br />

        </div>
</div>
</body>

<?php
	}else{
		header('Location: view/login.php');
	}
		?>
</html>


