<?php 
$donvi_select = "SELECT * FROM tbl_donvi";
$donvi_query = mysqli_query($mysqli, $donvi_select);

?>




<!-- danh sách đơn vị -->
<h1 class="content__body__heading">Viễn Thông Tiền Giang</h1>
<p class="content__body__desc">Danh sách: Đơn vị</p>
<form action="">
    <table class="content__body__table" border="1px">
        <thead>
            <tr>
                <td>Tên đơn vị</td>
                <td>Danh sách phòng ban</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($donvi_row = mysqli_fetch_array($donvi_query))
                {
            ?>
            <tr>
                <td><?php  echo $donvi_row['ten_donvi'] ?></td>
                <td>
                    <a href="?quanly=phongban&query=danhsach&id=<?php echo $donvi_row['id_donvi'] ?>" class="a-defaul">
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