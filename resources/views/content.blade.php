<div class="content">
    <?php
    if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    ?>
        <style>
            .content {
                background-color: #fff;
            }
        </style>
    <?php
    } else {
        $tam = '';
    }
    if ($tam == 'login') {
        include 'dangnhap.php';
    } elseif ($tam == 'dangky') {
        include 'dangky.php';
    } elseif ($tam == 'step1') {
        include 'moduls/dangtin/step1.php';
    } elseif ($tam == 'step2') {
        include 'moduls/dangtin/step2.php';
    }elseif ($tam == 'step3') {
        include 'moduls/dangtin/step3.php';
    }elseif ($tam == 'step4') {
        include 'moduls/dangtin/step4.php';
    }elseif ($tam == 'step5') {
        include 'moduls/dangtin/step5.php';
    }elseif ($tam == 'step6') {
        include 'moduls/dangtin/step6.php';
    }elseif ($tam == 'step7') {
        include 'moduls/dangtin/step7.php';
    }elseif ($tam == 'step8') {
        include 'moduls/dangtin/step8.php';
    } elseif ($tam == 'suathongtin') {
        include 'suathongtin.php';
    }elseif ($tam == 'post') {
        include 'moduls/posts/post.php';
    }elseif ($tam == 'post2') {
        include 'moduls/posts/post2.php';
    }elseif ($tam == 'post3') {
        include 'moduls/posts/post3.php';
    }elseif ($tam == 'post4') {
        include 'moduls/posts/post4.php';
    }elseif ($tam == 'chat') {
        include 'moduls/content/chat.php';
    } else {
        include 'moduls/content/khamphadanhmuc.php';
    }
    ?>
</div>