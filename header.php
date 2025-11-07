<?php
// Cấu hình cơ bản
$page_title = "ShineTechShop - Click & Tech";
$current_year = date('Y');

// Thông tin liên hệ
$contact = [
    'phone' => '+84383581562',
    'email' => 'ShineTechShop@gmail.com',
    'address' => '1132 Đường Láng'
];

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

// Hàm hiển thị rating stars
// Dán code này vào file header.php, thay thế cho hàm displayRating cũ

function displayRating($rating) {
    // Đảm bảo $rating là một số
    $rating = floatval($rating); 
    // Lấy số sao đầy (ví dụ: 4.5 -> 4 sao)
    $fullStars = (int) floor($rating); 
    // Lấy phần lẻ (ví dụ: 4.5 -> 0.5)
    $halfStar = $rating - $fullStars; 
    
    $ratingHtml = '';

    // 1. In ra các sao đầy
    for ($i = 0; $i < $fullStars; $i++) {
        $ratingHtml .= '<i class="fa fa-star"></i>';
    }

    // 2. Xử lý nửa sao (nếu có)
    if ($halfStar >= 0.5) {
        $ratingHtml .= '<i class="fa fa-star-half-o"></i>'; // icon nửa sao
    }

    // 3. Tính toán và in ra các sao rỗng còn lại
    $remainingStars = 5 - ceil($rating); // ceil() làm tròn lên
    for ($i = 0; $i < $remainingStars; $i++) {
        $ratingHtml .= '<i class="fa fa-star-o"></i>';
    }
    
    return $ratingHtml;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $page_title; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>
<body>
    <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    <header>
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> <?php echo $contact['phone']; ?></a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $contact['email']; ?></a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> <?php echo $contact['address']; ?></a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                    <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                </ul>
            </div>
        </div>
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="index.php" class="logo">
                                <img src="./img/logo - Copy.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    <option value="1">Laptops</option>
                                    <option value="1">Cameras</option>
                                    <option value="1">Accessories</option>
                                </select>
                                <input class="input" placeholder="Search here">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <div class="qty">2</div>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty">3</div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/product01.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>

                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/product02.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>
                                    </div>
                                    <div class="cart-summary">
                                        <small>3 Item(s) selected</small>
                                        <h5>SUBTOTAL: $2940.00</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="#">View Cart</a>
                                        <a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            </div>
                    </div>
                    </div>
            </div>
        </div>
        </header>
    <nav id="navigation">
        <div class="container">
            <div id="responsive-nav">
                <ul class="main-nav nav navbar-nav">
                    <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="<?php echo ($current_page == 'store.php') ? 'active' : ''; ?>">
                        <a href="store.php">Store</a>
                    </li>
                    <li>
                        <a href="<?php echo ($current_page == 'index.php') ? '#hot-deal' : 'index.php#hot-deal'; ?>">Hot Deals</a>
                    </li>
                    <li>
                        <a href="<?php echo ($current_page == 'index.php') ? '#new-products' : 'index.php#new-products'; ?>">New Products</a>
                    </li>
                    <li>
                        <a href="<?php echo ($current_page == 'index.php') ? '#top-selling' : 'index.php#top-selling'; ?>">Top Selling</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</body>
</html>