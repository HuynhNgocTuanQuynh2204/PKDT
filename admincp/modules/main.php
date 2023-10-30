<div class="clear"></div>
<div class="main">
<?php
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query = $_GET['query'];
            } else {
                $tam = '';
                $query = '';
            }
            if($tam =='quanlydanhmucsanpham' && $query == 'them'){
                include("modules/quanlydanhmucsanpham/them.php");
                include("modules/quanlydanhmucsanpham/lietke.php");

            }else if($tam =='quanlydanhmucsanpham' && $query == 'sua'){
                include("modules/quanlydanhmucsanpham/sua.php");

            } else if($tam =='quanlysp' && $query == 'them'){
                include("modules/quanlysp/them.php");
                include("modules/quanlysp/lietke.php");

            } else if($tam =='quanlysp' && $query == 'sua'){
                include("modules/quanlysp/sua.php");
            }

            else if($tam =='quanlydonhang' && $query == 'lietke'){
                include("modules/quanlydonhang/lietke.php");
            }

            else if($tam =='donhang' && $query == 'xemdonhang'){
                include("modules/quanlydonhang/xemdonhang.php");
            }

            else if($tam =='quanlydanhmucbaiviet' && $query == 'them'){
                include("modules/quanlydanhmucbaiviet/them.php");
                include("modules/quanlydanhmucbaiviet/lietke.php");
            }

            else if($tam =='quanlydanhmucbaiviet' && $query == 'sua'){
                include("modules/quanlydanhmucbaiviet/sua.php");
            }

            else if($tam =='quanlybaiviet' && $query == 'them'){
                include("modules/quanlybaiviet/them.php");
                include("modules/quanlybaiviet/lietke.php");
            }
            
            else if($tam =='quanlybaiviet' && $query == 'sua'){
                include("modules/quanlybaiviet/sua.php");
            }

             
            else if($tam =='quanlyweb' && $query == 'capnhap'){
                include("modules/thongtinweb/quanly.php");
            }

            
            else {
                include("modules/doashboard.php");
            }
          ?>
</div>