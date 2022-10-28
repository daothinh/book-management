<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <h1>Form Đăng ký</h1>
    <?php 
    if(isset($_GET['error'])){ 
    ?>
        <span style="color: red;">
            <?php echo $_GET['error']; ?>
        </span>
    <?php
    }
    ?>
    <form action="process_signup.php" method="post">
        Tên
        <input type="text" name="name">
        <br>
        Email
        <input type="email" name="email">
        <br>
        Mật khẩu
        <input type="password" name="password">
        <br>
        <button>Đăng ký</button>
        <a href="signin.php">Đăng nhập</a>
    </form>
</body>
</html>