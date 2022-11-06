<?php 

require "../connect.php";
session_start();

$id = $_POST['id'];
$idBook = $_POST['idBook'];
$title = $_POST['title'];
$author = $_POST['author'];
$totalPage = $_POST['totalPage'];
$dateRelease = $_POST['dateRelease'];
$description = $_POST['description'];
$category = $_POST['category'];
$image_new = $_FILES['image_new'];
$image_old = $_POST['image_old'];

if(empty($id)){
    $_SESSION['error'] = 'Phải truyền mã để sửa (process)';
    header('location:index.php');
    exit;
}
// print_r($image_new);
// die();
if(empty($idBook) || empty($title) || empty($author) || empty($totalPage) || empty($dateRelease) || empty($description) || empty($category)){
    $_SESSION['error'] = 'Thông tin không được để trống';
    header("location:form_update.php?id=$id");
    exit;
}

$sql = "select count(*) from books
where idBook = '$idBook'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

// if($number_rows > 1){
//     $_SESSION['error'] = 'Mã sách bạn điền đã tồn tại, vui lòng sử dụng mã khác.';
//     header("location:form_update.php?id=$id");
//     exit;
// }

$folder = 'img/';
if($image_new['size'] > 0){
    $file_extension = explode('.', $image_new['name'])[1]; //cắt tên file và lấy định dạng file
    $file_name = $id . '.' . $file_extension;
    $path_file = $folder . $file_name;
    move_uploaded_file($image_new["tmp_name"], $path_file); //lưu file vào server
}
else{
    $file_name = $image_old;
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
image = '$file_name'
where id = '$id'";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
mysqli_close($connect);

if(empty($error)){
    $_SESSION['success'] = 'Sửa thành công';
    header('location: index.php');
    exit;
}
else {
    $_SESSION['error'] = 'Mã sách bạn điền đã tồn tại, vui lòng sử dụng mã khác.';
    header("location:form_update.php?id=$id");
    exit;
}
