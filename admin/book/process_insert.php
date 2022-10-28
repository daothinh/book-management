<?php 

$idBook = addslashes($_POST['idBook']);
$title = addslashes($_POST['title']);
$author = addslashes($_POST['author']);
$totalPage = $_POST['totalPage'];
$dateRelease = $_POST['dateRelease'];
$description = addslashes($_POST['description']);
$category = $_POST['category'];
$image = $_POST['image'];

if(empty($idBook) || empty($title) || empty($author) || empty($totalPage) || empty($dateRelease) || empty($description) || empty($category) || empty($image)){
    header('location: form_insert.php?error=Cần truyền đầy đủ thông tin');
}
require '../connect.php';

$sql = "insert into Books(idBook, title, author, totalPage, dateRelease, description, category, image) values
('$idBook', '$title', '$author', '$totalPage', '$dateRelease', '$description', '$category', '$image')";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
mysqli_close($connect);

if(empty($error)){
    header('location: index.php?success=Thêm thành công');
}
