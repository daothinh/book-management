<?php 

require '../connect.php';
$id = $_GET['id'];

$sql = "delete from books where id='$id'";
mysqli_query($connect, $sql);
mysqli_close($connect);
$_SESSION['success'] = 'Xoá thành công';
header('location: index.php');
