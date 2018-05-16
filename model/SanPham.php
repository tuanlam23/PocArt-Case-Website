<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	include_once('connect.php');
	class SanPham{
		
		
		public function getAllContent(){
			$sql = mysql_query('SELECT * FROM sanpham WHERE status = 1');
			$arrTuan = array();
			while ($arraySP = mysql_fetch_assoc($sql)){
				$arrTuan[] = $arraySP;
			}
			
			return($arrTuan);
		}
		
		public static function getSanPham($id){
			$sql = mysql_query('SELECT * FROM sanpham WHERE ID_SP = '.$id);
			$sp = mysql_fetch_assoc($sql);
			return $sp;
		}
	}
?>