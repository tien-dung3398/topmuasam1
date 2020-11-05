<?php
if(isset($_GET['quanly'])){
}else{
?>
<div class="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{asset('img/A1.png')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('img/A2.png')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('img/A3.png')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('img/A5.png')}}" alt=""></div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper JS -->
            <script src="../package/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper('.swiper-container', {
                    spaceBetween: 1,
                    centeredSlides: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            </script>
        </div>
            <?php } ?>