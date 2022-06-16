<?php 
// SELECT ten_nhanvien FROM tbl_chitiet_phongban,tbl_nhanvien WHERE tbl_chitiet_phongban.id_phongban = 3
$id = $_GET['id'];
$nhanvien_select = "SELECT * FROM tbl_nhanvien WHERE tbl_nhanvien.id_phongban = $id";
$nhanvien_query = mysqli_query($mysqli, $nhanvien_select);

$phongban_select = "SELECT * FROM tbl_phongban WHERE tbl_phongban.id_phongban = $id";
$phongban_query = mysqli_query($mysqli, $phongban_select);
$phongban_row = mysqli_fetch_array($phongban_query);
?>


<!-- danh sach nhân viên -->
<div class="content__body__heading">
    <h1 class="content__body__heading"><?php echo $phongban_row['ten_phongban'] ?></h1>
    <a href="?quanly=nhanvien&query=them&id=<?php echo $id ?>"
        class="content__body__heading-link">Thêm nhân viên<i
            class="icon-m content__body__heading-link-btn ti-plus"></i></a>
    <!-- <a href="?quanly=phongban&query=danhsach&id=<?php echo $id ?>" class="content__body__heading-link"><i class="icon-m content__body__heading-link-btn ti-back-left"></i></a> -->
    <!-- select them id_donvi de back ve  -->
</div>
<p class="content__body__desc">Danh sách: Nhân viên</p>
<form action="">
    <table class="content__body__table" border="1px">
        <thead>
            <tr>
                <td>ID</td>
                <td>Tên nhan viên</td>
                <td>Email Nhân viên</td>
                <td>Gioi tinh</td>
                <td>Tài khoản nhân viên</td>
                <td>Chức vụ</td>
                <td>Chi tiết</td>
                <td>Cập nhật</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($nhanvien_row = mysqli_fetch_array($nhanvien_query))
                {
            ?>
            <tr>
                <td><?php  echo $nhanvien_row['id_nhanvien'] ?></td>
                <td><?php  echo $nhanvien_row['ten_nhanvien'] ?></td>
                <td><?php  echo $nhanvien_row['email_nhanvien'] ?></td>
                <td>
                    <?php  
                    if($nhanvien_row['gioitinh_nhanvien'] == 'nam'){
                        echo "Nam";
                    }
                    else{
                        echo "Nữ";
                    }
                ?>
                </td>
                <td><?php  echo $nhanvien_row['taikhoan_nhanvien'] ?></td>
                <td>
                    <?php  
                    if($nhanvien_row['chucvu_nhanvien'] == '0'){
                        echo "Quản lý";
                    }
                    elseif($nhanvien_row['chucvu_nhanvien'] == '1'){
                        echo "Tổ trưởng";
                    }
                    else{
                        echo "Nhân viên";
                    }
                    ?>
                </td>

                <td>
                    <a href="?quanly=nhanvien&query=chitiet&id=<?php echo $nhanvien_row['id_nhanvien'] ?>"
                        class="a-defaul">
                        <i class="icon-s ti-eye"></i>
                    </a>
                </td>
                <td>
                    <a href="?quanly=nhanvien&query=sua&id=<?php echo $phongban_row['id_phongban'] ?>&idnv=<?php echo $nhanvien_row['id_nhanvien']?>"
                        class="a-defaul">
                        <i class="icon-s ti-pencil"></i>
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</form>