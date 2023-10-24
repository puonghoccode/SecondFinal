<?php
$action = filter_input(INPUT_POST, 'action');
if (!empty($action) && $action == 'dangnhap') {
    // Lấy dữ liệu từ form
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false && !empty($password)) {    
        require_once('conn.php'); // Import tệp chứa hàm getConnection
        $conn = getConnection();

        // Tránh SQL Injection sử dụng prepared statements
        $query = "SELECT name, password FROM user WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            // Kiểm tra mật khẩu
            if (password_verify($password, $storedPassword)) {
                // Đăng nhập thành công, thực hiện chuyển hướng đến index.php
            header("Location: index.html");
            exit; // Kết thúc kịch bản PHP để đảm bảo chuyển hướng hoạt động
            } else {
                echo "Sai email hoặc mật khẩu.";
            }
        } else {
            echo "Sai email hoặc mật khẩu.";
        }

        // Đóng kết nối sau khi hoàn thành
        $stmt->close();
        $conn->close();
    } else {
        echo "Điền đầy đủ thông tin.";
    }
}
?>
