<?php
require_once('../function.php');
$them = new ketnoi();
$them->connect();
$quanly=$_GET['quanly'];
$id=$_GET['id'];
$loai = $_GET['loai'];
$danhmuc = $_POST['tendanhmuc'];
$macode = $_POST['macode'];
$thutu = $_POST['thutu'];
$loaisp =$_POST['loaisp'];
if (isset($_POST['them'])) {
    $sql = "insert into danhmucluachon (tendanhmuc,macode,thutu,loaisp) values ('$danhmuc','$macode','$thutu','$loaisp')";
    $them->run($sql);
    header('location:../../index.php?loai=' . $loai .'&ac=danhmucsp');
}elseif(isset($_POST['sua'])) {
    $sql = "update danhmucluachon set tendanhmuc='$danhmuc',macode='$macode',thutu='$thutu' where id_danhmucluachon='$id'";
    $them->run($sql);
    header('location:../../index.php?loai=' . $loai .'&ac=danhmucsp');
}else{
    $sql="delete from danhmucluachon where id_danhmucluachon='$id'";
    $them->run($sql);
    header('location:../../index.php?loai=' . $loai .'&ac=danhmucsp');
}
$them->disconnect();

?>