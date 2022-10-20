<ol>
    <li><a href="../book">Quản lý sách</a></li>
    <li><a href="../root">Giao diện admin</a></li>
    <li><a href="../book/form_insert.php">Thêm sách</a></li>
</ol>

<?php 
if(isset($_GET['error'])){
?>
    <span style="color: red;">
        <?php 
        echo $_GET['error'];
        ?>
    </span>
<?php 
}
?>
<?php
if(isset($_GET['success'])){
?>
    <span style="color: green;">
        <?php 
        echo $_GET['success'];
        ?>
    </span>
<?php 
}
?>
