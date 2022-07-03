<?php
    $danhsach_hotro_query = mysqli_query($mysqli, "SELECT * FROM tbl_hotro_kinhphi ORDER BY id_hotro_kinhphi DESC");
    
    // $array_main[] = null;
    // for($i=0; $i<5; $i++)
    // {
    //     $id = 'id_chitiet_hotro';
    //     $thamnien = 'gia tri vua tru'.$i;

    //     $array_old = $array_main;
    //     $array = array($thamnien => $id);
    //     $array_main = array_merge($array_old,$array);
    // }
    // print_r($array_main);
    // $max_key = max(array_keys($array)); 
    // echo '</br>';
    // print_r($max_key);
    // echo '</br>';
    // echo $array[$max_key];

    

?>

<!-- danh sach phòng ban -->
<div class="content__body__heading">
    <h1 class="content__body__heading-text">Hỗ Trợ Kinh Phí</h1>
    <div class="content__body__heading-gr">
        <h2 class="content__body__heading-gr-text">Thêm Kì Hỗ Trợ Mới</h2>
        <a href="?quanly=hotrokinhphi&query=them" class="content__body__heading-link"><i
                class="icon-m content__body__heading-link-btn ti-plus"></i></a>
        <a href="?" class="content__body__heading-link"><i
                class="icon-m content__body__heading-link-btn ti-back-left"></i></a>
    </div>
</div>
<p class="content__body__desc">Danh Sách: Hỗ Trợ</p>
<form action="">
    <table class="content__body__table">
        <thead>
            <tr>
                <td colspan="2">Giai Đoạn</td>
                <td colspan="4">Thông Tin</td>
            </tr>
            <tr>
                <td>Từ Năm</td>
                <td>Đến Năm</td>
                <td>Tổng Kinh Phí</td>
                <td>Chi Tiết</td>
                <td>Cập Nhật</td>
                <td>Trạng Thái</td>
            </tr>
        </thead>
        <tbody>
            <?php
                while($danhsach_hotro_row = mysqli_fetch_array($danhsach_hotro_query)){
            ?>
            <tr>
                <td><?php echo $danhsach_hotro_row['tunam_hotro_kinhphi']?></td>
                <td><?php echo $danhsach_hotro_row['dennam_hotro_kinhphi']?></td>
                <td><?php echo number_format($danhsach_hotro_row['tongtien_hotro_kinhphi'],0,',',',')?>đ</td>
                <td><a href="?quanly=hotrokinhphi&query=chitiet&idhotro=<?php echo $danhsach_hotro_row['id_hotro_kinhphi'] ?>"
                        class="a-defaul">
                        <i class="icon-s ti-eye"></i>
                    </a></td>
                <td><a href="?quanly=hotrokinhphi&query=capnhat&idhotro=<?php echo $danhsach_hotro_row['id_hotro_kinhphi'] ?>"
                        class="a-defaul">
                        <i class="icon-s ti-pencil"></i>
                    </a></td>
                <td><?php if($danhsach_hotro_row['status_hotro_kinhphi'] == 1){echo '<span class="success-txt">Đang diễn ra</span>';}else{echo '<span class="error-txt">Đã kết thúc</span>';}?>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</form>