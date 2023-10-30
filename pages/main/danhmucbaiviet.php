<?php
       $sql_pro_bv ="SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc = '$_GET[id]' ORDER BY id_baiviet DESC";
       $query_pro_bv = mysqli_query($mysqli,$sql_pro_bv);
       //get ten danh muc
       $sql_cate_bv ="SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_danhmucbaiviet = '$_GET[id]' LIMIT 1";
       $query_cate_bv = mysqli_query($mysqli,$sql_cate_bv);
       $row_title = mysqli_fetch_array($query_cate_bv);
         //get title danhmuc
      //    $sql_pro_title = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1";
      //    $query_pro_title = mysqli_query($mysqli,$sql_pro_title);
      // $row_title = mysqli_fetch_array($query_pro_title);
?>
<h3>Danh mục bài viết :<span style="text-align: center ;text-transform: uppercase;"> <?php echo $row_title['tendanhmucbaiviet'] ?></span></h3> 
          <div class="row">
            <?php
               while($row_pro = mysqli_fetch_array($query_pro_bv)){
            ?>
             <div class="col-md-3 col-sm-6 ">
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