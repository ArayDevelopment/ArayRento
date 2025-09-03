<!doctype html>
<html lang="fa">
<?php
session_start();
include "../../ArayRentoController/admin/UserLoginCheck.php";
?>
<head>
    <?php
    include "../../ArayRentoController/admin/SelectUsers.php";
    global $groupedUsers;
    ?>
    <meta charset="utf-8">
    <title>لیست کاربران</title>
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
    <link href="assets/css/table.css" rel="stylesheet">
    <link href="assets/css/dark.rtl.css" rel="stylesheet">
    <script>"dark" !== localStorage.getItem("theme-color") && ("theme-color" in localStorage || !window.matchMedia("(prefers-color-scheme: dark)").matches) || document.documentElement.classList.add("dark"), "light" === localStorage.getItem("theme-color") && document.documentElement.classList.remove("dark")</script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div id="preloader">
    <div class="loader--border"></div>
</div>
<div class="dashboard__page--wrapper">
    <div class="dashboard__sidebar">
        <div class="main__logo logo-desktop-none"><h1 class="main__logo--title"><a class="main__logo--link"
                                                                                   href="dashboard.php"><img
                            alt="logo-img" class="main__logo--img desktop light__logo"
                            src="assets/img/logo/nav-log.png"> <img
                            alt="logo-img" class="main__logo--img desktop dark__logo"
                            src="assets/img/logo/nav-log.png"> <img
                            alt="logo-img" class="main__logo--img mobile" src="assets/img/logo/logo-mobile.png"></a>
            </h1></div>
        <?php
        include "include/layout/menu.php";
        ?>
    </div>
    <div class="page__body--wrapper" id="dashbody__page--body__wrapper">
        <?php
        include "include/layout/header.php";
        ?>
        <main class="main__content_wrapper">
            <div class="dashboard__container dashboard__reviews--container">
                <div class="reviews__heading mb-30"><h2 class="reviews__heading--title">لیست کاربران</h2>
                <div class="dashboard__reviews--wrapper">
                    <div class="reviews__table table-responsive">
                        <table class="reviews__table--wrapper package_table_wrapper">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>شماره تلفن</th>
                                <th>ایمیل</th>
                                <th>سطح کاربری</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($groupedUsers as $users) {
                            $firstName = $users['fname_rento_users_aray'];
                            $lastName = $users['lname_rento_users_aray'];
                            $phoneNumber = $users['phone_number_rento_users_aray'];
                            $email = $users['email_rento_users_aray'];
                            $role = $users['role_rento_users_aray'];
                            $status = $users['status_rento_user_aray'];
                            ?>
                            <tr>
                                <td><span class="package__table--body--text"><?php echo $firstName ?></span></td>
                                <td><span class="package__table--body--text"><?php echo $lastName ?></span></td>
                                <td><span class="package__table--body--text"><?php echo $phoneNumber ?></span></td>
                                <td><span class="package__table--body--text"><?php echo $email ?></span></td>
                                <td><span class="package__table--body--text">
                                        <?php
                                        switch ($role) {
                                            case 0:
                                                echo "سوپر ادمین";
                                                break;
                                            case 1:
                                                echo "ادمین";
                                                break;
                                            case 2:
                                                echo "کاربر";
                                                break;
                                        }
                                        ?>
                                    </span></td>
                                <td><span class="package__table--body--text">
                                             <?php
                                             switch ($status) {
                                                 case 0:
                                                     echo "غیرفعال";
                                                     break;
                                                 case 1:
                                                     echo "فعال";
                                                     break;
                                             }
                                             ?>
                                    </span></td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination__area">
                        <nav class="pagination justify-content-center">
                            <ul class="pagination__menu d-flex align-items-center justify-content-center">
                                <li class="pagination__menu--items pagination__arrow d-flex"><a
                                            class="pagination__arrow-icon link" href="users-list.php#">
                                        <svg fill="none" height="22" viewbox="0 0 12 22" width="12"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.583 20.5832L0.999675 10.9998L10.583 1.4165"
                                                  stroke="currentColor"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg>
                                        <span class="visually-hidden">پیکان سمت چپ صفحه</span> </a><span
                                            class="pagination__arrow-icon"><svg fill="none" height="22"
                                                                                viewbox="0 0 3 22"
                                                                                width="3"
                                                                                xmlns="http://www.w3.org/2000/svg"><path
                                                    d="M1.50098 1L1.50098 21" stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-width="2"></path></svg> </span><a
                                            class="pagination__arrow-icon link"
                                            href="users-list.php#">
                                        <svg fill="none" height="22" viewbox="0 0 12 22" width="12"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.001 20.5832L1.41764 10.9998L11.001 1.4165"
                                                  stroke="currentColor"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg>
                                        <span class="visually-hidden">پیکان سمت چپ صفحه</span></a></li>
                                <li class="pagination__menu--items"><a class="pagination__menu--link"
                                                                       href="users-list.php#">01</a></li>
                                <li class="pagination__menu--items"><a
                                            class="pagination__menu--link active color-accent-1"
                                            href="users-list.php#">02</a></li>
                                <li class="pagination__menu--items"><a class="pagination__menu--link"
                                                                       href="users-list.php#">03</a></li>
                                <li class="pagination__menu--items pagination__arrow d-flex"><a
                                            class="pagination__arrow-icon link" href="users-list.php#">
                                        <svg fill="none" height="22" viewbox="0 0 12 22" width="12"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.00098 20.5832L10.5843 10.9998L1.00098 1.4165"
                                                  stroke="currentColor"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg>
                                        <span class="visually-hidden">صفحه فلش سمت راست</span> </a><span
                                            class="pagination__arrow-icon"><svg fill="none" height="22"
                                                                                viewbox="0 0 3 22"
                                                                                width="3"
                                                                                xmlns="http://www.w3.org/2000/svg"><path
                                                    d="M1.50098 1L1.50098 21" stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-width="2"></path></svg> </span><a
                                            class="pagination__arrow-icon link"
                                            href="users-list.php#">
                                        <svg fill="none" height="22" viewbox="0 0 12 22" width="12"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.41895 20.5832L11.0023 10.9998L1.41895 1.4165"
                                                  stroke="currentColor"
                                                  stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg>
                                        <span class="visually-hidden">صفحه فلش سمت راست</span></a></li>
                            </ul>
                        </nav>
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