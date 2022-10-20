<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Giao diện quản lý sách</h1>
    <?php 
    include "../menu.php";
    require "../connect.php";
    ?>
    <?php 
        $sql = "select * from books";
        $result = mysqli_query($connect, $sql);
    ?>

    <table border="1" width=100%>
        <th>Mã sách</th>
        <th>Tiêu đề</th>
        <th>Tên tác giả</th>
        <th>Thể loại</th>
        <th>Ngày phát hành</th>
        <th>Ảnh</th>
        <th>Sửa</th>
        <th>Xoá</th>
        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['idBook'] ?></td>
                <td><?php echo $each['title'] ?></td>
                <td><?php echo $each['author'] ?></td>
                <td><?php echo $each['category'] ?></td>
                <td><?php echo $each['dateRelease'] ?></td>
                <td>
                    <img height="100px" src="<?php echo $each['image'] ?>" alt="">
                </td>
                <td>
                    <a href="update_form.php?id=<?php echo $each['id'] ?>">Sửa</a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $each['id'] ?>">Xoá</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>