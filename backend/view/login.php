
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Dashboard - Admin Template</title>
<link rel="stylesheet" type="text/css" href="../../admin/css/theme.css">
<link rel="stylesheet" type="text/css" href="../../admin/css/style.css">
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="../../admin/css/' + StyleFile + '">');
</script><link rel="stylesheet" type="text/css" href="../../admin/css/theme.css">

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
</head>

<body>
	<div id="container">
    	<div id="header">
        	<h2><a href="#" style="color: white">POCART CASE ADMIN</a></h2>
    <div id="topmenu">
            	<ul>
                	<li class="current"></li>
                    <li></li>
                	<li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
              </ul>
          </div>
      </div>
<div id="wrapper">
      <div id="content">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
</div>
       <!---->
       <table width="76%">
       <form action="../controller/action_login.php" method="post">
       	<tr>
       		<td width="50%">
       			LOGIN<br>
       			<table>
       				<tr>
       					<td width="16%">
       						User:
       					</td>
       					<td width="84%">
       						<input type="text" name="user_login">
       					</td>
       				</tr>
       				<tr>
       					<td>
       						Password:
       					</td>
       					<td>
       						<input type="password" name="password_login">
       					</td>
       				</tr>
       				<tr>
       					<td>
       						<input type="submit" name="btn_login">
       					</td>
       				</tr>
       			</table>
       		</td>
       		<td width="50%">
       			SIGN UP<br>
       			<table>
       				<tr>
       					<td width="31%">
       						User:
       						
       					</td>
       					<td width="69%">
       						<input type="text" name="user_signup">
       					</td>
					</tr>
      				<tr>
       					<td>
       						Password:
       					</td>
       					<td>
       						<input type="password" name="password_signup">
       					</td>
					</tr>
      				<tr>
       					<td>
       						Re-Password:
       					</td>
       					<td>
       						<input type="password" name="password_signup_2">
       					</td>
       						
       				</tr>
       				<tr>
       					<td>
       						<input type="submit" name="btn_signup">
       					</td>
       				</tr>
       			</table>
       		</td>
       	</tr>
       	</form>
       </table>
       
       
       <!---->
        <div id="footer">
<div id="styleswitcher">
        <ul>
                <li><a href="javascript: document.cookie='theme='; window.location.reload();" title="Default" id="defswitch">d</a></li>
                <li><a href="javascript: document.cookie='theme=1'; window.location.reload();" title="Blue" id="blueswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=2'; window.location.reload();" title="Green" id="greenswitch">g</a></li>
                <li><a href="javascript: document.cookie='theme=3'; window.location.reload();" title="Brown" id="brownswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=4'; window.location.reload();" title="Mix" id="mixswitch">m</a></li>
            </ul>
        </div><br>

        </div>
</div>




</body></html>


