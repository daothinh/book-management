<?php session_start(); 
if(empty($_SESSION['id'])){
    $_SESSION['error'] = 'Bạn cần đăng nhập';
    header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Xin chào, <?php echo $_SESSION['name']; ?>
        <a href="signout.php">Đăng xuất</a>
    </h1>
</body>
</html>