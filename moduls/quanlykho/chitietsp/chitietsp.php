<?php
if (isset($_GET['dt']) && ($_GET['dt'] == 'thatbai')) {
    echo '<script> alert (" Bạn chưa chọn loại sản phẩm.")</script>';
}
require_once('moduls/function.php');
$lietke = new ketnoi;
$lietke->connect();
?>
<div class="danhmucsp">
    <div class="title">
        <p> <i class="fas fa-list"></i> Chi tiết sản phẩm</p>
        <div class="search">
            <form action="" method="post" enctype="multipart/form-data">
                <ul>
                    <li><input type="text" name="searchtext" placeholder="Tìm kiếm"></li>
                    <li>
                        <button type="submit" name="search"><i class="fas fa-search"></i></button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <div class="content">
        <?php
        if (isset($_GET['quanly']) && ($_GET['quanly'] == 'sua')) {
            $sqlr = "select * from chitietsp where id_sp='$_GET[id]' limit 1 ";
            $lietke->run($sqlr);
            $sua = $lietke->dong();
        ?>
            <div class="left">
                <form action="moduls/quanlykho/chitietsp/xuly.php?loai=<?= $_GET['loai'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <p>Chi tiết sản phẩm</p>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Chi tiết sản phẩm" name="tensp" value="<?= $sua['tensp'] ?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Mã code" name="macodesp" value="<?= $sua['macodesp'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Thứ tự" name="thutusp" value="<?= $sua['thutusp'] ?>">
                            </td>
                        </tr>
                        <td>
                            <select name="loaisp">
                                <option value=""> Loại sản phẩm</option>
                                <?php
                                $loais_p = "select * from danhmucluachon ";
                                $lietke->run($loais_p);
                                while ($dongl_s = $lietke->dong()) {
                                    if ($dongl_s['id_danhmucluachon'] == $sua['loaisp']) {
                                ?>
                                        <option value="<?= $sua['laoisp'] ?>" selected="selected"> <?= $dongl_s['tendanhmuc'] ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?= $dongl_s['id_danhmucluachon'] ?>"> <?= $dongl_s['tendanhmuc'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                        <tr>
                            <td>
                                <button type="submit" name="sua">Sửa</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        <?php
        } else {
        ?>
            <div class="left">
                <form action="moduls/quanlykho/chitietsp/xuly.php?loai=<?= $_GET['loai'] ?>" method="post" enctype="multipart/form-data">
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <p>Chi tiết sản phẩm</p>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Chi tiết sản phẩm" name="tensp"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Mã code" name="macodesp">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Thứ tự" name="thutusp">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="loaisp" id="loaisp">
                                    <option value=""> Loại sản phẩm</option>
                                    <?php
                                    $loaisp = "select * from danhmucluachon ";
                                    $lietke->run($loaisp);
                                    while ($dongls = $lietke->dong()) {
                                    ?>
                                        <option value="<?= $dongls['id_danhmucluachon'] ?>"> <?= $dongls['tendanhmuc'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="them">Thêm</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        <?php
        }
        ?>
        <div class="right">
            <?php
            if (isset($_POST['search'])) {
                $text = $_POST['searchtext'];
                $search = "select * from chitietsp where thutusp LIKE '%$text%' or tensp  LIKE '%$text%' or macodesp  LIKE '%$text%' order by id_sp desc ";
                $lietke->run($search);
            ?>
                <table cellspacing="0" cellpadding="0">
                    <tr class="row">
                        <td class="row1 r1">Sản phẩm</td>
                        <td class="row1 r2">Mã code</td>
                        <td class="row1 r3">Thứ tư</td>
                        <td class="row1 r2">Loại SP</td>
                        <td class="row1 r4" colspan="2">Quản lý</td>
                    </tr>
                    <?php
                    while ($ketqua = $lietke->dong()) {
                    ?>
                        <tr>
                            <td class=" r1"><?= $ketqua['tensp'] ?></td>
                            <td class=" r2"><?= $ketqua['macodesp'] ?></td>
                            <td class=" r3"><?= $ketqua['thutusp'] ?></td>
                            <td class="row1 r2"><?= $ketqua['loaisp'] ?></td>
                            <td class=" r5"><a href="index.php?loai=<?= $_GET['loai'] ?>&ac=chitietspp&id=<?= $ketqua['id_sp'] ?>&quanly=sua"><i class="fas fa-tools"></i></a></td>
                            <td class=" r6"><a href="moduls/quanlykho/chitietsp/xuly.php?loai=<?= $_GET['loai'] ?>&id=<?= $ketqua['id_sp'] ?>&quanly=xoa"><i class="far fa-trash-alt"></a></i></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            } else {
            ?>
                <table cellspacing="0" cellpadding="0">
                    <tr class="row">
                        <td class="row1 r1">Sản phẩm</td>
                        <td class="row1 r2">Mã code</td>
                        <td class="row1 r3">Thứ tư</td>
                        <td class="row1 r2">Loại SP</td>
                        <td class="row1 r4" colspan="2">Quản lý</td>
                    </tr>
                    <?php
                    $sql = "select * from chitietsp,danhmucluachon where  chitietsp.loaisp = danhmucluachon.id_danhmucluachon order by id_sp desc ";
                    $lietke->run($sql);
                    while ($dong = $lietke->dong()) {
                    ?>
                        <tr>
                            <td class=" r1"><?= $dong['tensp'] ?></td>
                            <td class=" r2"><?= $dong['macodesp'] ?></td>
                            <td class=" r3"><?= $dong['thutusp'] ?></td>
                            <td class="row1 r2"><?= $dong['loaisp'] ?></td>
                            <td class=" r5"><a href="index.php?loai=<?= $_GET['loai'] ?>&ac=chitietsp&id=<?= $dong['id_sp'] ?>&quanly=sua"><i class="fas fa-tools"></i></a></td>
                            <td class=" r6"><a href="moduls/quanlykho/chitietsp/xuly.php?loai=<?= $_GET['loai'] ?>&ac=chitietsp&id=<?= $dong['id_sp'] ?>&quanly=xoa"><i class="far fa-trash-alt"></a></i></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            } ?>
        </div>
    </div>
</div>
<?php
$lietke->disconnect();
?>
<div class="clear"></div>
</div>