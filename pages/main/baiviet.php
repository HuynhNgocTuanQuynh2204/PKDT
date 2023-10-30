<?php
       $sql_pro_bv ="SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_baiviet = '$_GET[id]' LIMIT 1";
       $query_pro_bv = mysqli_query($mysqli,$sql_pro_bv);

       $query_pro_bv_all = mysqli_query($mysqli,$sql_pro_bv);

       $row_bv_title = mysqli_fetch_array($query_pro_bv);
         //get title danhmuc
      //    $sql_pro_title = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1";
      //    $query_pro_title = mysqli_query($mysqli,$sql_pro_title);
      // $row_title = mysqli_fetch_array($query_pro_title);
?>
<h3>Bài viết :<span style="text-align: center ;text-transform: uppercase;"> <?php echo  $row_bv_title['tenbaiviet'] ?></span></h3> 
           <ul class="baiviet">
            <?php
               while($row_pro = mysqli_fetch_array($query_pro_bv_all)){
            ?>
             <li>
                <!-- <h2><?php  echo $row_pro['tenbaiviet'] ?></h2> -->
                <!-- <img style="width: 30%;" src="admincp/modules/quanlybaiviet/uploads/<?php  echo $row_pro['hinhanh'] ?>"> -->
                <!-- <p class="title_product"><?php  echo $row_pro['tomtat'] ?></p> -->
                <p class="title_product"> <?php  echo $row_pro['noidung'] ?></p>
             </li>

             <?php
               }
               ?>
           </ul>