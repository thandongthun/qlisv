<?php

if(isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = "";
	}
	$thanhcong = array();
	switch ($action) {
	 	case 'them-sv':
	 		if(isset($_POST['submit'])) {
	 			$sbd = $_POST['sbd'];
	 			$hoten = $_POST['hoten'];
	 			$diachi = $_POST['diachi'];
	 			$uutien = $_POST['uutien'];

	 			if($db->InsertData($sbd, $hoten, $diachi, $uutien)) {
	 				$thanhcong[] = 'add_success';
	 			}
	 		}
	 		include_once('View/thanhvien/them_sv.php');
	 		break;
	 	case 'sua-sv':
	 		include_once('View/thanhvien/sua_sv.php');
	 		break;
	 	case 'xoa-sv':
	 		include_once('View/thanhvien/xoa_sv.php');
	 		break;
	 	case 'danh-sach':
	 		$model = new Database();
	 		// $sql = "SELECT * FROM `sinhvien`";
 			// $sv = $model->getAllData($sql);
 			$sv = $model->get_all('sinhvien');
	 		include_once('View/thanhvien/danhsach_sv.php');
	 		break;
	 	default:
	 		include_once('View/thanhvien/danhsach_sv.php');
	 		break;
	 } 
?>