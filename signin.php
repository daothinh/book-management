<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <?php 
    if(isset($_GET['error'])) {
    ?>
        <span style="color: red;">
            <?php echo $_GET['error']; ?>
        </span>
    <?php } ?>
    <form action="process_signin.php" method="POST">
        Email
        <input type="email" name="email">
        <br>
        Mật khẩu
        <input type="password" name="password">
        <br>
        <button>Đăng nhập</button>
        <a href="signup.php">Tạo tài khoản</a>    
    </form>
</body>
</html>