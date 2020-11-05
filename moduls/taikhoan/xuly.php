<?php
require_once('../function.php');
$quanly = new ketnoi();
$quanly->connect();
$loai =$_GET['loai'];
$id =$_GET['id'];
$use = $_POST['use'];
$fist = $_POST['fist'];
$pass = $_POST['pass'];
if(isset($_POST['sua'])){
    $sql=" update admin set usename='$use',  password= '$pass' , fistname = '$fist' where id_admin='$id'";
    $quanly->run($sql);
    header('location:../../index.php?loai='.$loai.'&ac=quantrivien&sua=thanhcong');
}elseif(isset($_POST['xoataikkhoan'])){
    $sql=" delete from taikhoan where id_taikhoan='$id' ";
    $quanly->run($sql);
    header('location:../../index.php?loai='.$loai.'&ac=khachhang&xoa=thanhcong');
}elseif(isset($_POST['chitiet'])){
    header('location:../../index.php?loai='.$loai.'&ac=chitiet&khachhang='.$id.'');
}
else{
    $sql=" delete from admin where id_admin='$id' ";
    $quanly->run($sql);
    header('location:../../index.php?loai='.$loai.'&ac=quantrivien&xoa=thanhcong');
}
$quanly->disconnect();
