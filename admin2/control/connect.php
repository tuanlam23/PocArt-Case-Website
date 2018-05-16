<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$conn = mysqli_connect('localhost', 'root', '',"casemobile") or die('Error connection!');
	mysqli_query($conn,"set names 'utf8'");
?>