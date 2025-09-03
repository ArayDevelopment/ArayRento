<!doctype html>
<html lang="fa">
<?php
include "../ArayRentoController/ChekActiveCode.php"
?>
<head>
    <meta charset="utf-8">
    <title>فعال سازی حساب</title>
    <meta content="Morden Bootstrap HTML5 الگوی" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="assets/css/plugins/swiper-bundle.min.css" rel="stylesheet">
    <link href="../css2-2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap"
          rel="stylesheet">
    <link href="assets/css/vendor/bootstrap.min.rtl.css" rel="stylesheet">
    <link href="assets/css/plugins/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/plugins/glightbox.min.css" rel="stylesheet">
    <link href="assets/css/plugins/aos.css" rel="stylesheet">
    <link href="assets/css/style.rtl.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div id="preloader">
    <div class="loader--border"></div>
</div>
<main class="main__content_wrapper">
    <section class="breadcrumb__section section--padding">
        <div class="container">
            <div class="breadcrumb__content text-center"><h1 class="breadcrumb__title h2"><span> فعال سازی</span>اکانت
                </h1>
            </div>
        </div>
    </section>
    <section class="account__page--section section--padding">
        <div class="container">
            <div class="account__section--inner">
                <div class="account__form--wrapper">
                    <div class="account__header text-center mb-30"><h2 class="account__title">تایید کد</h2>
                        <p class="account__desc"> لطفا کد ارسال شده به ایمیل خود را وارد نمایید
                        </p></div>
                    <div class="account__form">
                        <form action="" method="post">
                            <div class="account__form--input mb-30"><label class="account__form--input__label mb-12"
                                                                           for="name">کد تایید</label> <input
                                        class="account__form--input__field" id="ativeAXmi"
                                        placeholder="12****"
                                        type="text" name="activeCode"></div>
                            <button class="account__form--btn solid__btn" name="btnSubAc">تایید</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include "include/layout/footer.php";
?>
<button id="scroll__top">
    <svg class="ionicon" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M112 244l144-144 144 144M256 120v292" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-width="48"></path>
    </svg>
</button>
<script defer="defer" src="assets/js/vendor/popper.js"></script>
<script defer="defer" src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/glightbox.min.js"></script>
<script src="assets/js/plugins/aos.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>