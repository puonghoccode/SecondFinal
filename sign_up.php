<?php
$action = filter_input(INPUT_POST, 'action');
if (!empty($action) && $action == 'dangky') {
    // Lấy dữ liệu từ form
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    $birthday = filter_input(INPUT_POST, 'birthday');
    
    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false && !empty($password) && !empty($birthday)) {    
        require_once('conn.php'); // Import tệp chứa hàm getConnection
        $conn = getConnection();

        // Băm mật khẩu
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (name, email, password, birthday) VALUES ('$name', '$email', '$hashedPassword', '$birthday')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Dữ liệu đã được chèn thành công!";
        } else {
            echo "Lỗi khi chèn dữ liệu: " . mysqli_error($conn);
        }
        
        // Đóng kết nối sau khi hoàn thành
        $conn->close();
    } else {
        echo "Điền đầy đủ thông tin.";
    }
}
?>
