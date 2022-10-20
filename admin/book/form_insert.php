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
    require '../menu.php';
    ?>
    <form action="process_insert.php" method="post">
        Mã sách
        <input type="text" name="idBook">
        <br>
        Tiêu đề sách
        <input type="text" name="title">
        <br>
        Tác giả
        <input type="text" name="author">
        <br>
        Tổng số trang
        <input type="number" name="totalPage">
        <br>
        Ngày phát hành
        <input type="date" name="dateRelease">
        <br>
        Mô tả
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        Thể loại
        <select name="category" id="">
            <option value="Thiếu nhi">Thiếu nhi</option>
            <option value="Trinh thám">Trinh thám</option>
            <option value="Hài hước">Hài hước</option>
        </select>
        <br>
        Ảnh
        <input type="text" name="image">
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>