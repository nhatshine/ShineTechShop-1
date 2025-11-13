<?php
// Thông tin kết nối database
$servername = "127.0.0.1"; // Địa chỉ server (từ ảnh của bạn)
$username = "root";       // Username mặc định của XAMPP/WAMP
$password = "";           // Password mặc định của XAMPP/WAMP (thường là rỗng)
$dbname = "shinetechshop_db"; // Tên database (từ ảnh của bạn)

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Đặt charset thành utf8 để hỗ trợ tiếng Việt
$conn->set_charset("utf8");
?>