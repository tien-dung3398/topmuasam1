<div class="content">
    <?php
    if (isset($_GET['ac'])) {
        $tam = $_GET['ac'];
    } else {
        $tam = '';
    }
    if ($tam == 'dangky') {
        include 'moduls/dangky.php';
    } elseif ($tam == 'danhmucsp') {
        include 'moduls/quanlykho/danhmucsp.php';
    } elseif ($tam == 'quantrivien') {
        include 'moduls/taikhoan/quantrivien.php';
    } elseif ($tam == 'khachhang') {
    include 'moduls/taikhoan/khachhang.php';
 } elseif ($tam == 'chitiet') {
    include 'moduls/taikhoan/thongtin.php';
 } elseif ($tam == 'danhsachden') {
    include 'moduls/taikhoan/danhsachden.php';
  }elseif ($tam == 'chitietsp') {
    include 'moduls/quanlykho/chitietsp/chitietsp.php';
  }else {
        include 'moduls/tongquan.php';
    }
    ?>
</div>