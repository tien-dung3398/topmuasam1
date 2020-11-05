<?php
$maychu='localhost';
$taikhoan='root';
$pass='';
$data='chotot';
$conn=mysqli_connect($maychu,$taikhoan,$pass,$data) or die ('Lỗi kết nối');
mysqli_select_db($conn,$data);
?>