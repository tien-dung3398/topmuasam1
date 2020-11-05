<?php
if (isset($_GET['quanly']) && $_GET['quanly'] == 'dangxuat') {
    unset($_SESSION['login']);
    setcookie('danhmuc', $_COOKIE['danhmuc'], time() - (60 * 30));
    setcookie('step3', $_COOKIE['step3'], time() - (60 * 30));
    setcookie('step4', $_COOKIE['step4'], time() - (60 * 30));
    header('location:index.php');
}
?>
<div class="header">
    <div class="menu">
        <img src="{{asset('fontend/img/logo2.png')}}" alt="">
        <ul>
            <li>
                <a href="index.php"><i class="fas fa-home"></i> Trang chủ</a>
            </li>
            <li>
                <a href=""> <i class="far fa-list-alt"></i> Danh mục</a>
            </li>
            <li class="r-chat">
                <?php
                if (isset($_SESSION['login'])) {
                    require_once('admin/moduls/function.php');
                    $demall = new ketnoi;
                    $demall->connect();
                    $tinnhan = "select id_taikhoan from taikhoan where usename = '$_SESSION[login]' ";
                    $demall->run($tinnhan);
                    $de =  $demall->dong();
                    $id = $de['id_taikhoan'];
                    $sql = "select pheduyet from chat where id_nguoinhan = '$id' and pheduyet='0'";
                    $demall->run($sql);
                    $row = $demall->row();
                    if ($row >= 1) { ?>
                        <a href="index.php?quanly=chat&ac=messenger"><i class="far fa-comments"></i> Chat</a>
                        <h3> <?= $row ?></h3>
                    <?php
                    } else { ?>
                        <a href="index.php?quanly=chat&ac=messenger"><i class="far fa-comments"></i> Chat</a>
                    <?php
                    }
                    ?>

                <?php
                } else {
                ?>
                    <a href=""><i class="far fa-comments"></i> Chat</a>
                <?php
                }
                ?>

            </li>
            <li class="report">
                <a href=""><i class="far fa-bell" ></i> Thông báo</a>
            </li>
            <li>
                <form action="" method="post" enctype="multipart/form-data">
                    <button type="submit" name="them"><i class="fas fa-ellipsis-h dot"></i> Thêm</button>
                </form>
                <?php
                if (isset($_POST['them'])) { ?>
                    <div class="them">
                        <form action="" method="post" enctype="multipart/form-data">
                            <button type="submit" name="out">X</button>
                        </form>
                        <ul>
                            <li class="row1">
                                <img src="img/logo2.png" alt="">
                                <div class="tt">
                                    <p>Hùng</p>
                                    <a href="">Xem trang cá nhân</a>
                                </div>
                            </li>
                            <li class="row2">
                                <p><span>685</span>Điểm tốt</p>
                            </li>
                            <li class="row3">
                                <ul>
                                    <a href="">
                                        <li><i class="fas fa-heart"></i>Tin bài đăng</li>
                                    </a>
                                    <a href="">
                                        <li><i class="far fa-list-alt"></i> Tìm kiếm đã lưu</li>
                                    </a>
                                    <a href="">
                                        <li><i class="fas fa-users"></i>Bạn bè</li>
                                    </a>
                                </ul>
                            </li>
                            <li class="row3">
                                <ul>
                                    <a href="">
                                        <li><i class="fas fa-info-circle"></i>Trợ giúp</li>
                                    </a>
                                    <a href="">
                                        <li><i class="fas fa-cogs"></i> Cài đặt thông tin</li>
                                    </a>
                                    <a href="index.php?quanly=dangxuat">
                                        <li><i class="fas fa-sign-out-alt"></i></i>Đăng xuất</li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php
                } elseif (isset($_POST['out'])) { ?>
                    <style>
                        .them {
                            display: none;
                        }
                    </style>
                <?php
                }
                ?>
            </li>
        </ul>
    </div>
    <div class="seach">
        <ul>
            <form action="">
                <li class="text" style="height: 33px"> <input type="text" placeholder="Tìm kiếm trên Topmuasam"></li>
                <li class="search">
                    <button type="submit" style="height: 33px"><i class="fas fa-search" ></i></button>
                </li>
            </form>
        </ul>
        <p class=" login">
            <?php
            if (isset($_SESSION['login'])) {
                $use = $_SESSION['login'];
                require_once('admin/moduls/function.php');
                $nickname = new ketnoi;
                $nickname->connect();
                $sql = "select lastname from taikhoan where usename ='$use' limit 1";
                $nickname->run($sql);
                $dong = $nickname->dong();
                $nickname->disconnect();
            ?>
                <a href="index.php?quanly=login"> <i class="far fa-user-circle"></i> <span><?= $dong['lastname'] ?></span>
                </a>
            <?php
            } else { ?>
                <a href="index.php?quanly=login"> <i class="fas fa-sign-in-alt" style="font-size: 17px"></i> <span>Đăng nhập</span>
                </a>
            <?php
            }
            ?>
        </p>
    </div>
</div>