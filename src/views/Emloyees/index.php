<?php
//file hiển thị thông báo lỗi
require_once 'views/commons/error.php';
?>
<a href="index.php?controller=Employee&action=add">
    Thêm nhân viên mới 
</a>
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
    <?php if (!empty($Employees)): ?>          <!-- bien books nay truyen tu BookController.php sang -->
        <?php foreach ($Employees AS $Employee) : ?>
            <tr>
                <td><?php echo $Empoyee['maNV'] ?></td>
                <td><?php echo $Employee['hovaten'] ?></td>
                <td><?php echo $Employee['chucvu'] ?></td>
                <td><?php echo $Employee['phongban'] ?></td>
                <td><?php echo $Employee['luong'] ?></td>
                <td><?php echo $ngayvaolam['ngayvaolam'] ?></td>
               
                <td>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=Employee&action=detail&maNV=" . $Employee['maNV'];
                    $urlEdit =
                        "index.php?controller=Employee&action=edit&maNV=" . $Employee['maNV'];
                    $urlDelete =
                        "index.php?controller=Employee&action=delete&maNV=" . $Employee['maNV'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Sửa</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>