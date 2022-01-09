<div style="color: red">
    <?php echo $error; ?>
</div>
<h1>
    Sửa Nhân viên
</h1>

<form action="" method="post">
    Mã nhân viên :
    <input type="number"
           name="maNV"
           value="<?php
           echo isset($_POST['maNV']) ? $_POST['maNV'] : $Employee['maNV']?>"
    />
    <br />
    Họ và tên :
    <input type="text"
           name="hovaten"
           value="<?php
           echo isset($_POST['hovaten']) ? $_POST['hovaten'] : $Employee['hovaten']?>"
    />
    <br />
    

    Chức vụ :
    <input type="text"
           name="chucvu"
           value="<?php
           echo isset($_POST['chucvu']) ? $_POST['chucvu'] : $Employee['chucvu']?>"
    />
    <br />
    
    Phòng ban : 
    <input type="text"
           name="phongban"
           value="<?php
           echo isset($_POST['phongban']) ? $_POST['phongban'] : $Employee['phongban']?>"
    />
    <br />
   Luong :
    <input type="number"
           name="luong"
           value="<?php
           echo isset($_POST['luong']) ? $_POST['luong'] : $Employee['luong']?>"
    />
    <br />
    Ngày vào làm:
    <input type="date"
           name="ngayvaolam"
           value="<?php
           echo isset($_POST['ngayvaolam']) ? $_POST['ngayvaolam'] : $Employee['ngayvaolam']?>"
    />
    
    <input type="submit" name="submit" value="Update" />
</form>