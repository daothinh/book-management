<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:admin/book');
    exit;
}
header('location:signin.php');
?>