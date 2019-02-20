<?php
  include_once('Model/DBConfig.php');
  /*$model = new Database();
  $sv = $model->getAllData("SELECT * FROM `sinhvien`");*/
?>
<div class="danhsach">
	<h3>Danh sách Sinh Viên</h3>
	<table class="table table-bordered">
    <thead>
      <tr>
        <td colspan="5">
          <a href="index.php?controller=thanh-vien&action=them-sv">
              <span style="text-align: center;">Thêm mới Sinh Viên</span>
          </a>
        </td>
      </tr>
      <tr>
        <th>SBD</th>
        <th>Họ Tên</th>
        <th>Địa chỉ</th>
        <th>Diện ưu tiên</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <?php

      foreach ($sv as $value) {
        if($value['uu_tien'] == 0) {
          $ut = "Không ưu tiên";
        }
        if($value['uu_tien'] == 1) {
          $ut = "Ưu tiên";
        }
        echo "<tr>";
          echo "<td>".$value['SBD']."</td>";
          echo "<td>".$value['ho_ten']."</td>";
          echo "<td>".$value['dia_chi']."</td>";
          echo "<td>".$ut."</td>";
          echo "<td>";
        ?>
          <a href=""><i class="fa fa-file-archive-o icon" aria-hidden="true" title="Nhập điểm"></i></a>
          <a href="index.php?controller=thanh-vien&action=sua-sv&sbd=<?php echo $value['SBD']; ?>"><i class="fa fa-pencil icon" aria-hidden="true" title="Sửa thông tin"></i></a>
          <a href=""><i class="fa fa-trash-o icon" aria-hidden="true" title="Xóa"></i></a>
        <?php
          echo "</td>";
          echo "</tr>";
      }

    ?>
    </tbody>
  </table>
</div>