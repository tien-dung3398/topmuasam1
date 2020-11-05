<?php
ob_start();
session_start();
//session_destroy();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logo2.png">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/slide.css')}}">
        <link rel="stylesheet" href="{{asset('icon/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('icon/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/content.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/post.css')}}">
        <link rel="stylesheet" href="{{asset('css/chat.css')}}">
        <link rel="stylesheet" href="{{asset('css/dangnhap.css')}}">
        <link rel="stylesheet" href="{{asset('css/suathongtin.css')}}">
        <link rel="stylesheet" href="{{asset('css/dangky.css')}}">
        <link rel="stylesheet" href="{{asset('css/step1.css')}}">
        <link rel="stylesheet" href="{{asset('css/step2.css')}}">
        <link rel="stylesheet" href="{{asset('css/step4.css')}}">
        <link rel="stylesheet" href="{{asset('css/step5.css')}}">
        <link rel="stylesheet" href="{{asset('css/step6.css')}}">
        <link rel="stylesheet" href="{{asset('css/step7.css')}}">
        <link rel="stylesheet" href="{{asset('css/step8.css')}}">
        <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/reponsiver.css')}}">
        <script src="{{asset('js/swiper.min.js')}}"></script>
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/ajax.js')}}" type="text/javascript"></script>
        <title>Chợ Tốt</title>
    </head>
    <body>
        <div class="container">
        @include('header')
        @include('banner')
        @include('khamphadanhmuc')
        @include('footer')
        </div>
    </body>

    </html>