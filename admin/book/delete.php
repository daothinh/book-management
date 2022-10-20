<?php 

require '../connect.php';
$id = $_GET['id'];

$sql = "delete from books where id='$id'";
mysqli_query($connect, $sql);
mysqli_close($connect);

header('location: index.php?success=Xoá thành công');
