<html>
<head>
	<meta charset="utf-8">
	<title>Thêm mới Sinh viên</title>
</head>
<body>
	<div class="content">
		<div class="dangkithanhvien">
			<h3>Thêm mới thành viên</h3>
			<form action="" method="post">
				<table>
					<tr>
						<td>Số Báo Danh:</td>
						<td><input type="text" name="sbd" placeholder="Số báo danh" required=""></td>
					</tr>
					<tr>
						<td>Họ tên: </td>
						<td><input type="text" name="hoten" placeholder="Tên thành viên" required=""></td>
					</tr>
					<tr>
						<td>Địa chỉ: </td>
						<td><input type="text" name="diachi" placeholder="Địa chỉ" required=""></td>
					</tr>
					<tr>
						<td>Diện ưu tiên: </td>
						<td>
							<label><input type="radio" name="uutien" value="0"><span>Không ưu tiên</span></label>
							<label><input type="radio" name="uutien" value="1"><span>Ưu tiên</span></label>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Thêm mới"></td>
					</tr>
				</table>
			</form>
			<?php

				if(isset($thanhcong) && in_array('add_success', $thanhcong)) {
					echo "<p style='color:green;text-align:center'>Thêm mới thành công.</p>";
					echo "<p style='text-align:center'><a href='index.php?controller=thanh-vien&action=thanh-vien'>Quay về trang chủ</a></p>";
				}

			?>
		</div>
	</div>
</body>
</html>