<?php 
// Include file header
include 'header.php'; 

// Thông tin sản phẩm (có thể lấy từ database)
$product = [
    'name' => 'product name goes here',
    'price' => 980.00,
    'old_price' => 990.00,
    'rating' => 4.5,
    'reviews_count' => 10,
    'stock' => 'In Stock',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
];
?>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="./img/mac.jpg" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/macpro.jpg" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/wting.png" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/zowie.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="./img/lgtech.png" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/razer.jpg" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/steel.jpg" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/rzer.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name"><?php echo $product['name']; ?></h2>
                        <div>
                            <div class="product-rating">
                                <?php 
                                $rating = floor($product['rating']);
                                for($i = 0; $i < 5; $i++) {
                                    if($i < $rating) {
                                        echo '<i class="fa fa-star"></i>';
                                    } else {
                                        echo '<i class="fa fa-star-o"></i>';
                                    }
                                }
                                ?>
                            </div>
                            <a class="review-link" href="#"><?php echo $product['reviews_count']; ?> Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">$<?php echo number_format($product['price'], 2); ?> 
                                <del class="product-old-price">$<?php echo number_format($product['old_price'], 2); ?></del>
                            </h3>
                            <span class="product-available"><?php echo $product['stock']; ?></span>
                        </div>
                        <p><?php echo $product['description']; ?></p>

                        <div class="product-options">
                            <label>
                                Size
                                <select class="input-select">
                                    <option value="0">X</option>
                                </select>
                            </label>
                            <label>
                                Color
                                <select class="input-select">
                                    <option value="0">Red</option>
                                </select>
                            </label>
                        </div>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number" value="1">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">Headphones</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="product-tab">
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li><a data-toggle="tab" href="#tab2">Details</a></li>
                            <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div id="rating">
                                            <div class="rating-avg">
                                                <span>4.5</span>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 80%;"></div>
                                                    </div>
                                                    <span class="sum">3</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <span class="sum">2</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="reviews">
                                            <ul class="reviews">
                                                <?php
                                                $reviews = [
                                                    ['name' => 'John', 'date' => '27 DEC 2018, 8:0 PM', 'rating' => 4],
                                                    ['name' => 'John', 'date' => '27 DEC 2018, 8:0 PM', 'rating' => 4],
                                                    ['name' => 'John', 'date' => '27 DEC 2018, 8:0 PM', 'rating' => 4]
                                                ];
                                                
                                                foreach($reviews as $review): ?>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name"><?php echo $review['name']; ?></h5>
                                                        <p class="date"><?php echo $review['date']; ?></p>
                                                        <div class="review-rating">
                                                            <?php 
                                                            for($i = 0; $i < 5; $i++) {
                                                                if($i < $review['rating']) {
                                                                    echo '<i class="fa fa-star"></i>';
                                                                } else {
                                                                    echo '<i class="fa fa-star-o empty"></i>';
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                    </div>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <ul class="reviews-pagination">
                                                <li class="active">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div id="review-form">
                                            <form class="review-form" method="POST" action="submit_review.php">
                                                <input class="input" type="text" name="name" placeholder="Your Name" required>
                                                <input class="input" type="email" name="email" placeholder="Your Email" required>
                                                <textarea class="input" name="review" placeholder="Your Review" required></textarea>
                                                <div class="input-rating">
                                                    <span>Your Rating: </span>
                                                    <div class="stars">
                                                        <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                                        <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                                        <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                                        <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                                        <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                                    </div>
                                                </div>
                                                <button class="primary-btn" type="submit">Submit</button>
                                            </form>
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
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Related Products</h3>
                    </div>
                </div>

                <?php
                $related_products = [
                    ['img' => 'mac.jpg', 'label' => 'sale', 'discount' => '-30%'],
                    ['img' => 'razer.jpg', 'label' => 'new', 'discount' => null],
                    ['img' => 'legion.png', 'label' => null, 'discount' => null],
                    ['img' => 'lenovo.png', 'label' => null, 'discount' => null]
                ];
                
                foreach($related_products as $prod): ?>
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="./img/<?php echo $prod['img']; ?>" alt="">
                            <?php if($prod['label']): ?>
                            <div class="product-label">
                                <span class="<?php echo $prod['label']; ?>"><?php echo $prod['discount'] ?: strtoupper($prod['label']); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
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
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php 
// Include file footer
include 'footer.php'; 
?>