<?php
    session_start();
    include('../db/connect.php');
?>
<?php
     if(isset($_POST['capnhatdonhang'])){
        $xuly = $_POST['xuly'];
        $mahang = $_POST['mahang_xuly'];
        $sql_update_donhang = mysqli_query($con, "UPDATE tbl_donhang SET tinhtrang='$xuly'WHERE mahang='$mahang' ");
        $sql_update_giaodich = mysqli_query($con, "UPDATE tbl_giaodich SET tinhtrangdon='$xuly'WHERE magiaodich='$mahang' ");
     }
?>
<?php
    if(isset($_GET['xoadonhang'])){
        $mahang = $_GET['xoadonhang'];
        $sql_delete =  mysqli_query($con, "DELETE FROM tbl_donhang WHERE mahang='$mahang'");
        header('Location:xulydonhang.php');
    }
    if(isset($_GET['xacnhanhuy']) && isset($_GET['mahang'])){
		$huydon = $_GET['xacnhanhuy'];
		$magiaodich = $_GET['mahang'];
	}else{
		$huydon = '';
		$magiaodich = '';
	}
	$sql_update_donhang = mysqli_query($con, "UPDATE tbl_donhang SET huydon='$huydon' WHERE mahang='$magiaodich' ");
	$sql_update_giaodich = mysqli_query($con, "UPDATE tbl_giaodich SET huydon='$huydon' WHERE magiaodich='$magiaodich' ");
    // header('Location:xulydonhang.php?quanly=xemdonhang&mahang='.$magiaodich);
?>

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
            <?php
                if(isset($_GET['quanly'])){
                    $capnhat = $_GET['quanly'];
                }else{
                    $capnhat = '';
                }
                if($capnhat=='xemdonhang'){
                    $mahang = $_GET['mahang'];
                    $sql_chitiet = mysqli_query($con, "SELECT * FROM tbl_donhang, tbl_sanpham WHERE tbl_donhang.sanpham_id= tbl_sanpham.sanpham_id
                    AND tbl_donhang.mahang = '$mahang' ");
            ?>
                <div class="col-md-8">
                <p>Xem Chi Tiết Đơn Hàng</p>
                <form action="" method="POST" >
                <table class="table table-bordered">
                    <tr>
                        <th>Thứ Tự</th>
                        <th>Mã Hàng</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Tổng Tiền</th>
                        <th>Ngày Đặt</th>
                        <!-- <th>Quản Lý</th> -->
                    </tr>
                    <?php
                        $i=0;
                        while($row_donhang = mysqli_fetch_array($sql_chitiet)){
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_donhang['mahang'] ?></td>
                        <td><?php echo $row_donhang['sanpham_name'] ?></td>
                        <td><?php echo $row_donhang['soluong'] ?></td>
                        <td><?php echo $row_donhang['sanpham_giakhuyenmai'] ?></td>
                        <td><?php echo number_format($row_donhang['soluong']*$row_donhang['sanpham_giakhuyenmai']).'vnđ' ?></td>

                        <td><?php echo $row_donhang['ngaythang'] ?></td>
                        <input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['mahang'] ?>">

                        <!-- <td><a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a> || 
                        <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem Đơn Hàng</a></td> -->
                    </tr>
                    <?php
                        }
                    ?>
                </table>  

                <select class="form-control" name="xuly">
                    <option value="1">Đã xử lý | Đang giao hàng</option>
                    <option value="0">Chưa Xử Lý</option>
                </select><br>
                <input type="submit" value="Cập Nhật Đơn Hàng" name="capnhatdonhang" class="btn btn-primary">
                </form>
                </div>
                <?php
                    }else{
                ?>
                    <div class="col-md-4">
                        <p style="font-weight: 500; font-family: inherit; font-size: 1.25rem; margin-top: 22px; " >Đơn Hàng</p>
                    </div>
                <?php
                }
                ?>
                
            <div class="col-md-8"><br>
                <h5>Liệt Kê Đơn Hàng</h5>
                <?php
                    $sql_select = mysqli_query($con, "SELECT * FROM tbl_sanpham, tbl_khachhang, tbl_donhang WHERE tbl_donhang.sanpham_id = tbl_sanpham.sanpham_id 
                    AND tbl_donhang.khachhang_id = tbl_khachhang.khachhang_id GROUP BY mahang ");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Thứ Tự</th>
                        <th>Mã Hàng</th>
                        <th>Tình Trạng Đơn Hàng</th>
                        <th>Tên Khách Hàng</th>
                        <th>Ngày Đặt</th>
                        <th>Ghi Chú</th>
                        <th>Hủy Đơn</th>
                        <th>Quản Lý</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_donhang = mysqli_fetch_array($sql_select)){
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_donhang['mahang'] ?></td>
                        <td><?php
                            if($row_donhang['tinhtrang']==0){
                                echo 'Chưa Xử Lý';
                            }else{
                                echo 'Đã Xử Lý';
                            }
                        ?></td>
                        <td><?php echo $row_donhang['name'] ?></td>
                        <td><?php echo $row_donhang['ngaythang'] ?></td>
                        <td><?php echo $row_donhang['note'] ?></td>
                        <td><?php if($row_donhang['huydon']==0){}
                                elseif($row_donhang['huydon']==1){
                                    echo '<a href="xulydonhang.php?quanly=xemdonhang&mahang='.$row_donhang['mahang'].'&xacnhanhuy=2">
                                    Xác nhận hủy đơn</a>';
                                }else{
                                    echo 'Đã hủy';
                                }
                        ?></td>
                        <td><a href="?xoadonhang=<?php echo $row_donhang['mahang'] ?>">Xóa</a> || 
                        <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem Đơn Hàng</a></td>
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