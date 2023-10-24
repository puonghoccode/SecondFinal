<?php
function getConnection(){
$name = "localhost";
$uname = "root";
$password = "";
$db_name = "lunarMoon";
// $conn;


    $conn = new mysqli($name, $uname, $password, $db_name);
    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }
    else{
        echo "thanh cong";
    }
    return $conn; // Trả về đối tượng kết nối
}



// $db = new Database();


?>




<!-- 

// Kết nối đến cơ sở dữ liệu -->
<!-- $conn = new mysqli($sname, $uname, $password, $db_name);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ví dụ truy vấn lấy tất cả dữ liệu từ bảng 'users'
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Lặp qua kết quả và xử lý dữ liệu
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No records found.";
}

// Đóng kết nối sau khi hoàn thành
$conn->close();
?> -->












