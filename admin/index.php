<?php
    session_start();
    include('../db/connect.php');
?>

<?php
    // session_destroy();
    // unset('');
    if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if($taikhoan=='' || $matkhau==''){
            echo '<p>Mời Bạn Nhập Đầy Đủ Thông Tin</p>';
        }else{
            $sql_select_admin = mysqli_query($con, "SELECT * FROM tbl_admin WHERE email= '$taikhoan' AND password='$matkhau' LIMIT 1");
            $count = mysqli_num_rows($sql_select_admin);
            $row_dangnhap = mysqli_fetch_array($sql_select_admin);
            if($count>0){
                $_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
                $_SESSION['admin_id'] = $row_dangnhap['admin_id'];
                header('Location:dashboard.php');
             }else{
                echo '<p>Tài Khoản Hoặc Mật Khẩu Của Bạn Không Chính Xác</p>';
             }
        }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Admin</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <h2  align="center" >Đăng Nhập Admin</h2>
    <div class="col-md-6">
        <div class="form_group">
            <form action="" method="POST">
                <label for="">Tài Khoản</label>
                <input type="text" name="taikhoan" placeholder="Nhập Email" class="form-control">
                <label for="">Mật Khẩu</label>
                <input type="password" name="matkhau" placeholder="Nhập Mật Khẩu" class="form-control"><br>  <!--type="text": để thấy mật khẩu  mk:admin-->
                <input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng Nhập Ad" >
            </form>
        </div>
    </div>
</body>
</html>