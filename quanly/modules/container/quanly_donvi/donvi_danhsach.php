<?php 
$donvi_select = "SELECT * FROM tbl_donvi";
$donvi_query = mysqli_query($mysqli, $donvi_select);

if(isset($_SESSION['phongban_isset'])){
    unset($_SESSION['phongban_isset']);
    echo '<script>window.alert("Không thể xóa vì còn tồn tại phòng ban trong đơn vị!");</script>';
}

?>




<!-- danh sách đơn vị -->
<div class="content__body__heading">
    <h1 class="content__body__heading-text">Viễn Thông Tiền Giang</h1>
    <div class="content__body__heading-gr">
        <h2 class="content__body__heading-gr-text">Thêm đơn vị</h2>
        <a href="?quanly=donvi&query=them" class="content__body__heading-link"><i
                class="icon-m content__body__heading-link-btn ti-plus"></i></a>
        <a href="?"
            class="content__body__heading-link"><i class="icon-m content__body__heading-link-btn ti-back-left"></i></a>
    </div>
</div>
<p class="content__body__desc">Danh sách: Đơn vị</p>
<form action="">
    <table class="content__body__table">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên đơn vị</td>
                <td>Danh sách phòng ban</td>
                <td>Cập nhật</td>
                <td>Xóa</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0;

                while($donvi_row = mysqli_fetch_array($donvi_query))
                {
                    $i++;
            ?>
            <tr>
                <td><?php  echo $i ?></td>

                <td><?php  echo $donvi_row['ten_donvi'] ?></td>
                <td>
                    <a href="?quanly=phongban&query=danhsach&iddv=<?php echo $donvi_row['id_donvi'] ?>"
                        class="a-defaul">
                        <i class="icon-s ti-eye"></i>
                    </a>
                </td>
                <td><a href="?quanly=donvi&query=sua&iddv=<?php echo $donvi_row['id_donvi'] ?>"
                        class="a-defaul">
                        <i class="icon-s ti-pencil"></i>
                    </a></td>
                <td><a href="?quanly=donvi&query=xoa&iddv=<?php echo $donvi_row['id_donvi'] ?>"
                        onclick="return confirm('Bạn chắc chắn muốn xóa? Dữ liệu sẽ không thể khôi phục.');"
                        class="a-defaul">
                        <i class="icon-s ti-trash js-comfirm-phongban"></i>
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>

        </tbody>
    </table>
</form>