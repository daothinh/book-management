<?php 

require "../connect.php";

$id = $_POST['id'];
$idBook = $_POST['idBook'];
$title = $_POST['title'];
$author = $_POST['author'];
$totalPage = $_POST['totalPage'];
$dateRelease = $_POST['dateRelease'];
$description = $_POST['desc'];
$category = $_POST['category'];
$image = $_POST['image'];

if(empty($id)){
    header('location:index.php?error=Phải truyền mã để sửa');
    exit;
}

if(empty($idBook) || empty($title) || empty($author) || empty($totalPage) || empty($dateRelease) || empty($description) || empty($category) || empty($image)){
    header("location:update_form.php?id=$id&error=Thông tin không được để trống");
    exit;
}
$sql = "Update books
set
idBook = '$idBook',
title = '$title',
author = '$author',
totalPage = '$totalPage',
dateRelease = '$dateRelease',
description = '$description',
category = '$category',
image = '$image'
where id = '$id'";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
mysqli_close($connect);

if(empty($error)){
    header('location: index.php?success=Sửa thành công');
}
else {
    header("location:update_form.php?id=$id&error=Lỗi truy vấn");
}
