<?php 
session_start();

$idBook = addslashes($_POST['idBook']);
$title = addslashes($_POST['title']);
$author = addslashes($_POST['author']);
$totalPage = $_POST['totalPage'];
$dateRelease = $_POST['dateRelease'];
$description = addslashes($_POST['description']);
$category = $_POST['category'];
$image = $_FILES['image'];

// die($path_file);

// if(empty($idBook) || empty($title) || empty($author) || empty($totalPage) || empty($dateRelease) || empty($description) || empty($category) || empty($image)){
//     $_SESSION['error'] = 'Cần truyền đầy đủ thông tin';
//     header('location: form_insert.php');
//     exit;
// }

require '../connect.php';

$sql = "select count(*) from books
where idBook = '$idBook'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1){
    $_SESSION['error'] = 'Mã sách bạn điền đã tồn tại, vui lòng sử dụng mã khác.';
    header('location:form_insert.php');
    exit;
}

$folder = 'img/';
$file_extension = explode('.', $image['name'])[1];
$file_name = $id .  '.' . $file_extension;
$path_file = $folder . $file_name;
move_uploaded_file($image["tmp_name"], $path_file);

$sql = "insert into Books(idBook, title, author, totalPage, dateRelease, description, category, image) values
('$idBook', '$title', '$author', '$totalPage', '$dateRelease', '$description', '$category', '$file_name')";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
mysqli_close($connect);

if(empty($error)){
    $_SESSION['success'] = 'Sửa thành công';
    header('location: index.php');
}
