<?php
if (isset($_GET['quanly']) && $_GET['quanly'] == 'dangxuat') {
    if( isset($_COOKIE['use']) && isset($_COOKIE['pass'])){
        setcookie('use', $use, time() - (86400 * 30));
        setcookie('pass',$pass,time()- (86400 * 30));
        unset($_SESSION['login-admin']);
        header('location:dangnhap.php');
    }else{
    unset($_SESSION['login-admin']);
    header('location:dangnhap.php');
    }
}
?>
<div class="header">
    <a href="index.php?loai=<?= $_GET['loai'] ?>">Admin Chợ Tốt <i class="fas fa-bars"></i></a>
    <div class="nickname">
        <?php
        if (isset($_SESSION['login-admin'])) {
            echo '<p>Helo: ' . $_SESSION['login-admin'] . '</p>';
        } else {
            ' <p>Helo: nick name</p>';
        }
        ?>
        <i class="fas fa-user-alt">
            <div class="icon">
                <ul>
                    <li><a href="index.php?quanly=dangxuat">Đăng xuất</a></li>
                    <?php
                    if (isset($_GET['loai']) && $_GET['loai'] == 1) {
                        echo ' <li><a href="index.php?loai=1&ac=dangky">Đăng kí</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </i>
    </div>
</div>