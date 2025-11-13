<?php include 'header.php'; ?>

<?php
// DỮ LIỆU CỦA TRANG STORE
// (Bạn đã quên thêm phần này vào)

// Danh mục sản phẩm
$categories = [
    ['id' => 1, 'name' => 'Laptops', 'count' => 8],
    ['id' => 3, 'name' => 'Cameras', 'count' => 5],
    ['id' => 4, 'name' => 'Accessories', 'count' => 7]
];

// Top selling products
$top_selling = [
    ['img' => 'mac.jpg', 'name' => 'MacBook Pro M4', 'category' => 'Laptops', 'price' => 1299.00, 'old_price' => 1499.00],
    ['img' => 'razer.jpg', 'name' => 'Razer Nari - Wireless', 'category' => 'Accessories', 'price' => 130.00, 'old_price' => 150.00],
    ['img' => 'lgtech.png', 'name' => 'Logitech G Pro X', 'category' => 'Accessories', 'price' => 98.00, 'old_price' => 120.00]
];

// Danh sách sản phẩm trong store
$products = [
    ['img' => 'macpro.jpg', 'name' => 'MacBook Pro M4', 'category' => 'Laptops', 'price' => 1299.00, 'old_price' => 1499.00, 'rating' => 5, 'labels' => ['sale' => '-15%', 'new' => 'NEW']],
    ['img' => 'lenovo.png', 'name' => 'Lenovo Yoga Pro 9', 'category' => 'Laptops', 'price' => 1434.34, 'old_price' => 2049.06, 'rating' => 5, 'labels' => ['sale' => '-30%', 'new' => 'NEW']],
    ['img' => 'mac.jpg', 'name' => 'MacBook Air 13 M4', 'category' => 'Laptops', 'price' => 1196.00, 'old_price' => 1708.00, 'rating' => 4, 'labels' => ['sale' => '-30%']],
    ['img' => 'canon.png', 'name' => 'Canon EOS R7 (Body)', 'category' => 'Cameras', 'price' => 1480.00, 'old_price' => 2050.00, 'rating' => 5, 'labels' => []],
    ['img' => 'pulsar.jpg', 'name' => 'Pulsar Xlite V4', 'category' => 'Accessories', 'price' => 110.00, 'old_price' => 115.00, 'rating' => 5, 'labels' => []],
    ['img' => 'hpx.jpg', 'name' => 'HyperX Cloud II', 'category' => 'Accessories', 'price' => 120.00, 'old_price' => 150.00, 'rating' => 4, 'labels' => []],
    ['img' => 'wting.png', 'name' => 'Wooting 60HE', 'category' => 'Accessories', 'price' => 199.00, 'old_price' => 249.00, 'rating' => 5, 'labels' => []],
    ['img' => 'sonyWh.jpg', 'name' => 'Sony WH-1000XM5', 'category' => 'Accessories', 'price' => 350.00, 'old_price' => 399.00, 'rating' => 4, 'labels' => []],
    ['img' => 'zowie.png', 'name' => 'Zowie EC2', 'category' => 'Accessories', 'price' => 79.00, 'old_price' => 99.00, 'rating' => 4, 'labels' => []],
    ['img' => 'razer.jpg', 'name' => 'Razer Nari - Wireless', 'category' => 'Accessories', 'price' => 130.00, 'old_price' => 150.00, 'rating' => 4, 'labels' => ['new' => 'NEW']],
    ['img' => 'lgtech.png', 'name' => 'Logitech G Pro X', 'category' => 'Accessories', 'price' => 98.00, 'old_price' => 120.00, 'rating' => 5, 'labels' => []],
    ['img' => 'legion.png', 'name' => 'Lenovo Legion 5', 'category' => 'Laptops', 'price' => 999.00, 'old_price' => 1199.00, 'rating' => 5, 'labels' => []],
    ['img' => 'acer.webp', 'name' => 'Acer Predator', 'category' => 'Laptops', 'price' => 899.00, 'old_price' => 1099.00, 'rating' => 4, 'labels' => []],
    ['img' => 'loq.jpg', 'name' => 'Lenovo LOQ', 'category' => 'Laptops', 'price' => 799.00, 'old_price' => 899.00, 'rating' => 4, 'labels' => []],
    ['img' => 'vivo.jpg', 'name' => 'Asus Vivobook', 'category' => 'Laptops', 'price' => 649.00, 'old_price' => 749.00, 'rating' => 4, 'labels' => []],
    ['img' => 'vostro.jpg', 'name' => 'Dell Vostro', 'category' => 'Laptops', 'price' => 549.00, 'old_price' => 649.00, 'rating' => 3, 'labels' => []],
    ['img' => 'g7x.jpg', 'name' => 'Canon G7X Mark II', 'category' => 'Cameras', 'price' => 699.00, 'old_price' => 799.00, 'rating' => 4, 'labels' => []],
    ['img' => 'd3400.jpg', 'name' => 'Nikon D3400', 'category' => 'Cameras', 'price' => 499.00, 'old_price' => 599.00, 'rating' => 4, 'labels' => []],
    ['img' => 'gr3x.jpg', 'name' => 'Ricoh GR IIIx', 'category' => 'Cameras', 'price' => 999.00, 'old_price' => 1099.00, 'rating' => 5, 'labels' => []],
    ['img' => 'm10.jpg', 'name' => 'Canon M10', 'category' => 'Cameras', 'price' => 299.00, 'old_price' => 349.00, 'rating' => 3, 'labels' => []]
];

// Pagination settings (server-side pagination for demo)
$perPage = 9; // items per page

// Read filters from GET (PHP-only filtering)
$selectedCats = isset($_GET['cat']) ? (array)$_GET['cat'] : [];
$minPrice = (isset($_GET['min_price']) && $_GET['min_price'] !== '') ? floatval($_GET['min_price']) : null;
$maxPrice = (isset($_GET['max_price']) && $_GET['max_price'] !== '') ? floatval($_GET['max_price']) : null;

// Get sort parameter
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'default';

// Apply server-side filtering
$filtered_products = array_filter($products, function($p) use ($selectedCats, $minPrice, $maxPrice) {
    if (!empty($selectedCats) && !in_array($p['category'], $selectedCats)) return false;
    if (!is_null($minPrice) && $p['price'] < $minPrice) return false;
    if (!is_null($maxPrice) && $p['price'] > $maxPrice) return false;
    return true;
});
$filtered_products = array_values($filtered_products);

// Apply sorting
switch($sort) {
    case 'price-asc':
        usort($filtered_products, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        break;
    case 'price-desc':
        usort($filtered_products, function($a, $b) {
            return $b['price'] <=> $a['price'];
        });
        break;
    case 'name-asc':
        usort($filtered_products, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
        break;
    case 'name-desc':
        usort($filtered_products, function($a, $b) {
            return strcmp($b['name'], $a['name']);
        });
        break;
    case 'rating-desc':
        usort($filtered_products, function($a, $b) {
            return $b['rating'] <=> $a['rating'];
        });
        break;
    default:
        // Keep original order
        break;
}

$total_products = count($filtered_products);
$totalPages = max(1, (int)ceil($total_products / $perPage));
$currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
if ($currentPage > $totalPages) $currentPage = $totalPages;
$offset = ($currentPage - 1) * $perPage;
$paged_products = array_slice($filtered_products, $offset, $perPage);

?>

    <div class="section">
        <div class="container">
            <div class="row">
                <div id="aside" class="col-md-3">
                    <form method="get" id="filters">
                    <div class="aside">
                        <h3 class="aside-title">Categories</h3>
                        <div class="checkbox-filter">
                            <?php foreach($categories as $category): ?>
                            <div class="input-checkbox">
                                <input type="checkbox" name="cat[]" id="category-<?php echo $category['id']; ?>" value="<?php echo $category['name']; ?>" <?php echo in_array($category['name'], $selectedCats) ? 'checked' : ''; ?>>
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
                                <input id="price-min" name="min_price" type="number" value="<?php echo isset($minPrice) && !is_null($minPrice) ? intval($minPrice) : ''; ?>">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" name="max_price" type="number" value="<?php echo isset($maxPrice) && !is_null($maxPrice) ? intval($maxPrice) : ''; ?>">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                        <div style="margin-top:10px;">
                            <button type="submit" class="primary-btn">Apply</button>
                            <a href="store.php" class="primary-btn" style="background:#1e1f29;margin-left:8px;">Reset</a>
                        </div>
                    </div>
                    </form>
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
                                <select name="sort" class="input-select" form="filters">
                                    <option value="default" <?php echo $sort === 'default' ? 'selected' : ''; ?>>Default</option>
                                    <option value="price-asc" <?php echo $sort === 'price-asc' ? 'selected' : ''; ?>>Price: Low to High</option>
                                    <option value="price-desc" <?php echo $sort === 'price-desc' ? 'selected' : ''; ?>>Price: High to Low</option>
                                    <option value="name-asc" <?php echo $sort === 'name-asc' ? 'selected' : ''; ?>>Name: A to Z</option>
                                    <option value="name-desc" <?php echo $sort === 'name-desc' ? 'selected' : ''; ?>>Name: Z to A</option>
                                    <option value="rating-desc" <?php echo $sort === 'rating-desc' ? 'selected' : ''; ?>>Highest Rated</option>
                                </select>
                            </label>
                        </div> </div> <div class="row" id="product-grid">
                        <?php foreach($paged_products as $i => $product): ?>
                        <?php $index = $offset + $i; ?>
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
                        // Add clearfix at appropriate positions (use global index)
                        if((($index + 1) % 2) == 0): ?>
                        <div class="clearfix visible-sm visible-xs"></div>
                        <?php endif; ?>

                        <?php if(($index + 1) % 3 == 0): ?>
                        <div class="clearfix visible-lg visible-md"></div>
                        <?php endif; ?>

                        <?php endforeach; ?>
                    </div>
                    <div class="store-filter clearfix" id="store-filter-bottom">
                        <span class="store-qty" id="store-qty">Showing <?php echo ($total_products>0? $offset+1 : 0); ?> - <?php echo min($offset + count($paged_products), $total_products); ?> of <?php echo $total_products; ?> products</span>
                        <ul class="store-pagination" id="store-pagination">
                            <?php 
                            // Preserve all current GET parameters except 'page'
                            $params = $_GET;
                            unset($params['page']);
                            $queryString = http_build_query($params);
                            $pageLink = '?' . ($queryString ? $queryString . '&' : '');
                            ?>
                            <?php if ($currentPage > 1): ?>
                                <li><a href="<?php echo $pageLink; ?>page=<?php echo $currentPage - 1; ?>"><i class="fa fa-angle-left"></i></a></li>
                            <?php endif; ?>
                            <?php for ($p = 1; $p <= $totalPages; $p++): ?>
                                <?php if ($p == $currentPage): ?>
                                    <li class="active"><?php echo $p; ?></li>
                                <?php else: ?>
                                    <li><a href="<?php echo $pageLink; ?>page=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php if ($currentPage < $totalPages): ?>
                                <li><a href="<?php echo $pageLink; ?>page=<?php echo $currentPage + 1; ?>"><i class="fa fa-angle-right"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    </div>
                </div>
        </div>
    </div>
<?php include 'footer.php'; ?>