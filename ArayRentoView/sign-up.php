<!doctype html>
<html lang="fa">
<?php
include "../ArayRentoController/InsertUser.php"
?>
<head>
    <meta charset="utf-8">
    <title>ثبت نام</title>
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
            <div class="breadcrumb__content text-center"><h1 class="breadcrumb__title h2"><span>ثبت نام کنید</span>
                </h1>
                <ul class="breadcrumb__menu d-flex justify-content-center">
                    <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="../index.php">خانه</a>
                    </li>
                    <li><span><svg fill="none" height="10" viewbox="0 0 6 10" width="6"
                                   xmlns="http://www.w3.org/2000/svg"><path
                                        d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z"
                                        fill="#706C6C"></path></svg></span></li>
                    <li><span class="breadcrumb__menu--text">ثبت نام کنید</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account__page--section section--padding">
        <div class="container">
            <div class="account__section--inner">
                <div class="account__tab--btn">
                    <ul class="account__tab--btn__wrapper d-flex justify-content-center">
                        <li class="account__tab--btn__items"><span
                                    class="account__tab--btn__field active">ثبت نام کنید</span></li>
                        <li class="account__tab--btn__items"><a class="account__tab--btn__field"
                                                                href="login.php">ورود</a></li>
                    </ul>
                </div>
                <div class="account__form--wrapper">
                    <div class="account__header text-center mb-30"><h2 class="account__title">امروز ثبت نام کنید</h2>
                        <p class="account__desc">سلام! مشخصات خود را وارد کنید تا حساب کاربری ایجاد کنید و شریک ما
                            شوید</p></div>
                    <div class="account__form">
                        <form action="" method="post">
                            <div class="account__form--input mb-30"><label class="account__form--input__label mb-12"
                                                                           for="name">نام</label> <input
                                        class="account__form--input__field" id="firstName"
                                        placeholder="نام خود را وارد کنید*"
                                        type="text" name="firstName"></div>
                            <div class="account__form--input mb-30"><label class="account__form--input__label mb-12"
                                                                           for="name">نام خانوادگی</label> <input
                                        class="account__form--input__field" id="lastName"
                                        placeholder="نام خانوادگی خود را وارد کنید*"
                                        type="text" name="lastName"></div>
                            <div class="account__form--input mb-30"><label class="account__form--input__label mb-12"
                                                                           for="name">شماره مویایل</label> <input
                                        class="account__form--input__field" id="phoneNumber"
                                        placeholder="090********"
                                        type="text" name="phoneNumber"></div>
                            <div class="account__form--input mb-30"><label class="account__form--input__label mb-12"
                                                                           for="email">آدرس ایمیل</label> <input
                                        class="account__form--input__field" id="email"
                                        placeholder="آدرس ایمیل را وارد کنید"
                                        type="email" name="email"></div>
                            <div class="account__form--input mb-30"><label class="account__form--input__label mb-12"
                                                                           for="password"> رمز عبور</label>
                                <div class="account__form--create__password position-relative"><input
                                            class="account__form--input__field" id="rpassword"
                                            placeholder="حداقل ۸ کاراکتر و شامل حروف بزرگ،کوچک و عدد باشد."
                                            type="password" name="password">
                                    <button class="account__form--password__show--icon">
                                        <svg fill="none" height="10" viewbox="0 0 16 10" width="16"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 10C2.76587 10 0.170875 5.437 0.063 5.24288C-0.021 5.09175 -0.021 4.90812 0.063 4.757C0.170875 4.563 2.76587 0 8 0C13.2341 0 15.8291 4.563 15.937 4.75712C16.021 4.90825 16.021 5.09188 15.937 5.243C15.8291 5.437 13.2341 10 8 10ZM1.08837 4.99925C1.68313 5.90062 4.01825 9 8 9C11.9944 9 14.3191 5.90312 14.9116 5.00075C14.3169 4.09937 11.9818 1 8 1C4.00562 1 1.68087 4.09688 1.08837 4.99925ZM8 8C6.34575 8 5 6.65425 5 5C5 3.34575 6.34575 2 8 2C9.65425 2 11 3.34575 11 5C11 6.65425 9.65425 8 8 8ZM8 3C6.89725 3 6 3.89725 6 5C6 6.10275 6.89725 7 8 7C9.10275 7 10 6.10275 10 5C10 3.89725 9.10275 3 8 3Z"
                                                  fill="#817F7E"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="account__form--input mb-30"><label class="account__form--input__label mb-12"
                                                                           for="password">تکرار رمز عبور</label>
                                <div class="account__form--create__password position-relative"><input
                                            class="account__form--input__field" id="rePassword"
                                            placeholder="تکرار رمز عبور" type="password" name="rePassword">
                                    <button class="account__form--password__show--icon">
                                        <svg fill="none" height="10" viewbox="0 0 16 10" width="16"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 10C2.76587 10 0.170875 5.437 0.063 5.24288C-0.021 5.09175 -0.021 4.90812 0.063 4.757C0.170875 4.563 2.76587 0 8 0C13.2341 0 15.8291 4.563 15.937 4.75712C16.021 4.90825 16.021 5.09188 15.937 5.243C15.8291 5.437 13.2341 10 8 10ZM1.08837 4.99925C1.68313 5.90062 4.01825 9 8 9C11.9944 9 14.3191 5.90312 14.9116 5.00075C14.3169 4.09937 11.9818 1 8 1C4.00562 1 1.68087 4.09688 1.08837 4.99925ZM8 8C6.34575 8 5 6.65425 5 5C5 3.34575 6.34575 2 8 2C9.65425 2 11 3.34575 11 5C11 6.65425 9.65425 8 8 8ZM8 3C6.89725 3 6 3.89725 6 5C6 6.10275 6.89725 7 8 7C9.10275 7 10 6.10275 10 5C10 3.89725 9.10275 3 8 3Z"
                                                  fill="#817F7E"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <button class="account__form--btn solid__btn" name="btnSub">ایجاد یک حساب کاربری</button>
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
<footer>
    <?php
    include "include/layout/footer.php"
    ?>
</footer>
<script defer="defer" src="assets/js/vendor/popper.js"></script>
<script defer="defer" src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/glightbox.min.js"></script>
<script src="assets/js/plugins/aos.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>