<html>
<head>
	<meta charset="utf-8">
	<title>Thêm mới Sinh viên</title>
	<link rel="stylesheet" href="public/css/plugin/bootstrap.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="public/css/style.css">
	<script src="public/js/plugin/bootstrap.js"></script>
	<script src="public/js/plugin/jquery-3.3.1.js"></script>
</head>
<body>
</body>
</html>

<?php

	include_once('Model/DBConfig.php');
	$db = new Database;
	$db->connect();

	if(isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	} else {
		$controller = "";
	}

	switch ($controller) {
	 	case 'thanh-vien':
	 		include_once('Controller/thanhvien/index.php');
	 		break;
	 } 
?>