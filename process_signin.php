<?php 
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

require 'admin/connect.php';

$sql = "Select * from customers
where email='$email' and password='$password'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result); //trả về số hàng có trong CSDL

echo $number_rows;
if($number_rows == 1){
    session_start();
    $each = mysqli_fetch_array($result); //lấy dữ liệu hàng trong CSDL và lưu nó dưới dạng mảng
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['name'];

    // header('location:user.php');
    header('location:admin/book');
    exit;
}
$_SESSION['error'] = 'Địa chỉ email hoặc mật khẩu không trùng khớp';
header('location:signin.php');