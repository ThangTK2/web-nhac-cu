
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>TK2-Shop</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<a href="https://www.facebook.com/Thang.TK2">
						<img src="images/admin3.png" width="42px" height="auto" >
					</a>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i></a>
						</li>
						<a href="tel:0929029035">
							<li class="text-center border-right text-white">
								<i class="fas fa-phone mr-2"></i>092 902 9035
							</li>
						</a>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i>Đăng Nhập</a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
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
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
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
							<input type="password" class="form-control" placeholder=" " name="Password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="dangnhap_home" value="ĐĂNG NHẬP">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
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
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
					<h5 class="modal-title">Đăng ký</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
					<div class="form-group">
							<label class="col-form-label">Tên Khách Hàng</label>
							<input type="text" class="form-control" placeholder=" " name="name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="Email" required="">
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
							<img src="images/logoTK2Shop1.png" alt=" " class="img-fluid">TK2-Shop
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
									<!-- <input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1"> -->
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
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<!-- <div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
							<option value="Headphones">Headphones</option>
							<option value="Computers">Computers</option>
							<option value="Appliances">Appliances</option>
							<option value="Mobiles">Mobiles</option>
							<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
							<option value="iPad & Tablets">iPad & Tablets</option>
							<option value="Cameras & Camcorders">Cameras & Camcorders</option>
							<option value="Home Audio & Theater">Home Audio & Theater</option>
						</select>
					</form>
				</div> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang Chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="lienhe.php">Liên Hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang Chủ</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				Liên Hệ
			</h3>
			<!-- //tittle heading -->
			<div class="row contact-grids agile-1 mb-5">
				<div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<a href="https://www.google.com/maps/place/%C4%90%C3%A0+N%E1%BA%B5ng,+Vi%E1%BB%87t+Nam/@16.033808,107.8113001,10.48z/data=!4m5!3m4!1s0x314219c792252a13:0x1df0cb4b86727e06!8m2!3d16.0544563!4d108.0717219?hl=vi">
							<div class="con-ic">
								<i class="fas fa-map-marker-alt rounded-circle"></i>
							</div>
							<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Địa Chỉ</h4>
								<p>Da Nang, Viet Nam</p>
							</a>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
					<div class="contact-grid1 text-center">
						<a href="tel:0929029035">
							<div class="con-ic">
								<i class="fas fa-phone rounded-circle"></i>
							</div>
							<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Liên Hệ</h4>
								<p>092 902 9035</p>
						</a>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6">
					<div class="contact-grid1 text-center">
						<a href="https://accounts.google.com/AccountChooser/signinchooser?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&flowName=GlifWebSignIn&flowEntry=AccountChooser">
							<div class="con-ic">
								<i class="fas fa-envelope-open rounded-circle"></i>
							</div>
							<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
							<p>		
								tk2@gmail.com
							</p>
						</a>
					</div>
				</div>
			</div>
			<!-- form -->
			<form action="#" method="post">
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Họ Tên</label>
							<input type="text" class="form-control" name="Name" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" name="Email" placeholder="" required="">
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Phản Hồi</label>
						<textarea name="Message" class="form-control" placeholder="" required=""> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" value="Gửi">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->

	<!-- map -->
	<div class="map mt-sm-0 mt-4">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805196.5077734194!2d144.49270863101745!3d-37.97015423820711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1474020956974"
		    allowfullscreen></iframe>
	</div>
	<!-- //map -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Giới Thiệu</h2>
				<p class="footer-main mb-4">TK2-Shop Uy Tín Làm Nên Thương Hiệu ♪</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Miễn Phí Vận Chuyển</h3>
								<p>Đơn Hàng Trên 500,000vnđ</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
							<h3>Vận Chuyển Nhanh</h3>
								<p>Toàn Quốc</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
							<h3>Tin Cậy</h3>
								<p>Sự Đảm Bảo</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
	<div class="container">
			<p class="text-center text-white">© TK2
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>