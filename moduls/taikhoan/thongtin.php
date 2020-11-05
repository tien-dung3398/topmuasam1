<?php
$id = $_GET['khachhang'];
require_once('moduls/function.php');
$ttkh = new ketnoi;
$ttkh->connect();
$sql = "select * from taikhoan where id_taikhoan='$id' limit 1";
$ttkh->run($sql);
$dong = $ttkh->dong();
$hinhanh = $dong['hinhanh'];
$ttkh->disconnect();
?>
<div class="thongtinkh">
    <p><i class="fas fa-users-cog"></i>Thông tin khách hàng</p>
    <div class="ttkh">
        <ul>
            <?php
            if (empty($hinhanh)) { ?>
                <li class="img"> <img src="../img/logo2.png" alt=""></li>
            <?php
            } else { ?>
                <li class="img"> <img src="<?= $hinhanh ?>" alt=""></li>
            <?php
            }
            ?>

            <li class="hoso">
                <ul>

                    <form action="">
                        <li>
                            <P>Họ và tên</P>
                            <div class="tex">
                                <input type="text" value="<?= $dong['firstname'] . ' ' . $dong['lastname'] ?>" placeholder="Chưa có thông tin">
                                <button><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </li>
                        <li>
                            <P>Facebook</P>
                            <div class="tex">
                                <input type="text" value="<?= $dong['facebook'] ?>" placeholder="Chưa có thông tin">
                                <button><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </li>
                        <li>
                            <P>Số điện thoại</P>
                            <div class="tex">
                                <input type="text" value="<?= $dong['sdt'] ?>" placeholder="Chưa có thông tin">
                                <button><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </li>
                        <li>
                            <P>Email</P>
                            <div class="tex">
                                <input type="text" value="<?= $dong['usename'] ?>" placeholder="Chưa có thông tin">
                                <button><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </li>
                        <li>
                            <P>Địa chỉ</P>
                            <div class="tex">
                                <input type="text" value="<?= $dong['diachi'] ?>" placeholder="Chưa có thông tin">
                                <button><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </li>
                        <li>
                            <P> Giới tính</P>
                            <div class="tex">
                                <input type="text" value="<?= $dong['gioitinh'] ?>" placeholder="Chưa có thông tin">
                                <button><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </li>
                        <li>
                            <P>Ngày sinh</P>
                            <div class="tex">
                                <input type="text" value="<?= $dong['ngaysinh'] ?>" placeholder="Chưa có thông tin">
                                <button><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </li>
                        <li>
                            <P>Mật khẩu</P>
                            <div class="tex">
                                <input type="text" value="<?= $dong['password'] ?>" placeholder="Chưa có thông tin">
                                <button><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </li>
                        <li class="quaylai">
                            <a href="index.php?loai=<?= $_GET['loai'] ?>&ac=khachhang">Quay lại >></a>
                        </li>
                    </form>
                </ul>
            </li>
        </ul>f
        </li>
        </ul>
    </div>
</div>