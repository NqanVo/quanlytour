<?php
$id = $_GET['id'];
$phongban_select = "SELECT * FROM tbl_phongban WHERE tbl_phongban.id_phongban = $id";
$phongban_query = mysqli_query($mysqli, $phongban_select);
$phongban_row = mysqli_fetch_array($phongban_query);



?>



<div class="content__body__heading">
    <h1 class="content__body__heading-text">Thêm nhân viên: <?php echo $phongban_row['ten_phongban']?> </h1>
    <a href="?quanly=nhanvien&query=danhsach&id=<?php echo $id ?>" class="content__body__heading-link"><i class="icon-m content__body__heading-link-btn ti-back-left"></i></a>
</div>

<form action="">
    <div class="row content__body__master">
        <div class="col l-12">
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Tên nhân viên
                </h1>
                <input type="text" class="input-df content__body-form-input">
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Số điện thoại
                </h1>
                <input type="text" class="input-df content__body-form-input">
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Địa chỉ
                </h1>
                <input type="text" class="input-df content__body-form-input">
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Email
                </h1>
                <input type="email" class="input-df content__body-form-input"> 
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    CCCD/CMND
                </h1>
                <input type="text" class="input-df content__body-form-input">
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Giới tính
                </h1>
                <select name="gioitinh" class="input-df input-df-date content__body-form-input">
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                </select>
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Ngày vào làm
                </h1>
                <input type="date" class="input-df input-df-date content__body-form-input" required>
            </div>
            
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Chức vụ
                </h1>
                <select name="gioitinh" class="input-df input-df-date content__body-form-input">
                    <option value="0">Quản lý</option>
                    <option value="1">Tổ trưởng</option>
                    <option value="2">Nhân viên</option>
                </select>
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Tài khoản
                </h1>
                <input type="text" class="input-df content__body-form-input" required>
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Mật khẩu
                </h1>
                <input type="password" class="input-df content__body-form-input" required>
            </div>
            <div class="form-input content__body-form">
                <h1 class="content__body-form-text">
                    Trạng thái:
                </h1>
                <select name="" class="input-df input-df-date content__body-form-input" required>
                    <option value="1">Hoạt động</option>
                    <option value="0">Ngừng hoạt động</option>
                </select>
            </div>
            
            <input type="submit" value="Thêm" name="themnv" class="btn-m success-bg-txt content__body-btn">
        </div>
    </div>
</form>