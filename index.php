	<?php include 'header.php'; ?>

	<?php
	// DỮ LIỆU CỦA TRANG INDEX (Trang chủ)

	// Danh sách sản phẩm mới
	$new_products = [
		[
			'id' => 1,
			'img' => 'lenovo.png',
			'category' => 'Category',
			'name' => 'Lenovo Yoga Pro 9',
			'price' => 1434.34,
			'old_price' => 2049.06,
			'rating' => 5,
			'labels' => ['sale' => '-30%', 'new' => 'NEW']
		],
		[
			'id' => 2,
			'img' => 'razer.jpg',
			'category' => 'Category',
			'name' => 'Razer Nari - Wireless',
			'price' => 130,
			'old_price' => 135,
			'rating' => 4,
			'labels' => ['new' => 'NEW']
		],
		[
			'id' => 3,
			'img' => 'mac.jpg',
			'category' => 'Category',
			'name' => 'Laptop MacBook Air 13 inch M4 32GB/1TB',
			'price' => 1196,
			'old_price' => 1708,
			'rating' => 0,
			'labels' => ['sale' => '-30%']
		],
		[
			'id' => 4,
			'img' => 'canon.png',
			'category' => 'Category',
			'name' => 'Canon EOS R7(Body)',
			'price' => 1480,
			'old_price' => 2050,
			'rating' => 5,
			'labels' => []
		],
		[
			'id' => 5,
			'img' => 'pulsar.jpg',
			'category' => 'Category',
			'name' => 'Pulsar Xlite V4(8k Polling rate)',
			'price' => 110,
			'old_price' => 115,
			'rating' => 5,
			'labels' => []
		]
	];

	// Top selling - Accessories
	$top_selling_accessories = [
		[
			'id' => 6,
			'img' => 'lgtech.png',
			'category' => 'Category',
			'name' => 'Logitech G Pro X',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 7,
			'img' => 'hpx.jpg',
			'category' => 'Category',
			'name' => 'HyperX Cloud II',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 8,
			'img' => 'rzer.jpg',
			'category' => 'Category',
			'name' => 'Razer BlackWidow',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 9,
			'img' => 'sonyWh.jpg',
			'category' => 'Category',
			'name' => 'Sony WH-1000XM5',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 10,
			'img' => 'zowie.png',
			'category' => 'Category',
			'name' => 'Zowie EC2',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 11,
			'img' => 'wting.png',
			'category' => 'Category',
			'name' => 'Wooting 60HE',
			'price' => 980.00,
			'old_price' => 990.00
		]
	];

	// Top selling - Laptops
	$top_selling_laptops = [
		[
			'id' => 12,
			'img' => 'macpro.jpg',
			'category' => 'Category',
			'name' => 'MacBook Pro M4',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 13,
			'img' => 'legion.png',
			'category' => 'Category',
			'name' => 'Lenovo Legion 5',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 14,
			'img' => 'acer.webp',
			'category' => 'Category',
			'name' => 'Acer Predator',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 15,
			'img' => 'loq.jpg',
			'category' => 'Category',
			'name' => 'Lenovo LOQ',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 16,
			'img' => 'vivo.jpg',
			'category' => 'Category',
			'name' => 'Asus Vivobook',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 17,
			'img' => 'vostro.jpg',
			'category' => 'Category',
			'name' => 'Dell Vostro',
			'price' => 980.00,
			'old_price' => 990.00
		]
	];

	// Top selling - Cameras
	$top_selling_cameras = [
		[
			'id' => 18,
			'img' => 'g7x.jpg',
			'category' => 'Category',
			'name' => 'Canon G7X Mark II',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 19,
			'img' => 'd3400.jpg',
			'category' => 'Category',
			'name' => 'Nikon D3400',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 20,
			'img' => 'fjix45.jpg',
			'category' => 'Category',
			'name' => 'Fujifilm X-T30',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 21,
			'img' => 'm10.jpg',
			'category' => 'Category',
			'name' => 'Canon M10',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 22,
			'img' => 'SONYh300.jpg',
			'category' => 'Category',
			'name' => 'Sony H300',
			'price' => 980.00,
			'old_price' => 990.00
		],
		[
			'id' => 23,
			'img' => 'gr3x.jpg',
			'category' => 'Category',
			'name' => 'Ricoh GR IIIx',
			'price' => 980.00,
			'old_price' => 990.00
		]
	];

	?>

			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="shop">
								<div class="shop-img">
									<img src="./img/shop01.png" alt="">
								</div>
								<div class="shop-body">
									<h3>Laptop<br>Collection</h3>
									<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="shop">
								<div class="shop-img">
									<img src="./img/shop03.png" alt="">
								</div>
								<div class="shop-body">
									<h3>Accessories<br>Collection</h3>
									<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="shop">
								<div class="shop-img">
									<img src="./img/shop02.png" alt="">
								</div>
								<div class="shop-body">
									<h3>Cameras<br>Collection</h3>
									<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			<div id="new-products" class="section">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							<div class="section-title">
								<h3 class="title">New Products</h3>
								</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="products-tabs">
									<div id="tab1" class="tab-pane active">
										<div class="products-slick" data-nav="#slick-nav-1">
											
											<?php foreach ($new_products as $product): ?>
											<div class="product">
												<div class="product-img">
													<img src="./img/<?php echo $product['img']; ?>" alt="">
													<?php if(!empty($product['labels'])): ?>
													<div class="product-label">
														<?php if(isset($product['labels']['sale'])): ?>
														<span class="sale"><?php echo $product['labels']['sale']; ?></span>
														<?php endif; ?>
														<?php if(isset($product['labels']['new'])): ?>
														<span class="new"><?php echo $product['labels']['new']; ?></span>
														<?php endif; ?>
													</div>
													<?php endif; ?>
												</div>
												<div class="product-body">
													<p class="product-category"><?php echo $product['category']; ?></p>
													<h3 class="product-name"><a href="product.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
													<h4 class="product-price">$<?php echo number_format($product['price'], 2); ?>
														<del class="product-old-price">$<?php echo number_format($product['old_price'], 2); ?></del>
													</h4>
													<div class="product-rating">
														<?php echo displayRating($product['rating']); // Dùng hàm từ header.php ?>
													</div>
													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
												</div>
											</div>
											<?php endforeach; ?>

										</div>
										<div id="slick-nav-1" class="products-slick-nav"></div>
									</div>
									</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			<div id="hot-deal" class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="hot-deal">
								<ul class="hot-deal-countdown">
									<li>
										<div>
											<h3>02</h3>
											<span>Days</span>
										</div>
									</li>
									<li>
										<div>
											<h3>10</h3>
											<span>Hours</span>
										</div>
									</li>
									<li>
										<div>
											<h3>34</h3>
											<span>Mins</span>
										</div>
									</li>
									<li>
										<div>
											<h3>60</h3>
											<span>Secs</span>
										</div>
									</li>
								</ul>
								<h2 class="text-uppercase">hot deal this week</h2>
								<p>New Collection Up to 50% OFF</p>
								<a class="primary-btn cta-btn" href="#">Shop now</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			<div id="top-selling" class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="section-title">
								<h4 class="title">Top selling ( Accessories )</h4>
								<div class="section-nav">
									<div id="slick-nav-3" class="products-slick-nav"></div>
								</div>
							</div>

							<div class="products-widget-slick" data-nav="#slick-nav-3">
								<?php foreach (array_chunk($top_selling_accessories, 3) as $product_group): ?>
								<div>
									<?php foreach ($product_group as $product): ?>
									<div class="product-widget">
										<div class="product-img">
											<img src="./img/<?php echo $product['img']; ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"><?php echo $product['category']; ?></p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
											<h4 class="product-price">$<?php echo number_format($product['price'], 2); ?>
												<del class="product-old-price">$<?php echo number_format($product['old_price'], 2); ?></del>
											</h4>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
								<?php endforeach; ?>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="section-title">
								<h4 class="title">Top selling ( Laptops )</h4>
								<div class="section-nav">
									<div id="slick-nav-4" class="products-slick-nav"></div>
								</div>
							</div>

							<div class="products-widget-slick" data-nav="#slick-nav-4">
								<?php foreach (array_chunk($top_selling_laptops, 3) as $product_group): ?>
								<div>
									<?php foreach ($product_group as $product): ?>
									<div class="product-widget">
										<div class="product-img">
											<img src="./img/<?php echo $product['img']; ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"><?php echo $product['category']; ?></p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
											<h4 class="product-price">$<?php echo number_format($product['price'], 2); ?>
												<del class="product-old-price">$<?php echo number_format($product['old_price'], 2); ?></del>
											</h4>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
								<?php endforeach; ?>
							</div>
						</div>

						<div class="clearfix visible-sm visible-xs"></div>

						<div class="col-md-4 col-xs-6">
							<div class="section-title">
								<h4 class="title">Top selling (Cameras)</h4>
								<div class="section-nav">
									<div id="slick-nav-5" class="products-slick-nav"></div>
								</div>
							</div>

							<div class="products-widget-slick" data-nav="#slick-nav-5">
								<?php foreach (array_chunk($top_selling_cameras, 3) as $product_group): ?>
								<div>
									<?php foreach ($product_group as $product): ?>
									<div class="product-widget">
										<div class="product-img">
											<img src="./img/<?php echo $product['img']; ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"><?php echo $product['category']; ?></p>
											<h3 class="product-name"><a href="product.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
											<h4 class="product-price">$<?php echo number_format($product['price'], 2); ?>
												<del class="product-old-price">$<?php echo number_format($product['old_price'], 2); ?></del>
											</h4>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
								<?php endforeach; ?>
							</div>
						</div>

					</div>
					</div>
				</div>
			<?php include 'footer.php'; ?>