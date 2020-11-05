<?php
require_once('moduls/function.php');
$dangky =new ketnoi;
$dangky->connect();
if (isset($_POST['dangky'])){
    if ($_POST['pass'] == $_POST['pass2']){
        $pass = md5($_POST['pass']);
        $loai = 2;
        $lastname = $_POST['last'];
        $fistname = $_POST['fist'];
        $kt="select usename from admin where usename='$lastname' ";
        $dangky->run($kt);
        $row=$dangky->row();
        if($row>=1){
            echo "<script>alert('Tài khoản đã tồn tại.') </script>";
        }else{
            $sql = "insert into admin (usename,password,loai,fistname) values ('$lastname','$pass','$loai','$fistname')";
            $dangky->run($sql);
            echo "<script>alert('Thêm tài khoản thành công.') </script>";
        }
    }else{
        echo "<script>alert('Mật khẩu không đồng bộ.') </script>";
    }
}
$dangky->disconnect();
?>
<div class="dangky">
    <p>Thêm tài khoản thành viên</p>
<form action="" method="post" enctype="multipart/form-data">
<table cellpadding="0"  cellspacing="0">
<tr >
<td> <input type="text" placeholder="First Name" name="fist"></td>
<td><input type="text" placeholder="Last Name" name="last"></td>
</tr>
<tr >
<td colspan="2"><input type="password" placeholder="Password" name="pass"></td>
</tr>
<tr >
<td colspan="2"><input type="password" placeholder="Enter the password" name="pass2"></td>
</tr>
<tr>
    <td colspan="2"><button type="submit" name="dangky">Create account</button></td>
</tr>
</table>
</form>
</div>