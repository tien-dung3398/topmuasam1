<?php
require_once('moduls/function.php');
$qltk = new ketnoi();
$qltk->connect();
?>
<div class="quantrivien">
    <div class="title">
        <p><i class="fas fa-user-lock"></i> Tài khoản bị khóa</p>
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
        <table cellpadding="0" cellspacing="0">
            <?php
            if (isset($_POST['search'])) {
                $text = $_POST['searchtext'];
                $sql = "select * from admin where usename LIKE '%$text%' or fistname LIKE '%$text%'";
                $qltk->run($sql);
                $row = $qltk->row();
                if ($row > 0) { ?>
                    <tr class="span1">
                        <td>Tên tài khoản</td>
                        <td>Last Name</td>
                        <td> Mật khẩu</td>
                        <td colspan="2" class="row4 ">Quản lý</td>
                </tr>
                    <?php
                    while ($dong = $qltk->dong()) {
                    ?>
                        <tr>
                            <td><input type="text" value="<?= $dong['usename'] ?>"></td>
                            <td><input type="text" value="<?= $dong['fistname'] ?>"></td>
                            <td><input type="text" value="<?= $dong['password'] ?>"></td>
                            <td class="r4"><button type="submit" name="sua"><i class="fas fa-unlock"></i></button></td>
                            <td class="row4 r4"><button type="submit" name="xoa"><i class="far fa-trash-alt"></i></button></td>
                        </tr>
                    <?php
                    }
                    ?>

                <?php
                } else {
                    echo '<tr>
                    <td class ="bnttxt" >
                    Tài khoản không tồn tại 
                    </td></tr>';
                }
            } else {
                $sql = "select * from admin order by id_admin  desc";
                $qltk->run($sql); ?>
                <tr class="span1">
                    <td>Tên tài khoản</td>
                    <td>Last Name</td>
                    <td> Mật khẩu</td>
                    <td colspan="2" class="row4 ">Quản lý</td>
                </tr>
                <?php
                while ($dong = $qltk->dong()) {
                ?>
                    <form action="moduls/taikhoan/xuly.php?id=<?= $dong['id_admin']?>" method="post" enctype="multipart/form-data">
                        <tr>
                            <td><input type="text" name = "use" value="<?= $dong['usename'] ?>"></td>
                            <td><input type="text"  name = "fist" value="<?= $dong['fistname'] ?>"></td>
                            <td><input type="text" name = "pass" value="<?= $dong['password'] ?>"></td>
                            <td class="r4"><button type="submit" name="sua"><i class="fas fa-unlock"></i></button></td>
                            <td class="row4 r4"><button type="submit" name="xoa"><i class="far fa-trash-alt"></i></button></td>
                        </tr>
                    </form>
            <?php
                }
            }
            ?>


        </table>
    </div>
    <?php
    $qltk->disconnect();
    ?>
</div>