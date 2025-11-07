<?php include 'header.php'; ?>

<?php
// DỮ LIỆU CỦA TRANG STORE
// (Bạn đã quên thêm phần này vào)

// Danh mục sản phẩm
$categories = [
    ['id' => 1, 'name' => 'Laptops', 'count' => 120],
    ['id' => 3, 'name' => 'Cameras', 'count' => 1450],
    ['id' => 4, 'name' => 'Accessories', 'count' => 578]
];

// Top selling products
$top_selling = [
    ['img' => 'mac.jpg', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00],
    ['img' => 'product02.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00],
    ['img' => 'product03.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00]
];

// Danh sách sản phẩm trong store
$products = [
    ['img' => 'macpro.jpg', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 5, 'labels' => ['sale' => '-30%', 'new' => 'NEW']],
    ['img' => 'product02.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 4, 'labels' => ['new' => 'NEW']],
    ['img' => 'product03.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 0, 'labels' => []],
    ['img' => 'product04.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 0, 'labels' => []],
    ['img' => 'product05.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 0, 'labels' => []],
    ['img' => 'product06.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 4, 'labels' => []],
    ['img' => 'product07.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 5, 'labels' => []],
    ['img' => 'product08.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 0, 'labels' => []],
    ['img' => 'product09.png', 'name' => 'product name goes here', 'category' => 'Category', 'price' => 980.00, 'old_price' => 990.00, 'rating' => 0, 'labels' => []]
];

?>

    <div class="section">
        <div class="container">
            <div class="row">
                <div id="aside" class="col-md-3">
                    <div class="aside">
                        <h3 class="aside-title">Categories</h3>
                        <div class="checkbox-filter">
                            <?php foreach($categories as $category): ?>
                            <div class="input-checkbox">
                                <input type="checkbox" id="category-<?php echo $category['id']; ?>">
                                <label for="category-<?php echo $category['id']; ?>">
                                    <span></span>
                                    <?php echo $category['name']; ?>
                                    <small>(<?php echo $category['count']; ?>)</small>
                                </label>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="aside">
                        <h3 class="aside-title">Price</h3>
                        <div class="price-filter">
                            <div id="price-slider"></div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number" value="5000">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div>
                    <div class="aside">
                        <h3 class="aside-title">Top selling</h3>
                        <?php foreach($top_selling as $top_product): ?>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/<?php echo $top_product['img']; ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category"><?php echo $top_product['category']; ?></p>
                                <h3 class="product-name"><a href="#"><?php echo $top_product['name']; ?></a></h3>
                                <h4 class="product-price">$<?php echo number_format($top_product['price'], 2); ?> 
                                    <del class="product-old-price">$<?php echo number_format($top_product['old_price'], 2); ?></del>
                                </h4>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    </div>
                <div id="store" class="col-md-9">
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sort By:
                                <select class="input-select">
                                    <option value="0">Popular</option>
                                    <option value="1">Position</option>
                                </select>
                            </label>

                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <?php foreach($products as $index => $product): ?>
                        <div class="col-md-4 col-xs-6">
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
                                    <h3 class="product-name"><a href="#"><?php echo $product['name']; ?></a></h3>
                                    <h4 class="product-price">$<?php echo number_format($product['price'], 2); ?> 
                                        <del class="product-old-price">$<?php echo number_format($product['old_price'], 2); ?></del>
                                    </h4>
                                    <div class="product-rating">
                                        <?php echo displayRating($product['rating']); // Hàm này được gọi từ header.php ?>
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
                        </div>
                        <?php 
                        // Add clearfix at appropriate positions
                        if(($index + 1) % 2 == 0): ?>
                        <div class="clearfix visible-sm visible-xs"></div>
                        <?php endif; ?>

                        <?php if(($index + 1) % 3 == 0): ?>
                        <div class="clearfix visible-lg visible-md"></div>
                        <?php endif; ?>

                        <?php endforeach; ?>
                    </div>
                    <div class="store-filter clearfix">
                        <span class="store-qty">Showing 20-100 products</span>
                        <ul class="store-pagination">
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>