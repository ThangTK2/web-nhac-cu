<?php
    session_start();
    include('../db/connect.php');
?>
<!-- <?php
     if(isset($_POST['capnhatdonhang'])){
        $xuly = $_POST['xuly'];
        $mahang = $_POST['mahang_xuly'];
        $sql_update_donhang = mysqli_query($con, "UPDATE tbl_donhang SET tinhtrang='$xuly'WHERE mahang='$mahang' ");
     }
?>
<?php
    if(isset($_GET['xoadonhang'])){
        $mahang = $_GET['xoadonhang'];
        $sql_delete =  mysqli_query($con, "DELETE FROM tbl_donhang WHERE mahang='$mahang'");
        header('Location:xulydonhang.php');
    }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn Hàng</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
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
            <a class="nav-link" href="xulysanpham.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </nav><br>
    <div class="container">
        <div class="row">

            <div class="col-md-12"><br>
                <h5>Khách Hàng</h5>
                <?php
                    $sql_select_khachhang = mysqli_query($con, "SELECT * FROM tbl_khachhang, tbl_giaodich WHERE tbl_khachhang.khachhang_id = tbl_giaodich.khachhang_id
                    GROUP BY tbl_giaodich.magiaodich ORDER BY tbl_khachhang.khachhang_id DESC ");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Thứ Tự</th>  
                        <th>Tên Khách Hàng</th>
                        <th>Số Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Email</th>
                        <th>Ngày Mua</th>
                        <th>Quản Lý</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_khachhang = mysqli_fetch_array($sql_select_khachhang)){
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_khachhang['name'] ?></td>
                        <td><?php echo $row_khachhang['phone'] ?></td>
                        <td><?php echo $row_khachhang['address'] ?></td>

                        <td><?php echo $row_khachhang['email'] ?></td>
                        <td><?php echo $row_khachhang['ngaythang'] ?></td>
                        <td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['magiaodich'] ?>">Xem Giao Dịch</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>

            <div class="col-md-12"><br>
                <h5>Liệt Kê Lịch Sử Đơn Hàng</h5>
                <?php
                    if(isset($_GET['khachhang'])){
                        $magiaodich = $_GET['khachhang'];
                    }else{
                        $magiaodich = '';
                    }
                    $sql_select = mysqli_query($con, "SELECT * FROM tbl_giaodich, tbl_khachhang, tbl_sanpham WHERE tbl_giaodich.sanpham_id = tbl_sanpham.sanpham_id 
                    AND tbl_khachhang.khachhang_id = tbl_giaodich.khachhang_id AND tbl_giaodich.magiaodich ='$magiaodich'  ORDER BY tbl_giaodich.giaodich_id DESC ");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Thứ Tự</th>
                        <th>Mã Giao Dịch</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ngày Đặt</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_donhang = mysqli_fetch_array($sql_select)){
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_donhang['magiaodich'] ?></td>
                        <td><?php echo $row_donhang['sanpham_name'] ?></td>

                        <td><?php echo $row_donhang['ngaythang'] ?></td>
                        <td><?php echo $row_donhang['note'] ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>