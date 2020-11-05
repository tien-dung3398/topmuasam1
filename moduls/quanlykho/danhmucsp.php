<?php
require_once('moduls/function.php');
$lietke = new ketnoi;
$lietke->connect();

?>
<div class="danhmucsp">
    <div class="title">
        <p> <i class="fas fa-list"></i> Danh mục sản phẩm</p>
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
            $sqlr = "select * from danhmucluachon where id_danhmucluachon='$_GET[id]' limit 1 ";
            $lietke->run($sqlr);
            $sua = $lietke->dong();
        ?>
            <div class="left">
                <form action="moduls/quanlykho/xuly.php?loai=<?= $_GET['loai'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <p>Danh mục sản phẩm</p>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Danh mục sản phẩm" name="tendanhmuc" value="<?= $sua['tendanhmuc'] ?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Mã code" name="macode" value="<?= $sua['macode'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Thứ tự" name="thutu" value="<?= $sua['thutu'] ?>">
                            </td>
                        </tr>
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
                <form action="moduls/quanlykho/xuly.php?loai=<?= $_GET['loai'] ?>" method="post" enctype="multipart/form-data">
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <p>Danh mục sản phẩm</p>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Danh mục sản phẩm" name="tendanhmuc"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Mã code" name="macode">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Thứ tự" name="thutu">
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
        if(isset($_POST['search'])){
            $text =$_POST['searchtext'];
            $search = "select * from danhmucluachon where thutu LIKE '%$text%' or tendanhmuc  LIKE '%$text%' or macode  LIKE '%$text%' order by id_danhmucluachon desc ";
            $lietke->run($search);
           ?>
            <table cellspacing="0" cellpadding="0">
                <tr class="row">
                    <td class="row1 r1">Tên Danh Mục</td>
                    <td class="row1 r2">Mã code</td>
                    <td class="row1 r3">Thứ tư</td>
                    <td class="row1 r4" colspan="2">Quản lý</td>
                </tr>
                <?php
                while ( $ketqua = $lietke->dong()) {
                ?>
                    <tr>
                        <td class=" r1"><?= $ketqua['tendanhmuc'] ?></td>
                        <td class=" r2"><?= $ketqua['macode'] ?></td>
                        <td class=" r3"><?= $ketqua['thutu'] ?></td>
                        <td class=" r5"><a href="index.php?loai=<?= $_GET['loai'] ?>&ac=danhmucsp&id=<?= $ketqua['id_danhmucluachon'] ?>&quanly=sua"><i class="fas fa-tools"></i></a></td>
                        <td class=" r6"><a href="moduls/quanlykho/xuly.php?loai=<?= $_GET['loai'] ?>&id=<?= $ketqua['id_danhmucluachon'] ?>&quanly=xoa"><i class="far fa-trash-alt"></a></i></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        <?php
        }else{
        ?>
            <table cellspacing="0" cellpadding="0">
                <tr class="row">
                    <td class="row1 r1">Tên Danh Mục</td>
                    <td class="row1 r2">Mã code</td>
                    <td class="row1 r3">Thứ tư</td>
                    <td class="row1 r4" colspan="2">Quản lý</td>
                </tr>
                <?php
                $sql = "select * from danhmucluachon order by id_danhmucluachon desc ";
                $lietke->run($sql);
                while ($dong = $lietke->dong()) {
                ?>
                    <tr>
                        <td class=" r1"><?= $dong['tendanhmuc'] ?></td>
                        <td class=" r2"><?= $dong['macode'] ?></td>
                        <td class=" r3"><?= $dong['thutu'] ?></td>
                        <td class=" r5"><a href="index.php?loai=<?= $_GET['loai'] ?>&ac=danhmucsp&id=<?= $dong['id_danhmucluachon'] ?>&quanly=sua"><i class="fas fa-tools"></i></a></td>
                        <td class=" r6"><a href="moduls/quanlykho/xuly.php?loai=<?= $_GET['loai'] ?>&id=<?= $dong['id_danhmucluachon'] ?>&quanly=xoa"><i class="far fa-trash-alt"></a></i></td>
                    </tr>
                <?php
                }
                ?>
            </table>
<?php
        }?>
        </div>
    </div>
    </div>
    <?php
    $lietke->disconnect();
    ?>
    <div class="clear"></div>
</div>