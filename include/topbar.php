<?php
    // session_destroy();
    // unset('');
    if(isset($_POST['dangnhap_home'])){
		$taikhoan = $_POST['email_login'];
        $matkhau = md5($_POST['password_login']);
        if($taikhoan=='' || $matkhau==''){
            echo '<script>alert("Mời bạn điền đầy đủ thông tin")</script>';
        }else{
            $sql_select_admin = mysqli_query($con, "SELECT * FROM tbl_khachhang WHERE email= '$taikhoan' AND password='$matkhau' LIMIT 1");
            $count = mysqli_num_rows($sql_select_admin);
            $row_dangnhap = mysqli_fetch_array($sql_select_admin);
            if($count>0){
                $_SESSION['dangnhap_home'] = $row_dangnhap['name'];
                $_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];
                header('Location:index.php?quanly=giohang');
             }else{
                echo '<script>alert("Tài khoản và mật khẩu không chính xác")</script>';
             }
        }
	}elseif(isset($_POST['dangky'])){
		$name = $_POST['name'];
		
		$phone = $_POST['phone'];

		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$note = $_POST['note'];
		$address = $_POST['address'];
		$giaohang = $_POST['giaohang'];
		$sql_khachhang = mysqli_query($con, "INSERT INTO tbl_khachhang(name, phone, email, address, note, giaohang, password)  
		VALUES ('$name', '$phone', '$email', '$address', '$note', '$giaohang', '$password')");
		$sql_select_khachhang = mysqli_query($con, "SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
		$row_khachhang = mysqli_fetch_array($sql_select_khachhang);
		$_SESSION['dangnhap_home'] = $name;
		$_SESSION['khachhang_id'] = $row_khachhang['khachhang_id'];
		header('Location:index.php?quanly=giohang');	
	}
?>

<!-- top-header -->
<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<a href="https://www.facebook.com/Thang.TK2">
						<img src="images/admin1.png" width="30px" height="30px" >
					</a>
						<p class="text-white text-lg-left text-center">
							<!-- <i class="fas fa-shopping-cart ml-1"></i>             font weasome -->
						</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<?php
							 if(isset($_SESSION['dangnhap_home'])){
						?>
						<li class="text-center border-right text-white">
							<a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>"  class="text-white">
								<i class="fas fa-truck mr-2"></i>Xem Đơn Hàng: <?php echo $_SESSION['dangnhap_home'] ?></a>
						</li>
						<?php
							 }
						?>
						<li class="text-center border-right text-white">
							<a href="tel:0929029035" style="color: white;" >
							<i class="fas fa-phone mr-2"></i>
									092 902 9035
							</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#dangnhap" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i>Đăng Nhập</a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#dangky" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng Ký</a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

    <!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Đăng nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="text" class="form-control" placeholder=" " name="email_login" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật Khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="password_login" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="dangnhap_home" value="ĐĂNG NHẬP">
						</div>
						<p class="text-center dont-do mt-3">Bạn mới biết đến TK2-Shop?
							<a href="#" data-toggle="modal" data-target="#dangky">
								Đăng ký</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>

    	<!-- register -->
	<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Đăng ký</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<label class="col-form-label">Tên Khách Hàng</label>
							<input type="text" class="form-control" placeholder=" " name="name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Số Điện Thoại</label>
							<input type="text" class="form-control" placeholder=" " name="phone" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Địa Chỉ</label>
							<input type="text" class="form-control" placeholder=" " name="address" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật Khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="password" required="">
							<input type="hidden" class="form-control" placeholder=" " name="giaohang" value="0">              <!--value="0": thanh toán atm || 1: thanh toán tại nhà-->
						</div>
						<div class="form-group">
							<label class="col-form-label">Ghi Chú</label>
							<input type="text" class="form-control" placeholder=" " name="note" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="dangky" value="ĐĂNG KÝ">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">
									Bằng việc đăng kí, bạn đã đồng ý với TK2-Shop về
									<a href="https://shopee.vn/legaldoc/termsOfService/?__classic__=1" style="color:#F45C5D;" >Điều khoản dịch vụ</a> & 
									<a href="https://shopee.vn/legaldoc/privacy/?__classic__=1" style="color:#F45C5D; ">Chính sách cảo mật</a>
								</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

    
	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="images/logoTK2Shop1.png" alt=" " class="img-fluid">
							TK2-Shop          <!--logo-->
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="index.php?quanly=timkiem" method="POST">
								<input class="form-control mr-sm-2" name="search_product" type="search" placeholder="Tìm kiếm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" name="search_button" type="submit">Tìm Kiếm</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->