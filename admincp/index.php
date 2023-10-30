<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <title>Admin</title>
</head>
<?php
   session_start();
   if(!isset($_SESSION['dangnhap'])){
    header ('location:login.php');
   }
?>
<body>
    <h3  class="title_admin">Chào <?php echo $_SESSION['dangnhap'] ?></h3>
    <div class="wrapper">
        
    <?php
        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
       ?>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        $(document).ready(function(){
            thongke();
            var char = new Morris.Area({
                element: 'chart',
                xkey: 'date',
                ykeys: ['order', 'sales', 'quantity'],
                labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra']
            });
            
            $('.select-date').change(function(){
                var thoigian = $(this).val();
                if(thoigian == '7ngay'){
                    text = '7 ngày qua';
                } else if(thoigian == '28ngay'){
                    text = '28 ngày qua';
                } else if(thoigian == '90ngay'){
                    text = '90 ngày qua';
                } else {
                    text = '365 ngày qua';
                }

                $.ajax({
                    url: "modules/thongke.php",
                    method: "POST",
                    dataType: "JSON",
                    data: {thoigian: thoigian},
                    success: function(data) {
                        char.setData(data);
                        $('#text-date').text(text);
                    }
                });
            });

            function thongke(){
                var text = '365 ngày qua';
                $('#text-date').text(text);

                $.ajax({
                    url: "modules/thongke.php",
                    method: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        char.setData(data);
                    }
                });
            }
        });
    </script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#sanphamtt' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#sanphamnd' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#tomtat' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#noidung' ) )
        .catch( error => {
            console.error( error );
    } );
    ClassicEditor
        .create( document.querySelector( '#thongtinlienhe' ) )
        .catch( error => {
            console.error( error );
    } );
    </script>
</body>
</html>