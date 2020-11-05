<?php
ob_start();
session_start();
?>
<?php
if (isset($_COOKIE['use']) && isset($_COOKIE['pass'])) {
   $use=$_COOKIE['use'];
   $pass=$_COOKIE['pass'];
   include 'moduls/function.php';
   $login = new ketnoi;
   $login->connect();
   $sql = "select * from admin where usename='$use' and password ='$pass' limit 1";
   $login->run($sql);
   $dong = $login->dong();
   $row = $login->row();
   if($row>=1){
    $_SESSION['login-admin'] = $use;
    header("location:index.php?loai=$dong[loai]");
   }

} elseif (isset($_POST['login-admin'])) {
    $use = $_POST['use'];
    $pass = $_POST['pass'];
    include 'moduls/function.php';
    $login = new ketnoi;
    $login->connect();
    $sql = "select * from admin where usename='$use' limit 1";
    $login->run($sql);
    $row = $login->row();
    $dong = $login->dong();
    if ($row >= 1) {
        $sqlps = "select * from admin where password='$pass' limit 1";
        $login->run($sqlps);
        $rowps = $login->row();
        if ($rowps >= 1) {
            if (isset($_POST['boxad'])) {
                setcookie('use', $use, time() + (86400 * 30));
                setcookie('pass', $pass, time() + (86400 * 30));
                $_SESSION['login-admin'] = $use;
                header("location:index.php?loai=$dong[loai]");
            } else {
                $_SESSION['login-admin'] = $use;
                header("location:index.php?loai=$dong[loai]");
            }
        } else {
            echo '<script> alert("Sai mật khẩu") </script>';
        }
    } else {
        echo '<script> alert("Tài khoản không tồn tại") </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dangnhap.css">
    <link rel="stylesheet" href="../icon/css/all.min.css">
    <link rel="stylesheet" href="../icon/css/fontawesome.min.css">
    <link rel=" shortcut icon" href="../img/logo2.png">
    <title>Đăng nhập</title>
</head>

<body>
    <div class="dangnhap">
        <img src="../img/login.jpg" alt="đăng nhập">
        <div class="login">
            <div class="content">
                <div class="bg"></div>
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>ĐĂNG NHẬP</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-users"></i> <input type="text" placeholder="Usename" name="use"> </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-lock pass"></i> <input type="password" placeholder=" Password" name="pass"></td>
                        </tr>
                        <tr>
                            <td class="box-forget">
                                <div class="box">
                                    <input type="checkbox" name="boxad"> Remember Me
                                </div>
                                <a href="">Forget Password?</a>
                            </td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="login-admin"> Login</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>