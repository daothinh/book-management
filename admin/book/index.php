<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/img/mdb-favicon.ico" type="image/x-icon" />
    <title>Home Page</title>

    <link
            rel='stylesheet'
            href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'
            integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
            crossorigin='anonymous'
    />

    <link rel='stylesheet' href='../../public/css/mdb.home.css' />
    <link rel='stylesheet' href='../../public/css/mdb.form.css' />
    <link rel='stylesheet' href='../../public/css/mdb.insert.css' />
    <link rel='stylesheet' href='../../public/css/mdb.modal.css' />
</head>
<body>
    <?php 
    require "../connect.php";
    ?>

    <?php 
        $sql = "select * from books";
        $result = mysqli_query($connect, $sql);
    ?>

    <header class='home'>
        <div class='container mt-4'>
            <div class='wrapper'>
                <a href="/">
                <img class='logo' src="../../public/img/letter-b-for-book-logo-vector-34122418.jpg" alt="logo">
                </a>
                <div class='account-btn'>
                    <p style="margin-top: 0;margin-bottom: 0rem;margin-left: -21rem;font-size: 20px">
                            Xin chào, <?php echo $_SESSION['name'] ?></p>
                    <a href='../../signout.php'>
                        <button type='button' class='btn btn-secondary'>Đăng xuất</button>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class='container mt-4'>
        <a href="form_insert.php" class='add-book-btn'>
            <button type='button' class='btn btn-primary'>Thêm sách</button>
        </a>
        <table class='table table-striped mt-4'>
            <thead>
                <tr>
                    <th scope='col'>Mã sách</th>
                    <th scope='col'>Tiêu đề</th>
                    <th scope='col'>Tác giả</th>
                    <th scope='col'>Thể loại</th>
                    <th scope='col'>Ngày phát hành</th>
                    <th scope='col'>Số Trang</th>
                    <th scope='col'> </th>
                    <th scope='col'> </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $each) { ?>
                <tr>
                    <td><?php echo $each['idBook'] ?></td>
                    <td><?php echo $each['title'] ?></td>
                    <td><?php echo $each['author'] ?></td>
                    <td><?php echo $each['category'] ?></td>
                    <td><?php echo $each['dateRelease'] ?></td>
                    <td><?php echo $each['totalPage'] ?></td>
                    <td>
                        <a href="form_update.php?id=<?php echo $each['id']?> ">
                            <button type="button" class="btn btn-primary">Xem</button>
                        </a>
                    </td>
                    <td>
                    <a href="delete.php?id=<?php echo $each['id']?>" class="trigger-btn" data-toggle="modal" onclick="return confirm('Bạn chắc chứ? Hành động này không thể hoàn tác!');">
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </a>
                    </td>
                </tr>
                <?php 
                } 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>