<h1>
    Thêm nhân viên
</h1>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<form method="post" action="">
    Mã nhân viên :
    <input type="number" name="maNV" value="" />
    <br />

    Họ và tên :
    <input type="text" name="hovaten" value="" />
    <br />

    Chức vụ:
    <input type="text" name="chucvu" value="" />
    <br />
    
    Phòng ban: 
    <input type="text" name="phongban" value="" />
    <br />

    Lương :
    <input type="number" name="luong" value="" />
    <br />

   Ngày vào làm :
    <input type="date" name="ngayvaolam" value="" />
    <br />
    <input type="submit" name="submit" value="Save" />
</form>
