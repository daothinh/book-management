<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    if(empty($id)){
        header('location:index.php?error=Phải truyền mã để sửa');
    }

    require '../menu.php';
    require '../connect.php';

    $sql = "select * from books where id='$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    ?>

    <form action="process_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        Mã sách
        <input type="text" name="idBook" value="<?php echo $each['idBook'] ?>">
        <br>
        Tiêu đề sách
        <input type="text" name="title" value="<?php echo $each['title'] ?>">
        <br>
        Tác giả
        <input type="text" name="author" value="<?php echo $each['author'] ?>">
        <br>
        Tổng số trang
        <input type="number" name="totalPage" value="<?php echo $each['totalPage'] ?>">
        <br>
        Ngày phát hành
        <input type="date" name="dateRelease" value="<?php echo $each['dateRelease'] ?>">
        <br>
        Mô tả
        <textarea name="desc" id="" cols="30" rows="10"><?php echo $each['description'] ?></textarea>
        <br>
        Thể loại
        <select name="category">
            <option value="Thiếu nhi"
            <?php if( $each['category']=="Thiếu nhi" ): ?> 
                selected="selected"
            <?php endif; ?> 
            >
            Thiếu nhi</option>
            <option value="Trinh thám"
            <?php if( $each['category']=="Trinh thám" ): ?> 
                selected="selected"
            <?php endif; ?>
            >
                Trinh thám
            </option>
            <option value="Hài hước"
            <?php if( $each['category']=="Hài hước" ): ?> 
                selected="selected"
            <?php endif; ?>
            >
                Hài hước
            </option>
        </select>
        <br>
        Ảnh
        <input type="text" name="image" value="<?php echo $each['image'] ?>">
        <br>
        <button>Cập nhật</button>
    </form>
</body>
</html>