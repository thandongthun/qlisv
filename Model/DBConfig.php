<?php

	class Database {
		private $host = "localhost";
		private $username = "root";
		private $pass = "";
		private $dbname = "demo_mvc";

		private $conn = NULL;

		public function connect() {
			$this->conn = mysqli_connect($this->host, $this->username, $this->pass, $this->dbname);
			if(!$this->conn) {
				echo "Kết nối thất bại";
				exit();
			} else {
				mysqli_set_charset($this->conn, 'utf8');
			}
			return $this->conn;
		}

		// Phương thức thi câu lệnh truy vấn
		public function execute($sql) {
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}

		// Phương thức lấy dữ liệu
		public function getData($sql) {
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}

		//Phương thức lấy toàn bộ dữ liệu
		//cach 1
		/*public function getAllData($sql) {
			$result = mysqli_query($this->connect(), $sql);
			$arr = array();
			while ($row = mysqli_fetch_array($result)) {
				$arr[] = $row;
			}
			return $arr;
		}*/
		//cach 2
		public function get_all($table){
			$sql = "Select * from " . $table;
			$result = mysqli_query($this->connect(), $sql);
			return $result;
		}

		public function nums_row($sql) {
			$result = mysqli_query($this->connect(), $sql);
			return $result; 
		}

		// Phương thức thêm dữ liệu
		public function InsertData($sbd, $hoten, $diachi, $uutien) {
			$sql = "INSERT INTO sinhvien(SBD, ho_ten, dia_chi, uu_tien) VALUES('$sbd', '$hoten', '$diachi', '$uutien')";
			return $this->execute($sql);
		}

		//Phương thức sửa dữ liệu
		public function UpdateData($hoten, $diachi, $uutien) {
			$sql = "UPDATE sinhvien SET ho_ten = '$hoten', dia_chi = '$diachi', uu_tien = '$uutien' WHERE SBD = '$sbd'";
			return $this->execute($sql);
		}

		//Phương thức xóa
		public function DeleteData($table, $sbd) {
			$sql = "DELETE FROM" . $table . "WHERE SBD = '$sbd'";
			return $this->execute($sql);
		}
	}
	
?>