<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location: index.php');
    }

    if(isset($_GET['login'])){
        $dangxuat = $_GET['login'];
    }else{
        $dangxuat = '';
    }
    if($dangxuat=='dangxuat'){
        unset($_SESSION['dangnhap']);
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <p>Xin Chào <?php echo $_SESSION['dangnhap'] ?> <a href="?login=dangxuat">Đăng Xuất</a></p>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="xulydonhang.php">Đơn Hàng<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="xulydanhmuc.php">Danh Mục</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="xulydanhmucbaiviet.php">Danh Mục Bài Viết</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="xulybaiviet.php">Bài Viết</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="xulysanpham.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sản Phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="xulykhachhang.php">Khách Hàng</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
</body>
</html>