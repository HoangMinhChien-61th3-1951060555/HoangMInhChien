<?php
//file hiển thị thông báo lỗi
require_once 'views/commons/error.php';
?>

<h1>HIỂN THỊ CHI TIẾT DANH SÁCH GIẢNG VIÊN</h1>
<br>

<table border="1" cellspacing="0" cellpadding="8">
    <tr>
    <th>Mã nhân viên</th>
        <th>Họ và tên</th>
        <th>Chức vụ</th>
        <th>Phòng ban</th>
        <th>Trình độ</th>
        <th>Lương</th>
        <th>Ngày vào làm</th>

    </tr>
    <?php if (!empty($Employees)): ?>      
        <?php foreach ($Employees AS $Employee) : ?>
            <tr>
            <td><?php echo $Empoyee['maNV'] ?></td>
                <td><?php echo $Employee['hovaten'] ?></td>
                <td><?php echo $Employee['chucvu'] ?></td>
                <td><?php echo $Employee['phongban'] ?></td>
                <td><?php echo $Employee['luong'] ?></td>
                <td><?php echo $ngayvaolam['ngayvaolam'] ?></td>
                
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>