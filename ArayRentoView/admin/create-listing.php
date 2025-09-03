<!doctype html>
<html lang="fa">
<?php
session_start();
include '../../ArayRentoController/admin/InsertAdvertisements.php';
?>
<head>
    <meta charset="utf-8">
    <title>ایجاد آگهی</title>
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
                <div class="add__property--heading mb-30"><h2 class="add__property--heading__title">ایجاد آگهی</h2></div>
                <div class="add__property__inner d-flex">
                    <div class="add__property--step left">
                        <div class="add__property--step__inner">
                            <div class="add__property--box mb-30"><h3 class="add__property--box__title mb-20">ایجاد
                                فهرست</h3>
                                <form action="" method="post" class="add__property--form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="title">عنوان آگهی</label>
                                                <input class="add__listing--input__field" id="title" name="title"
                                                       placeholder="عنوان آگهی" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="add__listing--textarea__box mb-15">
                                                <label class="add__listing--input__label"
                                                       for="description">توضیحات</label>
                                                <textarea class="add__listing--textarea__field" id="description"
                                                          name="description"
                                                          placeholder="توضیحات"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label">نوع ملک</label>
                                                <div class="select position-relative">
                                                    <select class="add__listing--form__select" name="category">
                                                        <option value="آپارتمان">آپارتمان</option>
                                                        <option value="دفتر">دفتر</option>
                                                        <option value="خانه">خانه</option>
                                                        <option value="ویلایی">ویلایی</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label">وضعیت سند</label>
                                                <div class="select position-relative">
                                                    <select class="add__listing--form__select" name="documentStatus">
                                                        <option value="شش دانگ">سند شش دانگ</option>
                                                        <option value="قولنامه‌ای">قولنامه‌ای</option>
                                                        <option value="وکالتی">وکالتی</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="rent">اجاره</label>
                                                <input class="add__listing--input__field" id="rent" name="rent"
                                                       placeholder="اجاره" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="deposit">ودیعه</label>
                                                <input class="add__listing--input__field" id="deposit" name="deposit"
                                                       placeholder="ودیعه" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="region">منطقه</label>
                                                <input class="add__listing--input__field" id="region" name="locationId"
                                                       placeholder="منطقه" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="rooms">تعداد اتاق</label>
                                                <input class="add__listing--input__field" id="rooms" name="roomsQuantity"
                                                       placeholder="تعداد اتاق" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="area">متراژ</label>
                                                <input class="add__listing--input__field" id="area" name="area"
                                                       placeholder="متراژ" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="floorsQuantity">تعداد
                                                    طبقات</label>
                                                <input class="add__listing--input__field" id="floorsQuantity" name="floorsQuantity"
                                                       placeholder="تعداد طبقات" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="floorNumber">طبقه
                                                    واحد</label>
                                                <input class="add__listing--input__field" id="floorNumber"
                                                       name="floorNumber"
                                                       placeholder="طبقه واحد" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="phoneNumber">شماره تلفن</label>
                                                <input class="add__listing--input__field" id="phoneNumber" name="phoneNumber"
                                                       placeholder="شماره تلفن" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="built_year">سال
                                                    ساخت</label>
                                                <input class="add__listing--input__field" id="built_year"
                                                       name="manufactureYear"
                                                       placeholder="سال ساخت" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="images">عکس</label>
                                                <input class="add__listing--input__field" id="images" name="images[]"
                                                        type="file" multiple accept="image/*" >
                                                <br>
                                                <br>
                                                <label class="solid__btn add__property--btn" for="images">انتخاب کنید</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="add__listing--textarea__box mb-15">
                                            <label class="add__listing--input__label" for="address">آدرس</label>
                                            <textarea class="add__listing--textarea__field" id="address" name="address"
                                                      placeholder="آدرس"></textarea>
                                        </div>
                                    </div>


                                    <h3 class="add__property--box__title pt-0">امکانات و ویژگی‌ها</h3>
                                    <div class="advance__apeartment--inner d-flex justify-content-between">
                                        <ul class="interior__amenities--check">
                                            <li class="interior__amenities--check__list"><label
                                                        class="interior__amenities--check__label"
                                                        for="elevator">آسانسور</label>
                                                <input class="interior__amenities--check__input" id="elevator"
                                                       name="amenities[]" value="آسانسور"
                                                       type="checkbox">
                                                <span class="interior__amenities--checkmark"></span></li>

                                            <li class="interior__amenities--check__list"><label
                                                        class="interior__amenities--check__label"
                                                        for="parking">پارکینگ</label>
                                                <input class="interior__amenities--check__input" id="parking"
                                                       name="amenities[]" value="پارکینگ"
                                                       type="checkbox">
                                                <span class="interior__amenities--checkmark"></span></li>

                                            <li class="interior__amenities--check__list"><label
                                                        class="interior__amenities--check__label"
                                                        for="anbari">انباری</label>
                                                <input class="interior__amenities--check__input" id="anbari"
                                                       name="amenities[]" value="انباری"
                                                       type="checkbox">
                                                <span class="interior__amenities--checkmark"></span></li>

                                            <li class="interior__amenities--check__list"><label
                                                        class="interior__amenities--check__label"
                                                        for="balcony">بالکن</label>
                                                <input class="interior__amenities--check__input" id="balcony"
                                                       name="amenities[]" value="بالکن"
                                                       type="checkbox">
                                                <span class="interior__amenities--checkmark"></span></li>
                                        </ul>

                                        <ul class="interior__amenities--check">
                                            <li class="interior__amenities--check__list"><label
                                                        class="interior__amenities--check__label" for="ac">کولر
                                                    گازی</label>
                                                <input class="interior__amenities--check__input" id="ac"
                                                       name="amenities[]" value="کولر گازی"
                                                       type="checkbox">
                                                <span class="interior__amenities--checkmark"></span></li>

                                            <li class="interior__amenities--check__list"><label
                                                        class="interior__amenities--check__label"
                                                        for="heating">شوفاژ</label>
                                                <input class="interior__amenities--check__input" id="heating"
                                                       name="amenities[]" value="شوفاژ"
                                                       type="checkbox">
                                                <span class="interior__amenities--checkmark"></span></li>

                                            <li class="interior__amenities--check__list"><label
                                                        class="interior__amenities--check__label" for="video-door">آیفون
                                                    تصویری</label>
                                                <input class="interior__amenities--check__input" id="video-door"
                                                       name="amenities[]" value="آیفون تصویری"
                                                       type="checkbox">
                                                <span class="interior__amenities--checkmark"></span></li>

                                            <li class="interior__amenities--check__list"><label
                                                        class="interior__amenities--check__label"
                                                        for="security">نگهبانی</label>
                                                <input class="interior__amenities--check__input" id="security"
                                                       name="amenities[]" value="نگهبانی"
                                                       type="checkbox">
                                                <span class="interior__amenities--checkmark"></span></li>
                                        </ul>

                                        <ul class="interior__amenities--check">
                                            <li class="interior__amenities--check__list">
                                                <label class="interior__amenities--check__label" for="check17">پنجره
                                                    دوجداره</label>
                                                <input class="interior__amenities--check__input" id="check17"
                                                       name="amenities[]" value="پنجره دوجداره" type="checkbox">
                                                <span class="interior__amenities--checkmark"></span>
                                            </li>
                                            <li class="interior__amenities--check__list">
                                                <label class="interior__amenities--check__label" for="check18">دوربین
                                                    مداربسته</label>
                                                <input class="interior__amenities--check__input" id="check18"
                                                       name="amenities[]" value="دوربین مداربسته" type="checkbox">
                                                <span class="interior__amenities--checkmark"></span>
                                            </li>
                                            <li class="interior__amenities--check__list">
                                                <label class="interior__amenities--check__label" for="check19">در ضد
                                                    سرقت</label>
                                                <input class="interior__amenities--check__input" id="check19"
                                                       name="amenities[]" value="در ضد سرقت" type="checkbox">
                                                <span class="interior__amenities--checkmark"></span>
                                            </li>
                                            <li class="interior__amenities--check__list">
                                                <label class="interior__amenities--check__label" for="check20">گرمایش از
                                                    کف</label>
                                                <input class="interior__amenities--check__input" id="check20"
                                                       name="amenities[]" value="گرمایش از کف" type="checkbox">
                                                <span class="interior__amenities--checkmark"></span>
                                            </li>
                                        </ul>
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