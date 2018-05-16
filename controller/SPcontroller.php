<?php
	include_once('model/SanPham.php');
	class SpController{
		public function getSanPham(){
			$getSP = new SanPham();
			$SanPham = $getSP -> getAllContent();
			return $SanPham;
		}
	}
?>