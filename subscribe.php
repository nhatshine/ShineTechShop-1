<?php
// Kết nối header
include 'header.php';

// Khởi tạo biến thông báo
$message = '';
$messageType = '';

// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    // Kiểm tra email có hợp lệ không
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Trong thực tế, bạn sẽ lưu email vào database
        // Ví dụ đơn giản: lưu vào file txt
        $file = 'subscribers.txt';
        $current = file_get_contents($file);
        
        // Kiểm tra xem email đã tồn tại chưa
        if (strpos($current, $email) !== false) {
            $message = "Email này đã đăng ký nhận bản tin!";
            $messageType = "warning";
        } else {
            // Thêm email mới vào file
            $current .= $email . "\n";
            file_put_contents($file, $current);
            
            $message = "Cảm ơn bạn đã đăng ký nhận bản tin từ ShineTechShop!";
            $messageType = "success";
            
            // Gửi email xác nhận (trong thực tế)
            // mail($email, "Xác nhận đăng ký bản tin", "Cảm ơn bạn đã đăng ký nhận bản tin từ ShineTechShop!");
        }
    } else {
        $message = "Email không hợp lệ!";
        $messageType = "danger";
    }
}
?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <h2>Đăng Ký Nhận Bản Tin</h2>
                    
                    <?php if ($message): ?>
                        <div class="alert alert-<?php echo $messageType; ?>" role="alert">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>

                   

                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.newsletter {
    text-align: center;
    padding: 40px 0;
}
.newsletter h2 {
    margin-bottom: 20px;
    color: #2B2D42;
}
.alert {
    margin: 20px 0;
    padding: 15px;
    border-radius: 4px;
}
.alert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
}
.alert-warning {
    background-color: #fcf8e3;
    border-color: #faebcc;
    color: #8a6d3b;
}
.alert-danger {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
}
</style>

<?php include 'footer.php'; ?>