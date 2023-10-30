<?php
  if (isset($_POST['dangnhap'])){
    $email =$_POST['email'];
    $matkhau =md5($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky WHERE email ='".$email."' AND matkhau ='".$matkhau."' LIMIT 1 ";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if ($count>0){
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky']=$row_data['tenkhachhang'];
        $_SESSION['email']=$row_data['email'];
        $_SESSION['id_khachhang']=$row_data['id_dangky'];
        // echo '<script>alert("Đăng nhập thành công")</script>';
    }else{
        echo '<p style="color:red">Mật khẩu hoặc tài khoản sai. Vui lòng đăng nhập lại. </p>';
    }
  }
?>
<script>
    // Kiểm tra xem session có tồn tại hay không
    if ("<?php echo isset($_SESSION['dangky']); ?>" === "1") {
        window.location.href = "index.php?quanly=giohang"; // Đường dẫn tới trang giỏ hàng
    }
</script>
<form action="" method="POST">
    <table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
        <tr>
            <td colspan="2" ><h3>Đăng nhập khách hàng</h3></td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="email" placeholder="Email..."></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password" placeholder="Mật khẩu..."></td>
        </tr>
        <tr>
        <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
        </tr>
    </table>
    </form>