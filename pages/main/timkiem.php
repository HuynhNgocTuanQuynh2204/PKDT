<?php
        if(isset($_POST['timkiem'])){
            $tukhoa = $_POST['tukhoa'];
        } else{
            $tukhoa = '';
        }
       $sql_pro ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE'%".$tukhoa."%'";
       $query_pro = mysqli_query($mysqli,$sql_pro);
      
?>

<h3>Từ khóa tìm kiếm: <?php echo $_POST['tukhoa'];  ?></h3>
           <ul class="product_list">
                <?php
                   while($row = mysqli_fetch_array($query_pro)){
                ?>
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                    <img src="admincp/modules/quanlysp/uploads/<?php  echo $row['hinhanh'] ?>">
                    <p class="title_product">Tên sản phẩm: <?php  echo $row['tensanpham'] ?></p>
                    <p class="price_product">Giá:<?php  echo number_format( $row['giasp'],0,',','.').'vnđ' ?></p>
                    <p style="text-align: center; color: #ddd;"> <?php  echo $row['tendanhmuc'] ?></p>
                    </a>
                </li>
                <?php
                    }
                ?>
           </ul>
<?php
       $sql_pro ="SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc = tbl_danhmucbaiviet.id_danhmucbaiviet AND tbl_baiviet.tenbaiviet LIKE'%".$tukhoa."%'";
       $query_pro = mysqli_query($mysqli,$sql_pro);
      
?>
           <ul class="product_list">
                <?php
                   while($row = mysqli_fetch_array($query_pro)){
                ?>
                <li>
                    <a href="index.php?quanly=baiviet&id=<?php echo $row['id_baiviet']?>">
                    <img src="admincp/modules/quanlybaiviet/uploads/<?php  echo $row['hinhanh'] ?>">
                    <p class="title_product">Tên sản phẩm: <?php  echo $row['tenbaiviet'] ?></p>
                    <p style="text-align: center; color: #ddd;"> <?php  echo $row['tendanhmucbaiviet'] ?></p>
                    </a>
                </li>
                <?php
                    }
                ?>
           </ul>