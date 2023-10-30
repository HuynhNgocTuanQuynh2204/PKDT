<div class="container-fluid">
    <div class="row">
    <!--large-middle-sm small-x-small--->
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <?php
        include("sidebar/sidebar.php")
        ?>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <div class="maincontent">
          <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='danhmucsanpham'){
                include("main/danhmuc.php");

            } else if($tam =='giohang'){
                include("main/giohang.php");

            } else if($tam =='danhmucbaiviet'){
                include("main/danhmucbaiviet.php");

            } else if($tam =='baiviet'){
                include("main/baiviet.php");

            }else if($tam =='tintuc'){
                include("main/tintuc.php");

            }else if($tam =='lienhe'){
                include("main/lienhe.php");

            }else if($tam =='tailieu'){
                include("main/tailieu.php"); 

            }else if($tam =='sanpham'){
                include("main/sanpham.php");

            }else if($tam =='dangky'){
                include("main/dangky.php");

            }else if($tam =='thanhtoan'){
                include("main/thanhtoan.php");

            }else if($tam =='dangnhap'){
                include("main/dangnhap.php");

            }else if($tam =='timkiem'){
                include("main/timkiem.php");

            }else if($tam =='camon'){
                include("main/camon.php");
                
            }else if($tam =='thaydoimatkhau'){
                include("main/thaydoimatkhau.php");
            }else if($tam =='vanchuyen'){
                include("main/vanchuyen.php");
            }else if($tam =='thongtinthanhtoan'){
                include("main/thongtinthanhtoan.php");
            }else if($tam =='donhangdadat'){
                include("main/donhangdadat.php");
            }else if($tam =='lichsudonhang'){
                include("main/lichsudonhang.php");
            }else if($tam =='xemdonhang'){
                include("main/xemdonhang.php");
            }else if($tam =='indonhang'){
                include("main/indonhang.php");
            } else {
                include("main/index.php");
            }
          ?>
        </div>
    </div>
    </div>
        <div class="clear"></div>
</div>