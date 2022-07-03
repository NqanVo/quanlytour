<?php 
    $idtour = $_GET['idtour'];

    $tour_delete = "DELETE FROM tbl_tourdulich WHERE tbl_tourdulich.id_tourdulich ='".$idtour."'";
    $tour_query = mysqli_query($mysqli, $tour_delete);
?>

<div class="notification-form">
    <h1 class="notification-form-heading">Xóa tour thành công</h1>
    <h1 class="notification-form-icon"><i class="ti-check"></i></h1>
    <a href="?quanly=tour&query=danhsach" class="btn-s btn-main notification-form-btn a-defaul" style="color: #fff;">Quay lại</a>
</div>