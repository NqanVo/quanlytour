<div class="container">
    <div class="row no-gutters">
        <?php include('container/navbar_container.php') ?>
        <div class="col l-10">
            <section class="content">
                <section class="content__body">
                    <?php 
                        if(isset($_GET['quanly']) && $_GET['query'])
                        {
                            $quanly = $_GET['quanly'];
                            $query = $_GET['query'];
                        }
                        else
                        {
                            $quanly= '';
                            $query = '';
                        }
                        // Quan ly don vi
                        if($quanly=='donvi' && $query=='danhsach')
                        {
                            include('container/donvi_danhsach.php');
                        }
                        elseif($quanly=='phongban' && $query=='danhsach'){
                            include('container/phongban_danhsach.php');
                        }
                        elseif($quanly=='nhanvien' && $query=='danhsach'){
                            include('container/nhanvien_danhsach.php');
                        }
                        elseif($quanly=='nhanvien' && $query=='them'){
                            include('container/nhanvien_them.php');
                        }

                        // Quan ly tour
                        elseif($quanly=='tour' && $query=='chitiet'){

                        }
                        elseif($quanly=='tour' && $query=='chitietdangky'){
                            
                        }
                        elseif($quanly=='tour' && $query=='them'){
                            include('container/tour_them.php');
                        }
                    
                    
                    ?>
                </section>
            </section>
        </div>
    </div>
</div>