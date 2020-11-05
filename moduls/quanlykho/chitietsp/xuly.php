<?php
require_once('../../function.php');
$them = new ketnoi();
$them->connect();
$quanly=$_GET['quanly'];
$id=$_GET['id'];
$loai = $_GET['loai'];
$danhmuc = $_POST['tensp'];
$macodesp = $_POST['macodesp'];
$thutusp = $_POST['thutusp'];
$loaisp =$_POST['loaisp'];
if (isset($_POST['them'])) {
    if($loaisp==''){
        header('location:../../../index.php?loai=' . $loai .'&ac=chitietsp&dt=thatbai');
    }else{
    $sql = "insert into chitietsp (tensp,macodesp,thutusp,loaisp) values ('$danhmuc','$macodesp','$thutusp','$loaisp')";
    $them->run($sql);
    header('location:../../../index.php?loai=' . $loai .'&ac=chitietsp');
    }
}elseif(isset($_POST['sua'])) {
    if($loaisp==''){
        header('location:../../../index.php?loai=' . $loai .'&ac=chitietsp&dt=thatbai');
    }else{
    $sql = "update chitietsp set tensp='$danhmuc',macodesp='$macodesp',thutusp='$thutusp',loaisp='$loaisp' where id_sp='$id'";
    $them->run($sql);
    header('location:../../../index.php?loai=' . $loai .'&ac=chitietsp');
    }
}else{
    $sql="delete from chitietsp where id_sp='$id'";
    $them->run($sql);
    header('location:../../../index.php?loai=' . $loai .'&ac=chitietsp');
}
$them->disconnect();

?>