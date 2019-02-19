<html>
<head>
	<meta charset="utf-8">
	<title>Thêm mới Sinh viên</title>
</head>
<body>
	<div class="dangkithanhvien">
		<h3>Thêm mới thành viên</h3>
		<form action="" method="post">
			<table>
				<tr>
					<td>Số Báo Danh:</td>
					<td><input type="text" name="sbd" placeholder="Số báo danh"></td>
				</tr>
				<tr>
					<td>Họ tên: </td>
					<td><input type="text" name="hoten" placeholder="Tên thành viên"></td>
				</tr>
				<tr>
					<td>Địa chỉ: </td>
					<td><input type="text" name="diachi" placeholder="Địa chỉ"></td>
				</tr>
				<tr>
					<td>Diện ưu tiên: </td>
					<td>
						<label><input type="radio" name="uutien" value="0">Không ưu tiên</label>
						<label><input type="radio" name="uutien" value="1">Ưu tiên</label>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="Thêm"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>