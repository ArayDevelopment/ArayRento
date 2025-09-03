<a href="blockripper.php" style="display: none;">Its Just A Simple Button</a>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>ورود</title>
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    include "../ArayRentoController/LoginUser.php"
    ?>
</head>
<main class="main__content_wrapper">
    <section class="breadcrumb__section section--padding">
        <div class="container">
            <div class="breadcrumb__content text-center"><h1 class="breadcrumb__title h2"><span>وارد شوید</span>
                </h1>
                <ul class="breadcrumb__menu d-flex justify-content-center">
                    <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="../index.php">خانه</a>
                    </li>
                    <li><span><svg fill="none" height="10" viewbox="0 0 6 10" width="6"
                                   xmlns="http://www.w3.org/2000/svg"><path
                                        d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z"
                                        fill="#706C6C"></path></svg></span></li>
                    <li><span class="breadcrumb__menu--text">صفحه ورود</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account__page--section section--padding">
        <div class="container">
            <div class="account__section--inner">
                <div class="account__tab--btn">
                    <ul class="account__tab--btn__wrapper d-flex justify-content-center">
                        <li class="account__tab--btn__items"><a class="account__tab--btn__field" href="sign-up.php">ثبت
                                نام کنید</a></li>
                        <li class="account__tab--btn__items"><span class="account__tab--btn__field active">ورود</span>
                        </li>
                    </ul>
                </div>
                <div class="account__form--wrapper">
                    <div class="account__header text-center mb-30"><h2 class="account__title">امروز اینجا وارد
                            شوید!</h2>
                        <p class="account__desc">سلام! مشخصات خود را وارد کنید تا حساب کاربری ایجاد کنید و شریک ما
                            شوید</p></div>
                    <div class="account__form">
                        <form action="" method="post">
                            <div class="account__form--input mb-30"><label class="account__form--input__label mb-12"
                                                                           for="email">آدرس ایمیل</label> <input
                                        class="account__form--input__field" id="email" placeholder="آدرس ایمیل را وارد کنید"
                                        type="email" name="lEmail"></div>
                            <div class="account__form--input mb-30">
                                <input class="account__form--input__field" placeholder="رمز عبور ایجاد کنید"
                                       type="password" name="lPassword"></div>
                            <button class="account__form--btn solid__btn" name="lBtnSub">اینجا وارد شوید</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
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