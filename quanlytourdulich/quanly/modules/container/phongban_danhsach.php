<?php 
$id = $_GET['id'];
$phongban_select = "SELECT * FROM tbl_phongban WHERE tbl_phongban.id_donvi = $id";
$phongban_query = mysqli_query($mysqli, $phongban_select);

$donvi_select = "SELECT ten_donvi FROM tbl_donvi WHERE tbl_donvi.id_donvi = $id";
$donvi_query = mysqli_query($mysqli, $donvi_select);
$donvi_row = mysqli_fetch_array($donvi_query);

// SELECT ten_phongban FROM tbl_chitiet_donvi,tbl_phongban WHERE tbl_chitiet_donvi.id_donvi = 1
?>



<!-- danh sach phòng ban -->
<div class="content__body__heading">
    <h1 class="content__body__heading"><?php echo $donvi_row['ten_donvi'] ?></h1>
    <!-- <a href="" class="content__body__heading-link"><i class="icon-m content__body__heading-link-btn ti-trash"></i></a> -->
</div>
<p class="content__body__desc">Danh sách: phòng ban</p>
<form action="">
    <table class="content__body__table" border="1px">
        <thead>
            <tr>
                <td>Tên Phòng Ban</td>
                <td>Danh sách nhân viên</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($phongban_row = mysqli_fetch_array($phongban_query))
                {
            ?>
            <tr>
                <td><?php  echo $phongban_row['ten_phongban'] ?></td>
                <td>
                    <a href="?quanly=nhanvien&query=danhsach&id=<?php echo $phongban_row['id_phongban'] ?>"
                        class="a-defaul">
                        <i class="icon-s ti-eye"></i>
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</form>