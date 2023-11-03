<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "myweb");

$sql = "SELECT * FROM tbl_user WHERE username = '$username' and password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: admin/admin.php');
} else {
    echo 'Đăng nhập thất bại! Vui lòng kiểm tra lại thông tin đăng nhập.';
}

$conn->close();
?>