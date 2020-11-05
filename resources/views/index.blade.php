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
        <link rel="stylesheet" href="{{asset('fontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/slide.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/icon/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/icon/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/content.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/post.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/chat.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/dangnhap.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/suathongtin.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/dangky.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/step1.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/step2.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/step4.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/step5.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/step6.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/step7.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/step8.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/css/reponsiver.css')}}">
        <script src="{{asset('fontend/js/swiper.min.js')}}"></script>
        <script src="{{asset('fontend/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('fontend/js/ajax.js')}}" type="text/javascript"></script>
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