<?php
require_once('moduls/function.php');
$khachhang = new ketnoi;
$khachhang->connect();
$sql = "select * from taikhoan";
$khachhang->run($sql);
?>
<div class="khachhang">
    <div class="title">
        <p><i class="fas fa-users-cog"></i>Thông tin khách hàng</p>
        <div class="search">
            <form action="" method="post" enctype="multipart/form-data">
                <ul>
                    <?php
                    if (isset($_POST['search'])) {
                        $text = $_POST['searchtext'];
                    ?>
                        <li><input type="text" name="searchtext" placeholder="Tìm kiếm" value="<?= $_POST['searchtext'] ?>"></li>
                    <?php
                    } else {
                    ?>
                        <li><input type="text" name="searchtext" placeholder="Tìm kiếm"></li>
                    <?php
                    }
                    ?>
                    <li>
                        <button type="submit" name="search"><i class="fas fa-search"></i></button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <div class="content">
        <?php
        if (isset($_POST['search'])) {
            $text = $_POST['searchtext'];
            $sql = "select * from taikhoan where usename LIKE '%$text%' or firstname LIKE '%$text%' or lastname LIKE '%$text%' or id_taikhoan LIKE '%$text%'";
            $khachhang->run($sql);
            $row = $khachhang->row();
            if ($row > 0) {
        ?>
                <table cellpadding="0" cellspacing="0">
                    <tr class='row1'>
                        <td class="c1">ID</td>
                        <td class="c2">Họ và tên</td>
                        <td class="c3">Usename</td>
                        <td class="c4">Password</td>
                        <td class="c5" colspan="2">Quản lý</td>
                    </tr>
                    <?php
                    while ($dong = $khachhang->dong()) {
                    ?>
                        <form action="moduls/taikhoan/xuly.php?loai=<?= $_GET['loai'] ?>&id=<?= $dong['id_taikhoan'] ?>" method="post" enctype="multipart/form-data">

                            <tr class='row2'>
                                <td class="c1"><?= $dong['id_taikhoan'] ?></td>
                                <td class="c2"><?= $dong['firstname'] .' '. $dong['lastname'] ?></td>
                                <td class="c3"><?= $dong['usename'] ?></td>
                                <td class="c4"><?= $dong['password'] ?></td>
                                <td><button type="submit" name="xoataikkhoan"><i class="far fa-trash-alt"></i></button></td>
                                <td class="c7"><button type="submit" name="chitiet"><i class="far fa-address-card"></i></button></td>
                            </tr>
                        <?php
                    }
                        ?>
                        </form>
                </table>
            <?php
            } else { ?>
                <p>Không tìm thấy.</p>
            <?php } ?>
        <?php
        } else { ?>
            <table cellpadding="0" cellspacing="0">
                <tr class='row1'>
                    <td class="c1">ID</td>
                    <td class="c2">Họ và tên</td>
                    <td class="c3">Usename</td>
                    <td class="c4">Password</td>
                    <td class="c5" colspan="2">Quản lý</td>
                </tr>
                <?php
                while ($dong = $khachhang->dong()) {
                ?>
                    <form action="moduls/taikhoan/xuly.php?loai=<?= $_GET['loai'] ?>&id=<?= $dong['id_taikhoan'] ?>" method="post" enctype="multipart/form-data">
                        <tr class='row2'>
                            <td class="c1"><?= $dong['id_taikhoan'] ?></td>
                            <td class="c2"><?= $dong['firstname'] .' '. $dong['lastname'] ?></td>
                            <td class="c3"><?= $dong['usename'] ?></td>
                            <td class="c4"><?= $dong['password'] ?></td>
                            <td><button type="submit" name="xoataikkhoan"><i class="far fa-trash-alt"></i></button></td>
                            <td class="c7"><button type="submit" name="chitiet"><i class="far fa-address-card"></i></button></td>
                        </tr>
                    <?php
                }
                    ?>
                    </form>
            </table>
        <?php
        }
        ?>
    </div>
</div>
<?php
$khachhang->disconnect();
?>