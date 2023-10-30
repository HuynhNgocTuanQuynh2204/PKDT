<p style="text-align: center;text-transform: uppercase;font-weight: bold;">Tin tức mới nhất</p>
<?php
       $sql_pro_bv ="SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id_baiviet DESC";
       $query_pro_bv = mysqli_query($mysqli,$sql_pro_bv);
?>
<div class="row">
            <?php
               while($row_pro = mysqli_fetch_array($query_pro_bv)){
            ?>
             <div class="col-md-2">
                <a href="index.php?quanly=baiviet&id=<?php echo $row_pro['id_baiviet']?>">
                <img class="img img-responsive" width="100%" src="admincp/modules/quanlybaiviet/uploads/<?php  echo $row_pro['hinhanh'] ?>">
                <p class="title_product">Tên bài viết: <?php  echo $row_pro['tenbaiviet'] ?></p>
                </a>
                <p  class="title_product"> <?php  echo $row_pro['tomtat'] ?></p>
             </div>

             <?php
               }
               ?>
           </div>
     