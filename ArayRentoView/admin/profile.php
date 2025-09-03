<!doctype html>
<html lang="fa">
<?php
session_start();
include "../../ArayRentoController/admin/UserLoginCheck.php";
?>
<head>
    <meta charset="utf-8">
    <title>نمایه من</title>
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
        <style>.dashboard__chart--box__inner {
            height: 317px;
            padding-left: 0
        }
    </style>
</head>
<body>
<div id="preloader">
    <div class="loader--border"></div>
</div>
<div class="dashboard__page--wrapper">
    <div class="predictive__search--box">
        <div class="predictive__search--box__inner"><h2 class="predictive__search--title">محصولات جستجو کنید</h2>
            <form action="profile.php#" class="predictive__search--form"><label><input
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
        include "include/layout/header.php";
        ?>
        <main class="main__content_wrapper">
            <div class="dashboard__container dashboard__profile--container">
                <div class="profile__heading mb-30"><h2 class="profile__heading--title">نمایه من</h2></div>
                <div class="dashboard__profile--wrapper">
                    <div class="profile__sticky--thumbnail position-relative"><img alt=""
                                                                                   src="assets/img/dashboard/profile-sticky-thumbpng.png"></div>
                    <div class="profile__main--content d-flex justify-content-between align-items-center">
                        <div class="profile__author d-flex align-items-center">
                            <div class="profile__author--thumbnail position-relative"><img alt="img"
                                                                                           src="assets/img/dashboard/profile-author.png">
                                <a class="profile__author--instagram__icon" href="https://www.instagram.com"
                                   target="_blank">
                                    <svg fill="none" height="15" viewbox="0 0 15 15" width="15"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_222_1256)">
                                            <path d="M5.39524 1.87078L5.06305 1.49707L5.06305 1.49707L5.39524 1.87078ZM9.60476 1.87078L9.93695 1.49707V1.49707L9.60476 1.87078ZM9.46992 1.75091L9.13774 2.12462V2.12462L9.46992 1.75091ZM5.53008 1.75091L5.86226 2.12462V2.12462L5.53008 1.75091ZM2.53817 13.1531L2.83206 12.7485L2.53817 13.1531ZM1.84682 12.4617L2.25133 12.1678L1.84682 12.4617ZM13.1532 12.4617L12.7487 12.1678L13.1532 12.4617ZM12.4618 13.1531L12.1679 12.7485L12.4618 13.1531ZM13.25 4.99046V8.12488H14.25V4.99046H13.25ZM8.125 13.2499H6.875V14.2499H8.125V13.2499ZM1.75 8.12488V4.99046H0.75V8.12488H1.75ZM9.13774 2.12462L9.27258 2.24448L9.93695 1.49707L9.8021 1.37721L9.13774 2.12462ZM5.72742 2.24448L5.86226 2.12462L5.1979 1.37721L5.06305 1.49707L5.72742 2.24448ZM3.74058 2.99988C4.47302 2.99988 5.17999 2.73109 5.72742 2.24448L5.06305 1.49707C4.69867 1.82097 4.2281 1.99988 3.74058 1.99988V2.99988ZM9.27258 2.24448C9.82001 2.73109 10.527 2.99988 11.2594 2.99988V1.99988C10.7719 1.99988 10.3013 1.82097 9.93695 1.49707L9.27258 2.24448ZM9.8021 1.37721C8.48921 0.210201 6.51079 0.210201 5.1979 1.37721L5.86226 2.12462C6.79626 1.2944 8.20374 1.2944 9.13774 2.12462L9.8021 1.37721ZM6.875 13.2499C5.69207 13.2499 4.84504 13.2492 4.18964 13.1782C3.54361 13.1082 3.14335 12.9747 2.83206 12.7485L2.24428 13.5576C2.75445 13.9282 3.35081 14.0932 4.08193 14.1724C4.80369 14.2506 5.71435 14.2499 6.875 14.2499V13.2499ZM0.75 8.12488C0.75 9.28553 0.749314 10.1962 0.827512 10.9179C0.906724 11.6491 1.07166 12.2454 1.44231 12.7556L2.25133 12.1678C2.02517 11.8565 1.89169 11.4563 1.82169 10.8102C1.75069 10.1548 1.75 9.30781 1.75 8.12488H0.75ZM2.83206 12.7485C2.60922 12.5866 2.41324 12.3907 2.25133 12.1678L1.44231 12.7556C1.6659 13.0633 1.93654 13.334 2.24428 13.5576L2.83206 12.7485ZM13.25 8.12488C13.25 9.30781 13.2493 10.1548 13.1783 10.8102C13.1083 11.4563 12.9748 11.8565 12.7487 12.1678L13.5577 12.7556C13.9283 12.2454 14.0933 11.6491 14.1725 10.9179C14.2507 10.1962 14.25 9.28553 14.25 8.12488H13.25ZM8.125 14.2499C9.28565 14.2499 10.1963 14.2506 10.9181 14.1724C11.6492 14.0932 12.2456 13.9282 12.7557 13.5576L12.1679 12.7485C11.8566 12.9747 11.4564 13.1082 10.8104 13.1782C10.155 13.2492 9.30793 13.2499 8.125 13.2499V14.2499ZM12.7487 12.1678C12.5868 12.3907 12.3908 12.5866 12.1679 12.7485L12.7557 13.5576C13.0635 13.334 13.3341 13.0633 13.5577 12.7556L12.7487 12.1678ZM14.25 4.99046C14.25 3.33881 12.9111 1.99988 11.2594 1.99988V2.99988C12.3588 2.99988 13.25 3.89109 13.25 4.99046H14.25ZM1.75 4.99046C1.75 3.89109 2.64121 2.99988 3.74058 2.99988V1.99988C2.08893 1.99988 0.75 3.33881 0.75 4.99046H1.75ZM4.5 8.12488C4.5 9.78173 5.84315 11.1249 7.5 11.1249V10.1249C6.39543 10.1249 5.5 9.22945 5.5 8.12488H4.5ZM7.5 11.1249C9.15685 11.1249 10.5 9.78173 10.5 8.12488H9.5C9.5 9.22945 8.60457 10.1249 7.5 10.1249V11.1249ZM10.5 8.12488C10.5 6.46802 9.15685 5.12488 7.5 5.12488V6.12488C8.60457 6.12488 9.5 7.02031 9.5 8.12488H10.5ZM7.5 5.12488C5.84315 5.12488 4.5 6.46802 4.5 8.12488H5.5C5.5 7.02031 6.39543 6.12488 7.5 6.12488V5.12488Z"
                                                  fill="currentColor"></path>
                                            <path d="M10.625 5C10.625 5.34518 10.9048 5.625 11.25 5.625C11.5952 5.625 11.875 5.34518 11.875 5C11.875 4.65482 11.5952 4.375 11.25 4.375C10.9048 4.375 10.625 4.65482 10.625 5Z"
                                                  fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_222_1256">
                                                <rect fill="currentColor" height="15" width="15"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a></div>
                            <div class="profile__author--content"><h3 class="profile__author--title"><?php echo $_SESSION['userFirstName']; echo " "; echo $_SESSION['userLastName']?></h3>
                            </div>
                        </div>
                        <div class="profile__info d-flex">
                            <ul class="profile__info--wrapper">
                                <li class="profile__info--list"><h3 class="profile__info--title">ایمیل</h3><a
                                        class="profile__info__text"
                                        href="mailto:example@example.com"><?php echo $_SESSION['userEmail'] ?></a></li>
                            </ul>
                            <ul class="profile__info--wrapper">
                                <li class="profile__info--list"><h3 class="profile__info--title">تلفن</h3><a
                                            class="profile__info__text" href="tel:+1234567898"><?php echo $_SESSION['userPhoneNumber'];?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="profile__about--content text-center"><h3 class="profile__about--content__title">
                        <div class="social__share"><h3 class="social__share--title">ما را دنبال کنید</h3>
                            <ul class="social__share--wrapper d-flex justify-content-center">
                                <li class="social__share--list"><a class="social__share--icon"
                                                                   href="https://www.facebook.com/">
                                    <svg fill="none" height="14" viewbox="0 0 7 14" width="7"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">فیس بوک</span></a></li>
                                <li class="social__share--list"><a class="social__share--icon"
                                                                   href="https://twitter.com">
                                    <svg fill="none" height="11" viewbox="0 0 14 11" width="14"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 2.67188C12.375 2.70573 12.375 2.73958 12.375 2.77344C12.3919 2.79036 12.3919 2.81576 12.375 2.84961C12.375 2.88346 12.375 2.91732 12.375 2.95117C12.3919 2.9681 12.3919 2.99349 12.375 3.02734C12.3919 3.89062 12.2311 4.7793 11.8926 5.69336C11.554 6.60742 11.0632 7.42839 10.4199 8.15625C9.79362 8.86719 9.00651 9.45964 8.05859 9.93359C7.11068 10.3906 6.02734 10.6107 4.80859 10.5938C4.41927 10.6107 4.04688 10.5938 3.69141 10.543C3.33594 10.4753 2.98047 10.3991 2.625 10.3145C2.26953 10.2129 1.93099 10.0859 1.60938 9.93359C1.30469 9.76432 1 9.59505 0.695312 9.42578C0.763021 9.40885 0.813802 9.40885 0.847656 9.42578C0.898438 9.44271 0.957682 9.45117 1.02539 9.45117C1.0931 9.43424 1.14388 9.43424 1.17773 9.45117C1.22852 9.45117 1.28776 9.44271 1.35547 9.42578C1.66016 9.44271 1.96484 9.42578 2.26953 9.375C2.57422 9.30729 2.86198 9.23112 3.13281 9.14648C3.40365 9.06185 3.66602 8.94336 3.91992 8.79102C4.19076 8.63867 4.4362 8.47786 4.65625 8.30859C4.36849 8.29167 4.08919 8.24089 3.81836 8.15625C3.54753 8.07161 3.30208 7.94466 3.08203 7.77539C2.87891 7.58919 2.69271 7.39453 2.52344 7.19141C2.37109 6.97135 2.26107 6.71745 2.19336 6.42969C2.21029 6.46354 2.24414 6.48047 2.29492 6.48047C2.3457 6.46354 2.38802 6.46354 2.42188 6.48047C2.45573 6.4974 2.49805 6.50586 2.54883 6.50586C2.59961 6.48893 2.63346 6.48893 2.65039 6.50586C2.73503 6.48893 2.80273 6.48893 2.85352 6.50586C2.9043 6.50586 2.96354 6.4974 3.03125 6.48047C3.09896 6.46354 3.1582 6.45508 3.20898 6.45508C3.25977 6.43815 3.31901 6.42122 3.38672 6.4043C3.0651 6.35352 2.77734 6.24349 2.52344 6.07422C2.26953 5.90495 2.04102 5.71029 1.83789 5.49023C1.65169 5.27018 1.50781 5.01628 1.40625 4.72852C1.30469 4.42383 1.24544 4.11914 1.22852 3.81445C1.24544 3.7806 1.24544 3.77214 1.22852 3.78906C1.24544 3.77214 1.24544 3.76367 1.22852 3.76367C1.22852 3.76367 1.23698 3.75521 1.25391 3.73828C1.32161 3.80599 1.40625 3.85677 1.50781 3.89062C1.60938 3.92448 1.70247 3.95833 1.78711 3.99219C1.88867 4.02604 1.9987 4.05143 2.11719 4.06836C2.23568 4.06836 2.33724 4.08529 2.42188 4.11914C2.26953 3.98372 2.10872 3.83984 1.93945 3.6875C1.78711 3.53516 1.66016 3.35742 1.55859 3.1543C1.47396 2.95117 1.39779 2.74805 1.33008 2.54492C1.26237 2.3418 1.23698 2.11328 1.25391 1.85938C1.23698 1.75781 1.23698 1.64779 1.25391 1.5293C1.28776 1.39388 1.31315 1.27539 1.33008 1.17383C1.36393 1.07227 1.40625 0.96224 1.45703 0.84375C1.50781 0.72526 1.55859 0.623698 1.60938 0.539062C1.94792 0.928385 2.31185 1.29232 2.70117 1.63086C3.10742 1.9694 3.54753 2.25716 4.02148 2.49414C4.49544 2.73112 4.98633 2.92578 5.49414 3.07812C6.00195 3.21354 6.54362 3.28971 7.11914 3.30664C7.08529 3.27279 7.06836 3.23047 7.06836 3.17969C7.08529 3.11198 7.08529 3.0612 7.06836 3.02734C7.05143 2.97656 7.04297 2.92578 7.04297 2.875C7.04297 2.80729 7.03451 2.75651 7.01758 2.72266C7.03451 2.33333 7.11068 1.98633 7.24609 1.68164C7.38151 1.36003 7.56771 1.08073 7.80469 0.84375C8.05859 0.589844 8.34635 0.395182 8.66797 0.259766C8.98958 0.124349 9.33659 0.0481771 9.70898 0.03125C9.89518 0.0481771 10.0814 0.0735677 10.2676 0.107422C10.4538 0.141276 10.623 0.200521 10.7754 0.285156C10.9447 0.352865 11.1055 0.4375 11.2578 0.539062C11.4102 0.640625 11.5371 0.759115 11.6387 0.894531C11.8079 0.860677 11.9603 0.826823 12.0957 0.792969C12.2311 0.759115 12.375 0.708333 12.5273 0.640625C12.6797 0.572917 12.8151 0.513672 12.9336 0.462891C13.069 0.395182 13.2129 0.31901 13.3652 0.234375C13.2975 0.403646 13.2298 0.55599 13.1621 0.691406C13.0944 0.826823 13.0013 0.96224 12.8828 1.09766C12.7812 1.21615 12.6712 1.32617 12.5527 1.42773C12.4512 1.5293 12.3242 1.63086 12.1719 1.73242C12.3073 1.69857 12.4342 1.67318 12.5527 1.65625C12.6882 1.63932 12.8236 1.61393 12.959 1.58008C13.0944 1.5293 13.2214 1.48698 13.3398 1.45312C13.4583 1.41927 13.5853 1.36003 13.7207 1.27539C13.6191 1.42773 13.5176 1.56315 13.416 1.68164C13.3314 1.80013 13.2214 1.92708 13.0859 2.0625C12.9674 2.18099 12.849 2.29102 12.7305 2.39258C12.6289 2.47721 12.502 2.57878 12.3496 2.69727L12.375 2.67188Z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">توییتر</span></a></li>
                                <li class="social__share--list"><a class="social__share--icon" href="https://vimeo.com">
                                    <svg fill="none" height="11" viewbox="0 0 14 11" width="14"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.7793 0.564453C12.6608 0.429036 12.5169 0.327474 12.3477 0.259766C12.1953 0.17513 12.026 0.115885 11.8398 0.0820312C11.6536 0.0481771 11.4674 0.0397135 11.2812 0.0566406C11.0951 0.0566406 10.9173 0.0651042 10.748 0.0820312C10.6296 0.0989583 10.4349 0.166667 10.1641 0.285156C9.91016 0.403646 9.63086 0.572917 9.32617 0.792969C9.03841 1.01302 8.75911 1.29232 8.48828 1.63086C8.21745 1.95247 8.00586 2.35026 7.85352 2.82422C8.12435 2.80729 8.36133 2.80729 8.56445 2.82422C8.76758 2.84115 8.92839 2.89193 9.04688 2.97656C9.18229 3.0612 9.27539 3.19661 9.32617 3.38281C9.39388 3.55208 9.41081 3.7806 9.37695 4.06836C9.36003 4.18685 9.33464 4.3138 9.30078 4.44922C9.26693 4.56771 9.22461 4.69466 9.17383 4.83008C9.12305 4.96549 9.0638 5.10091 8.99609 5.23633C8.94531 5.35482 8.88607 5.48177 8.81836 5.61719C8.73372 5.76953 8.63216 5.9388 8.51367 6.125C8.41211 6.3112 8.28516 6.47201 8.13281 6.60742C7.9974 6.74284 7.83659 6.81901 7.65039 6.83594C7.48112 6.85286 7.30339 6.7513 7.11719 6.53125C6.93099 6.34505 6.78711 6.125 6.68555 5.87109C6.60091 5.60026 6.5332 5.32096 6.48242 5.0332C6.44857 4.74544 6.41471 4.45768 6.38086 4.16992C6.36393 3.86523 6.33854 3.5944 6.30469 3.35742C6.27083 3.22201 6.23698 3.08659 6.20312 2.95117C6.1862 2.79883 6.16081 2.64648 6.12695 2.49414C6.11003 2.3418 6.08464 2.18945 6.05078 2.03711C6.01693 1.88477 5.97461 1.73242 5.92383 1.58008C5.88997 1.46159 5.83919 1.3431 5.77148 1.22461C5.7207 1.08919 5.65299 0.970703 5.56836 0.869141C5.48372 0.767578 5.39062 0.674479 5.28906 0.589844C5.20443 0.505208 5.11133 0.445964 5.00977 0.412109C4.89128 0.378255 4.76432 0.369792 4.62891 0.386719C4.51042 0.386719 4.38346 0.403646 4.24805 0.4375C4.12956 0.454427 4.01107 0.488281 3.89258 0.539062C3.79102 0.589844 3.69792 0.640625 3.61328 0.691406C3.35938 0.84375 3.11393 1.01302 2.87695 1.19922C2.6569 1.38542 2.43685 1.58008 2.2168 1.7832C1.99674 1.9694 1.76823 2.16406 1.53125 2.36719C1.3112 2.55339 1.07422 2.73958 0.820312 2.92578V3.00195C0.904948 3.05273 0.964193 3.10352 0.998047 3.1543C1.04883 3.20508 1.08268 3.25586 1.09961 3.30664C1.13346 3.35742 1.15885 3.39974 1.17578 3.43359C1.20964 3.46745 1.26042 3.49284 1.32812 3.50977C1.4974 3.52669 1.6582 3.50977 1.81055 3.45898C1.96289 3.4082 2.10677 3.36589 2.24219 3.33203C2.3776 3.29818 2.50456 3.29818 2.62305 3.33203C2.75846 3.34896 2.88542 3.44206 3.00391 3.61133C3.07161 3.72982 3.1224 3.84831 3.15625 3.9668C3.20703 4.06836 3.24935 4.17839 3.2832 4.29688C3.31706 4.41536 3.35091 4.53385 3.38477 4.65234C3.41862 4.77083 3.45247 4.88932 3.48633 5.00781C3.55404 5.16016 3.60482 5.32096 3.63867 5.49023C3.68945 5.64258 3.74023 5.80339 3.79102 5.97266C3.8418 6.14193 3.88411 6.31966 3.91797 6.50586C3.96875 6.67513 4.01953 6.8444 4.07031 7.01367C4.13802 7.31836 4.21419 7.6569 4.29883 8.0293C4.40039 8.38477 4.51888 8.73177 4.6543 9.07031C4.78971 9.39193 4.94206 9.68815 5.11133 9.95898C5.29753 10.2129 5.52604 10.3906 5.79688 10.4922C5.93229 10.5599 6.07617 10.5938 6.22852 10.5938C6.39779 10.5768 6.55859 10.5514 6.71094 10.5176C6.88021 10.4837 7.03255 10.4329 7.16797 10.3652C7.32031 10.2975 7.44727 10.2383 7.54883 10.1875C7.81966 10.0182 8.07357 9.84049 8.31055 9.6543C8.56445 9.45117 8.80143 9.23958 9.02148 9.01953C9.25846 8.79948 9.47005 8.57096 9.65625 8.33398C9.85938 8.09701 10.054 7.86003 10.2402 7.62305C10.6634 7.04753 11.0358 6.47201 11.3574 5.89648C11.696 5.30404 11.9753 4.75391 12.1953 4.24609C12.4323 3.72135 12.6185 3.26432 12.7539 2.875C12.8893 2.48568 12.974 2.19792 13.0078 2.01172C13.0247 1.8763 13.0332 1.74935 13.0332 1.63086C13.0501 1.49544 13.0501 1.36849 13.0332 1.25C13.0332 1.13151 13.0078 1.01302 12.957 0.894531C12.9062 0.776042 12.847 0.666016 12.7793 0.564453Z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">vimeo</span></a></li>
                                <li class="social__share--list"><a class="social__share--icon"
                                                                   href="https://www.pinterest.com">
                                    <svg fill="none" height="13" viewbox="0 0 11 13" width="11"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">پانترست</span></a></li>
                            </ul>
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
<div class="modal fade" id="modaladdcontact" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__contact--main__content">
            <div class="modal__contact--header d-flex align-items-center justify-content-between"><h3
                    class="modal__contact--header__title">افزودن مخاطب</h3>
                <button aria-label="Close" class="modal__contact--close__btn" data-bs-dismiss="modal" type="button">
                    <svg height="12.711" viewbox="0 0 12.711 12.711" width="12.711" xmlns="http://www.w3.org/2000/svg">
                        <g data-name="Group 7205" id="Group_7205" transform="translate(-113.644 -321.644)">
                            <path d="M0,9.883,9.883,0" fill="none" id="Vector" stroke="currentColor"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  transform="translate(115.059 323.059)"></path>
                            <path d="M9.883,9.883,0,0" data-name="Vector" fill="none" id="Vector-2"
                                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  transform="translate(115.059 323.059)"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="modal-body modal__contact--body">
                <div class="modal__contact--form">
                    <form action="profile.php#">
                        <div class="modal__contact--form__input mb-20"><label class="modal__contact--input__label"
                                                                              for="name">نام تماس</label> <input
                                class="modal__contact--input__field" id="name" placeholder="نام را وارد کنید"
                                type="text"></div>
                        <div class="modal__contact--form__input mb-20"><label class="modal__contact--input__label">توضیحات</label>
                            <textarea class="modal__contact--textarea__field" placeholder="توضیحات"></textarea></div>
                        <div class="modal__contact--footer">
                            <button class="solid__btn border-0" type="submit">تماس</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modaladdcalls" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__contact--main__content">
            <div class="modal-body modal__contact--body">
                <div class="modal__calling--wrapper">
                    <div class="modal__calling--author"><img alt="img" class="modal__calling--author__thumb"
                                                             src="assets/img/dashboard/calling-author.png">
                        <h3 class="modal__calling--author__name">ویلیام هاینمن</h3><span
                                class="modal__calling--author__subtitle">تماس گرفتن...</span></div>
                    <div class="modal__calls--footer d-flex justify-content-center">
                        <button class="call__receive border-0">
                            <svg class="lucide lucide-phone-call" data-lucide="phone-call" fill="none" height="24"
                                 stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                <path d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                                <path d="M14.05 6A5 5 0 0 1 18 10"></path>
                            </svg>
                        </button>
                        <button class="call__cancel border-0 color-accent-2" data-bs-dismiss="modal">
                            <svg class="lucide lucide-phone" data-lucide="phone" fill="none" height="24"
                                 stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
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