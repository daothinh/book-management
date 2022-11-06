<?php 
session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

require 'admin/connect.php';

$sql = "select count(*) from customers
where email = '$email'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)']; //lấy giá trị cột count(*)

if($number_rows == 1){
    $_SESSION['error'] = 'Email này đã được sử dụng';
    header('location:signup.php');
    exit;
}

$sql = "insert into customers(name, email, password)
values ('$name', '$email', '$password')";
mysqli_query($connect, $sql);

$sql = "select id from customers
where email='$email'";
$result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($result)['id'];

$_SESSION['id'] = $id;
$_SESSION['name'] = $name;

// header('location:user.php');
header('location:admin/book');
mysqli_close($connect);

