<?php 
$donvi_select = "SELECT * FROM tbl_donvi";
$donvi_query = mysqli_query($mysqli, $donvi_select);

?>

<div class="col l-2">
    <nav class="navbar">
        <a href="#" class="navbar__heading">Dashboard</a>
        <ul class="navbar__list">
            <?php 
            
            ?>
            <li class="navbar__list-item">
                <a href="?quanly=donvi&query=danhsach" class="navbar__list-item-link">Viễn Thông Tiền Giang</a>
                <!-- <ul class="sub-navbar__list">
                    <li class="sub-navbar__list-item">
                        <a href="" class="sub-navbar__list-item-link">Trung Tâm Công Nghệ Thông tin</a>
                        <ul class="sub2-navbar__list">
                            <li class="sub2-navbar__list-item">
                                <a href="" class="sub2-navbar__list-item-link">Phòng Nghiên Cứu Và Phát Triển</a>
                                <ul class="sub3-navbar__list">
                                    <li class="sub3-navbar__list-item">
                                        <a href="" class="sub3-navbar__list-item-link">Trần Văn A</a>
                                    </li>
                                    <li class="sub3-navbar__list-item">
                                        <a href="" class="sub3-navbar__list-item-link">Trần Văn A</a>
                                    </li>
                                    <li class="sub3-navbar__list-item">
                                        <a href="" class="sub3-navbar__list-item-link">Trần Văn A</a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                </ul> -->
            </li>
            <li class="navbar__list-item">
                <a href="?quanly=tour&query=chitiet" class="navbar__list-item-link">Tour Du Lịch</a>
                <ul class="sub-navbar__list">
                    <li class="sub-navbar__list-item">
                        <a href="?quanly=tour&query=chitiet" class="sub-navbar__list-item-link">Danh sách Tour</a>
                    </li>
                    <li class="sub-navbar__list-item">
                        <a href="?quanly=tour&query=chitietdangky" class="sub-navbar__list-item-link">Danh sách đăng ký Tour</a>
                    </li>
                    <li class="sub-navbar__list-item">
                        <a href="?quanly=tour&query=them" class="sub-navbar__list-item-link">Thêm Tour</a>
                    </li>
                </ul>
            </li>
            <li class="navbar__list-item">
                <a href="?quanly=hotrokinhphi&query=chitiet" class="navbar__list-item-link">Hổ Trợ Kinh Phí</a>
            </li>
        </ul>
    </nav>
</div>