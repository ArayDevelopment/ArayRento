<!doctype html>
<html lang="fa">
<?php
session_start();
include '../../ArayRentoController/admin/AdminRegistration.php';
?>
<head>
    <meta charset="utf-8">
    <title>ثبت نام ادمین</title>
    <meta content="Morden Bootstrap HTML5 الگوی" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="assets/css/plugins/swiper-bundle.min.css" rel="stylesheet">
    <link href="../../css2-2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap"
          rel="stylesheet">
    <link href="assets/css/vendor/bootstrap.min.rtl.css" rel="stylesheet">
    <link href="assets/css/plugins/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/plugins/glightbox.min.css" rel="stylesheet">
    <link href="assets/css/style.rtl.css" rel="stylesheet">
    <link href="assets/css/dashboard.rtl.css" rel="stylesheet">
    <link href="assets/css/creat-listing.css" rel="stylesheet">
    <link href="assets/css/dark.rtl.css" rel="stylesheet">
    <script>"dark" !== localStorage.getItem("theme-color") && ("theme-color" in localStorage || !window.matchMedia("(prefers-color-scheme: dark)").matches) || document.documentElement.classList.add("dark"), "light" === localStorage.getItem("theme-color") && document.documentElement.classList.remove("dark")</script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        input[type="file"]::file-selector-button {
            display: none;
    </style>
</head>
<body>
<div id="preloader">
    <div class="loader--border"></div>
</div>
<div class="dashboard__page--wrapper">
    <div class="predictive__search--box">
        <div class="predictive__search--box__inner"><h2 class="predictive__search--title">محصولات جستجو کنید</h2>
            <form action="create-listing.php#" class="predictive__search--form"><label><input
                        class="predictive__search--input" placeholder="اینجا جستجو کنید" type="text"></label>
                <button aria-label="search button" class="predictive__search--button">
                    <svg class="product__items--action__btn--svg" height="25.443" viewbox="0 0 512 512" width="30.51"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                              stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                        <path d="M338.29 338.29L448 448" fill="none" stroke="currentColor" stroke-linecap="round"
                              stroke-miterlimit="10" stroke-width="32"></path>
                    </svg>
                </button>
            </form>
        </div>
        <button aria-label="search close" class="predictive__search--close__btn" data-offcanvas="">
            <svg class="predictive__search--close__icon" height="30.443" viewbox="0 0 512 512" width="40.51"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M368 368L144 144M368 144L144 368" fill="currentColor" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path>
            </svg>
        </button>
    </div>
    <div class="dashboard__sidebar">
        <div class="main__logo logo-desktop-none"><h1 class="main__logo--title"><a class="main__logo--link"
                                                                                   href="dashboard.php"><img
                        alt="logo-img" class="main__logo--img desktop light__logo" src="assets/img/logo/nav-log.png"> <img
                        alt="logo-img" class="main__logo--img desktop dark__logo" src="assets/img/logo/nav-log.png"> <img
                        alt="logo-img" class="main__logo--img mobile" src="assets/img/logo/logo-mobile.png"></a></h1></div>
        <?php
        include "include/layout/menu.php";
        ?>
    </div>
    <div class="page__body--wrapper" id="dashbody__page--body__wrapper">
        <?php
        include "include/layout/header.php"
        ?>
        <main class="main__content_wrapper">
            <div class="dashboard__container add__property--container">
                <div class="add__property--heading mb-30"><h2 class="add__property--heading__title">ثبت نام ادمین</h2></div>
                <div class="add__property__inner d-flex">
                    <div class="add__property--step left">
                        <div class="add__property--step__inner">
                            <div class="add__property--box mb-30"><h3 class="add__property--box__title mb-20">ایجاد
                                    فهرست</h3>
                                <form action="" method="post" class="add__property--form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="adminFirstName">نام</label>
                                                <input class="add__listing--input__field" id="adminFirstName" name="adminFirstName"
                                                       placeholder="نام خود را وارد کنید" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="add__listing--textarea__box mb-15">
                                                <label class="add__listing--input__label" for="adminLastName">نام خانوادگی</label>
                                                <input class="add__listing--input__field" id="adminLastName" name="adminLastName"
                                                          placeholder="نام خانوادگی خود را وارد کنید*">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="adminPhoneNumber">شماره تلفن</label>
                                                <input class="add__listing--input__field" id="adminPhoneNumber" name="adminPhoneNumber"
                                                       placeholder="09*********" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="adminEmail">ایمیل</label>
                                                <input class="add__listing--input__field" id="adminEmail" name="adminEmail"
                                                       placeholder="آدرس ایمیل را وارد کنید" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="adminPassword">رمز عبور</label>
                                                <input class="add__listing--input__field" id="adminPassword" name="adminPassword"
                                                       placeholder="حداقل ۸ کاراکتر و شامل حروف بزرگ،کوچک و عدد باشد." type="password">
                                            </div>
                                        </div>

                                    </div>
                                    <button class="solid__btn add__property--btn" type="submit" name="btnSubmit">ذخیره کنید</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include "include/layout/footer.php";
                ?>
        </main>
    </div>
</div>
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
<script src="assets/js/script.js"></script>
<script>"dark" !== localStorage.getItem("theme-color") && ("theme-color" in localStorage || !window.matchMedia("(prefers-color-scheme: dark)").matches) || document.getElementById("light__to--dark")?.classList.add("dark--version"), "light" === localStorage.getItem("theme-color") && document.getElementById("light__to--dark")?.classList.remove("dark--version")</script>
</body>
</html>