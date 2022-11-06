<ol>
    <li><a href="../book">Quản lý sách</a></li>
</ol>

<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


if(isset($_SESSION['error'])){
?>
    <span style="color: red;">
        <?php 
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?>
    </span>
<?php 
}
?>
<?php
if(isset($_SESSION['success'])){
?>
    <span style="color: green;">
        <?php 
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </span>
<?php 
}
?>
