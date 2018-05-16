 <?php
 	error_reporting(E_ALL ^ E_DEPRECATED);
 	$conn = mysqli_connect('localhost', 'root', '','casemobile') or die('Error connection!');
 	//$sql = mysqli_select_db('casemobile') or die('Error DB!');
 	mysqli_query($conn,"set names 'utf8'");
 ?> 

<!--  <?php
/*$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="casemobile";
$sql=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
mysqli_set_charset($sql, 'UTF8');
if($sql){
	$setLang=mysqli_query($sql," SET NAMES 'utf8");
}
else {
	die("KET NOT THAT BAI".mysqli_connect_error());
}*/
?> -->