<?php
    session_start();
    include('../db/connect.php');
?>
<?php
    if(isset($_POST['themdanhmuc'])){
        $tendanhmuc = $_POST['danhmuc'];
        $sql_insert = mysqli_query($con, "INSERT INTO tbl_category(category_name) values('$tendanhmuc') ");
    }elseif(isset($_POST['capnhatdanhmuc'])){
        $id_post = $_POST['id_danhmuc'];
        $tendanhmuc = $_POST['danhmuc'];
        $sql_update = mysqli_query($con, "UPDATE tbl_category SET category_name = '$tendanhmuc' WHERE category_id = '$id_post'");
        header('Location: xulydanhmuc.php');
    }
    if(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sql_xoa = mysqli_query($con, "DELETE FROM tbl_category WHERE category_id = '$id'");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục</title>
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
                if($capnhat=='capnhat'){
                    $id_capnhat = $_GET['id'];
                    $sql_capnhat = mysqli_query($con, "SELECT * FROM tbl_category WHERE category_id = '$id_capnhat'");
                    $row_capnhat = mysqli_fetch_array($sql_capnhat);
                    ?>
                    <div class="col-md-4">
                        <h5>Cập Nhật Danh Mục</h5>
                        <form action="" method="POST">
                            <input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['category_name'] ?>"><br>
                            <input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['category_id'] ?>">
                            <input type="submit" name="capnhatdanhmuc" value="Cập Nhật Danh Mục" class="btn btn-primary">
                        </form>
                    </div>
                    <?php
                }else{
            ?>
                    <div class="col-md-4">
                        <h5>Thêm Danh Mục</h5>
                        <form action="" method="POST">
                            <input type="text" class="form-control" name="danhmuc" placeholder="Tên Danh Mục"><br>
                            <input type="submit" name="themdanhmuc" value="Thêm Danh Mục" class="btn btn-primary">
                        </form>
                    </div>
                <?php
                }
                ?>
            
            <div class="col-md-8">
                <h5>Liệt Kê Danh Mục</h5>
                <?php
                    $sql_select = mysqli_query($con, "SELECT * FROM tbl_category ORDER BY category_id DESC ");
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Thứ Tự</th>
                        <th>Tên Danh Mục</th>
                        <th>Quản Lý</th>
                    </tr>
                    <?php
                        $i=0;
                        while($row_category = mysqli_fetch_array($sql_select)){
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_category['category_name'] ?></td>
                        <td><a href="?xoa=<?php echo $row_category['category_id'] ?>">Xóa</a> || 
                        <a href="?quanly=capnhat&id=<?php echo $row_category['category_id'] ?>">Cập Nhật</a></td>
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