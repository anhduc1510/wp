<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Website bán hàng đơn giản</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css">
	</head>
	<body>
		<div id="wallpaper">
			<header>
				<div class="top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<p>Chào mừng đến với shop bán hàng!</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="top-menu">
									<ul>
										<li><a href="#">Giỏ hàng</a></li>
										<li><a href="#">Cửa hàng</a></li>
										<li><a href="#">Tài khoản</a></li>
										<li><a href="#">Liên hệ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-header">
					<div class="container">
						<div class="row">
							<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
								<div class="logo">
									<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""></a>
									<h1>Website bán hàng</h1>
								</div>
							</div>
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
								<div class="form-seach-product">
									<form action="/" method="GET" role="form">
										<select name="" id="input" class="form-control" required="required">
											<option value="">Chọn danh mục</option>
											<option value="1">Điện thoại</option>
											<option value="2">Máy tính bản</option>
											<option value="3">Lap top</option>
											<option value="4">Phụ kiện</option>
										</select>
										<div class="input-seach">
											<input type="text" name="s" id="" class="form-control">
											<button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
										</div>
										<div class="clear"></div>
									</form>
								</div>
							</div>
							<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1" style="text-align: right">
								<a href="#" class="icon-cart">
									<div class="icon">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span>3</span>
									</div>
									<div class="info-cart">
										<p>Giỏ hàng</p>
										<span>2.500.000đ</span>
									</div>
									<span class="clear"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="main-menu-header">
					<div class="container">
						<div id="nav-menu">
							<ul>
								<li class="current-menu-item"><a href="#">Trang chủ</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li>
									<a href="#">Sản phẩm</a>
									<ul>
										<li><a href="#">Điện thoại</a></li>
										<li><a href="#">Máy tính bảng</a></li>
										<li><a href="#">Laptop</a></li>
										<li><a href="#">Sản phẩm khác</a></li>
									</ul>
								</li>
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">Tuyển dụng</a></li>
								<li><a href="#">Liên hệ</a></li>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</header>
			<div id="content">
				<div class="container">
					<div class="slider">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-01.png" alt="First slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/images/baner-02.png" alt="Second slide">
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
				<div class="product-box">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 order-lg-0 order-1">
								<div class="sidebar">
									<div class="category-box">
										<h3>Danh mục sản phẩm</h3>
										<div class="content-cat">
											<ul>
												<li><i class="fa fa-angle-right"></i> <a href="#">Điện thoại</a></li>
												<li><i class="fa fa-angle-right"></i> <a href="#">Máy tính bảng</a></li>
												<li><i class="fa fa-angle-right"></i> <a href="#">laptop</a></li>
												<li><i class="fa fa-angle-right"></i> <a href="#">Apple</a></li>
												<li><i class="fa fa-angle-right"></i> <a href="#">Đồng hồ thông minh</a></li>
												<li><i class="fa fa-angle-right"></i> <a href="#">Thiết bị đeo tay</a></li>
												<li><i class="fa fa-angle-right"></i> <a href="#">Camera</a></li>
												<li><i class="fa fa-angle-right"></i> <a href="#">Tivi</a></li>
												<li><i class="fa fa-angle-right"></i> <a href="#">Sản phẩm khác</a></li>
											</ul>
										</div>
									</div>
									<div class="widget">
										<h3>
											<i class="fa fa-bars"></i>
											Tin tức
										</h3>
										<div class="content-w">
											<ul>
												<li>
													<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
												<li>
													<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
												<li>
													<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
												<li>
													<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
												<li>
													<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
											</ul>
										</div>
									</div>
									<div class="widget">
										<h3>
											<i class="fa fa-bars"></i>
											Quảng cáo
										</h3>
										<div class="content-banner">
											<a href="#">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner.png" alt="">
											</a>
										</div>
									</div>
									<div class="widget">
										<h3>
											<i class="fa fa-facebook"></i>
											Facebook
										</h3>
										<div class="content-fb">
											<div class="fb-page" data-href="https://www.facebook.com/huykiradotnet/" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
								<div class="product-section">
									<h2 class="title-product">
										<a href="#" class="title">Sản phẩm nổi bật</a>
										<div class="bar-menu"><i class="fa fa-bars"></i></div>
										<div class="list-child">
											<ul>
												<li><a href="#">Điện thoại</a></li>
												<li><a href="#">Máy tính bảng</a></li>
												<li><a href="#">Laptop</a></li>
												<li><a href="#">Phụ kiện</a></li>
											</ul>
										</div>
										<div class="clear"></div>
									</h2>
									<div class="content-product-box">
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
														<span class="sale">Giảm <br>15%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
														<div class="price">
															<span class="price-current">28.990.000₫</span>
															<span class="price-old">33.990.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
														<span class="sale">Giảm <br>10%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
														<div class="price">
															<span class="price-current">4.790.000₫</span>
															<span class="price-old">4.790.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
														<span class="sale">Giảm <br>15%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
														<div class="price">
															<span class="price-current">28.990.000₫</span>
															<span class="price-old">33.990.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
														<span class="sale">Giảm <br>10%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
														<div class="price">
															<span class="price-current">4.790.000₫</span>
															<span class="price-old">4.790.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
														<span class="sale">Giảm <br>10%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
														<div class="price">
															<span class="price-current">4.790.000₫</span>
															<span class="price-old">4.790.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
														<span class="sale">Giảm <br>15%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
														<div class="price">
															<span class="price-current">28.990.000₫</span>
															<span class="price-old">33.990.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
														<span class="sale">Giảm <br>10%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
														<div class="price">
															<span class="price-current">4.790.000₫</span>
															<span class="price-old">4.790.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
														<span class="sale">Giảm <br>15%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
														<div class="price">
															<span class="price-current">28.990.000₫</span>
															<span class="price-old">33.990.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="#"><img src="https://phongtrodn.com/wp-content/uploads/2020/02/huykira.png" alt=""></a>
								<br>
								<br>
								<div class="product-section">
									<h2 class="title-product">
										<a href="#" class="title">Điện thoại</a>
										<div class="bar-menu"><i class="fa fa-bars"></i></div>
										<div class="list-child">
											<ul>
												<li><a href="#">Iphone</a></li>
												<li><a href="#">Samsung</a></li>
												<li><a href="#">Sony</a></li>
												<li><a href="#">HTC</a></li>
											</ul>
										</div>
										<div class="clear"></div>
									</h2>
									<div class="content-product-box">
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
														<span class="sale">Giảm <br>15%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
														<div class="price">
															<span class="price-current">28.990.000₫</span>
															<span class="price-old">33.990.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
														<span class="sale">Giảm <br>10%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
														<div class="price">
															<span class="price-current">4.790.000₫</span>
															<span class="price-old">4.790.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
														<span class="sale">Giảm <br>15%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
														<div class="price">
															<span class="price-current">28.990.000₫</span>
															<span class="price-old">33.990.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
														<span class="sale">Giảm <br>10%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
														<div class="price">
															<span class="price-current">4.790.000₫</span>
															<span class="price-old">4.790.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
														<span class="sale">Giảm <br>10%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
														<div class="price">
															<span class="price-current">4.790.000₫</span>
															<span class="price-old">4.790.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
														<span class="sale">Giảm <br>15%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
														<div class="price">
															<span class="price-current">28.990.000₫</span>
															<span class="price-old">33.990.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png" alt=""></a>
														<span class="sale">Giảm <br>10%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
														<div class="price">
															<span class="price-current">4.790.000₫</span>
															<span class="price-old">4.790.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="item-product">
													<div class="thumb">
														<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png" alt=""></a>
														<span class="sale">Giảm <br>15%</span>
														<div class="action">
															<a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
															<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
															<div class="clear"></div>
														</div>
													</div>
													<div class="info-product">
														<h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
														<div class="price">
															<span class="price-current">28.990.000₫</span>
															<span class="price-old">33.990.000₫</span>
														</div>
														<a href="#" class="view-more">Xem chi tiết</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="box-footer info-contact">
								<h3>Thông tin liên hệ</h3>
								<div class="content-contact">
									<p>Website chuyên cung cấp thiết bị điện tử hàng đầu Việt Nam</p>
									<p>
										<strong>Địa chỉ:</strong> 457/44 Tôn Đức Thắng, Liên Chiểu, Đà Nẵng
									</p>
									<p>
										<strong>Email: </strong> thietkeweb43.com@gmail.com
									</p>
									<p>
										<strong>Điện thoại: </strong> 0358949xxx
									</p>
									<p>
										<strong>Website: </strong> https://huykira.net
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="box-footer info-contact">
								<h3>Thông tin khác</h3>
								<div class="content-list">
									<ul>
										<li><a href="#"><i class="fa fa-angle-double-right"></i> Chính sách bảo mật</a></li>
										<li><a href="#"><i class="fa fa-angle-double-right"></i> Chính sách đổi trả</a></li>
										<li><a href="#"><i class="fa fa-angle-double-right"></i> Phí vẫn chuyển</a></li>
										<li><a href="#"><i class="fa fa-angle-double-right"></i> Hướng dẫn thanh toán</a></li>
										<li><a href="#"><i class="fa fa-angle-double-right"></i> Chương trình khuyến mãi</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="box-footer info-contact">
								<h3>Form liên hệ</h3>
								<div class="content-contact">
									<form action="/" method="GET" role="form">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<input type="text" name="" id="" class="form-control" placeholder="Họ và Tên">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
												<input type="email" name="" id="" class="form-control" placeholder="Địa chỉ mail">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
												<input type="text" name="" id="" class="form-control" placeholder="Số điện thoại">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<input type="text" name="" id="" class="form-control" placeholder="Tiêu đề">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
											</div>
										</div>
										<button type="submit" class="btn-contact">Liên hệ ngay</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<p>Copyright © 2020 HKSHOP All Rights Reserved - Design by THIETKEWEB43.COM</p>
				</div>
			</footer>
		</div>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
	</body>
</html>