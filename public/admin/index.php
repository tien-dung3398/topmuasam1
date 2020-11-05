<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dangky.css">
    <link rel="stylesheet" href="css/danhmucsp.css">
    <link rel="stylesheet" href="css/quantrivien.css">
    <link rel="stylesheet" href="css/thongtin.css">
    <link rel="stylesheet" href="css/loaisp.css">
    <link rel="stylesheet" href="css/khachhang.css">
    <link rel="stylesheet" href="../icon/css/all.min.css">
    <link rel="stylesheet" href="../icon/css/fontawesome.min.css">
    <link rel="shortcut icon" href="../img/logo2.png">
    <title>Chợ Tốt - Trang quản trị</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['login-admin'])){
        header('location:dangnhap.php');
    }
    ?>
    <div class="container">
    <?php
    include 'moduls/header.php';
    include 'moduls/menu.php';
    include 'moduls/content.php';
    include 'moduls/footer.php';
    ?>
    </div>
</body>
</html>