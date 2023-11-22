<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_cate = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id 
	AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");
	$sql_category = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id 
	AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");

	$row_title = mysqli_fetch_array($sql_category);
	$title = $row_title['category_name'];
?>
<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"><?php echo $title ?></h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
									while($row_sanpham = mysqli_fetch_array($sql_cate)){
								?>
									<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sanpham['sanpham_image'] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>" 
													class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai']).'vnđ'?></span>
												<del><?php echo number_format($row_sanpham['sanpham_gia']).'vnđ'?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
													<fieldset>
														<input type="hidden" name="tensanpham" value=<?php echo $row_sanpham['sanpham_name']?> />
														<input type="hidden" name="sanpham_id" value=<?php echo $row_sanpham['sanpham_id']?> />
														<input type="hidden" name="giasanpham" value=<?php echo $row_sanpham['sanpham_gia']?> />
														<input type="hidden" name="hinhanh" value=<?php echo $row_sanpham['sanpham_image']?> />
														<input type="hidden" name="soluong" value="1"/>
														<input type="submit" name="themgiohang" value="Thêm Vào Giỏ Hàng" class="button" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
								<?php
									}
								?>	
							</div>
						</div>
						<!-- //first section -->
						
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<!-- cam kết -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">TK2-Shop cam kết:</h3>
							<ul>
								<li>
									✓ <span class="span">Sản phẩm nhập khẩu chính hãng</span><br>
									✓ <span class="span">Giao hàng toàn quốc với chi phí rẻ nhất</span><br>
									✓ <span class="span">Đổi mới trong 7 ngày nếu lỗi nhà sản xuất</span><br>
									✓ <span class="span">Tư vấn hỗ trợ kĩ thuật 24/7 khi sử dụng</span>
								</li>
							</ul>
						</div>
						<!-- //cam kết -->
						<!-- <div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm Kiếm</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Sản phẩm..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div> -->
						<!-- offers -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3" >Liên Hệ:</h3>
							<ul>
								<span>
								<a href="tel:0929029035"  style="margin-top: 1px; color: black;">
								<i class="fas fa-phone mr-2"></i>
									092 902 9035
								</a><br><br>
								<span>Để được tư vấn</span>
								</span>
							</ul>
						</div><br>
						<!-- //offers -->
						<div >
							<img src="images/review.jpg" width="100%" height="100%">
						</div>
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->