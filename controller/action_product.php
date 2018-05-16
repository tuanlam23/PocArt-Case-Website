<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('../model/connect.php');
	
	if(isset($_POST['btn_muangay'])){
		$id_kieu = $_POST['select_kieu'];
		echo($id_kieu);
	}

	if(isset($_POST['sel'])){
		echo($id_kieu);
	}




?>