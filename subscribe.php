<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'vendor/autoload.php';

// Kết nối header và config database
include 'header.php';
include 'database.php'; 

// Khởi tạo biến thông báo
$message = '';
$messageType = '';

// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $stmt_check = $conn->prepare("SELECT email FROM subscribers WHERE email = ?");
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $result = $stmt_check->get_result();
        
        if ($result->num_rows > 0) {
            $message = "Email này đã đăng ký nhận bản tin!";
            $messageType = "warning";
        } else {
            $stmt_insert = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
            $stmt_insert->bind_param("s", $email);
            
            if ($stmt_insert->execute()) {
                
                // ---- BẮT ĐẦU GỬI MAIL VỚI CHẾ ĐỘ DEBUG ----
                $mail = new PHPMailer(true);
                try {
                    // Cấu hình Server
                    
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'xuannhat2k4@gmail.com'; 
                    $mail->Password   = 'whjg pcwu oxzi axfs';     
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;
                    $mail->CharSet    = 'UTF-8';

                    // Người gửi và Người nhận
                    $mail->setFrom('xuannhat2k4@gmail.com', 'ShineTechShop'); // Email và Tên người gửi
                    $mail->addAddress($email); // Email người nhận (chính là email vừa đăng ký)

                    // Nội dung
                    $mail->isHTML(true);
                    $mail->Subject = 'Xac nhan dang ky nhan ban tin tu ShineTechShop';
                    $mail->Body    = 'Cảm ơn bạn đã đăng ký nhận bản tin từ <b>ShineTechShop</b>! Chúng tôi sẽ sớm gửi cho bạn những ưu đãi mới nhất.';
                    $mail->AltBody = 'Cam on ban da dang ky nhan ban tin tu ShineTechShop!';

                    $mail->send();
                    
                    $message = "Đăng ký thành công! Vui lòng kiểm tra email.";
                    $messageType = "success";
                    
                } catch (Exception $e) {
                    // Lỗi khi gửi mail
                    $message = "Đã lưu email, nhưng gửi mail thất bại. Lỗi: {$mail->ErrorInfo}";
                    $messageType = "warning";
                }
                // ---- KẾT THÚC GỬI MAIL ----
                
            } else {
                $message = "Đã có lỗi xảy ra khi đăng ký. Vui lòng thử lại.";
                $messageType = "danger";
            }
            $stmt_insert->close();
        }
        $stmt_check->close();
    } else {
        $message = "Email không hợp lệ!";
        $messageType = "danger";
    }
    $conn->close();
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
.alert-success { background-color: #dff0d8; border-color: #d6e9c6; color: #3c763d; }
.alert-warning { background-color: #fcf8e3; border-color: #faebcc; color: #8a6d3b; }
.alert-danger { background-color: #f2dede; border-color: #ebccd1; color: #a94442; }
</style>

<?php include 'footer.php'; ?>