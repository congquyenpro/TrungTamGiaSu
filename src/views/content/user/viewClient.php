<table>
  <a href="<?php echo $actual_link ?>/admin/client" style="margin-left: 50px;">Danh sách khách hàng chờ liên lạc</a>
  <br>
  <a href="<?php echo $actual_link ?>/admin/client/0" style="margin-left: 50px;">Danh sách khách hàng không thể liên lạc được</a>
  <br>
  <a href="<?php echo $actual_link ?>/admin/client/2" style="margin-left: 50px;">Danh sách khách hàng đã liên lạc</a>
  <tr>
    <th style="text-align: center">id</th>
    <th style="text-align: center">Họ Và Tên</th>
    <th style="text-align: center">Giới Tính</th>
    <th style="text-align: center">Số điện thoại</th>
    <th style="text-align: center">Email</th>
    <th style="text-align: center">Địa chỉ</th>
    <th style="text-align: center">Liên lạc</th>
  </tr>
  <?php foreach ($data[0] as $client) { ?>
    <tr>
        <td style="text-align: center">
            <?= $client['id'] ?>
        </td>
        <td>
            <?= $client['name'] ?>
        </td>
        <td style="text-align: center">
            <?php if ($client['gender'] == 0){
                echo "Chị";
            }else{
                echo "Anh";
            }
            ?>
        </td>
        <td style="text-align: center">
            <?= $client['phone'] ?>
        </td>
        <td>
            <?= $client['email'] ?>
        </td>
        <td>
            <?= $client['address'] ?>
        </td>
        <td style="text-align: center">
            <a href="<?php echo $actual_link ?>/admin/set_client/<?= $client['id']?>/2">
                Đã liên lạc
            </a>
            <br>
            <a href="<?php echo $actual_link ?>/admin/set_client/<?= $client['id']?>/0">
                Không thể liên lạc
            </a>
        </td>
    </tr>
  <?php } ?>
</table>