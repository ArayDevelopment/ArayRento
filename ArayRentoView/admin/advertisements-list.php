<!doctype html>
<html lang="fa">
<?php
session_start();
include "../../ArayRentoController/admin/UserLoginCheck.php";
?>
<head>
    <?php
    include "../../ArayRentoController/admin/AdminSelectAdvertisements.php";
    global $groupedAdvertisements;
    ?>
    <meta charset="utf-8">
    <title>آگهی ها</title>
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
    <div class="predictive__search--box">
        <div class="predictive__search--box__inner"><h2 class="predictive__search--title">محصولات جستجو کنید</h2>
            <form action="advertisements-list.php#" class="predictive__search--form"><label><input
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
            <div class="dashboard__container dashboard__reviews--container">
                <div class="reviews__heading mb-30"><h2 class="reviews__heading--title">آگهی ها</h2></div>
                <div class="properties__wrapper">
                    <div class="properties__table table-responsive">
                        <table class="properties__table--wrapper">
                            <thead>
                            <tr>
                                <th></th>
                                <th>عنوان آگهی</th>
                                <th>دسته بندی</th>
                                <th>منطقه</th>
                                <th>تعداد اتاق</th>
                                <th>متراژ</th>
                                <th>طبقه</th>
                                <th>شماره تلفن</th>
                                <th>آدرس</th>
                                <th><span class="min-w-100">وضعیت</span></th>
                                <th>اقدام</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include '../../ArayRentoModel/ArayRentoConnectDB.php';
                            function getFirstImage($conn, $advertisementId): string
                            {
                                $stmt = $conn->prepare("SELECT url_rento_imeges_aray FROM aray_rento_imeges_aray WHERE advertisement_id_rento_imeges_aray = ? ORDER BY id_rento_imeges_aray ASC LIMIT 1");
                                $stmt->execute([$advertisementId]);
                                $image = $stmt->fetch(PDO::FETCH_ASSOC);

                                if ($image && !empty($image['url_rento_imeges_aray'])) {
                                    return $image['url_rento_imeges_aray'];
                                } else {
                                    return 'default.jpg';
                                }
                            }

                            global $conn;
                            foreach ($groupedAdvertisements as $ad) {
                            $advertisementId = $ad['id_rento_advertisements_aray'];
                            $title = $ad['title_rento_advertisements_aray'];
                            $description = $ad['desc_rento_advertisements_aray'];
                            $category = $ad['category_rento_advertisements_aray'];
                            $rent = $ad['rent_rento_advertisements_aray'];
                            $deposit = $ad['deposit_rento_advertisements_aray'];
                            $location = $ad['location_rento_advertisements_aray'];
                            $roomsQuantity = $ad['rooms_quantity_rento_advertisements_aray'];
                            $area = $ad['area_rento_advertisements_aray'];
                            $floorsQuantity = $ad['floors_quantity_rento_advertisements_aray'];
                            $floorNumber = $ad['floor_number_rento_advertisements_aray'];
                            $phoneNumber = $ad['phone_numbre_rento_advertisements_aray'];
                            $address = $ad['address_rento_advertisements_aray'];
                            $status = $ad['status_rento_advertisements_aray'];
                            $imagePath = getFirstImage($conn, $advertisementId);
                            ?>
                            <tr>
                                <td>
                                    <div class="reviews__date">
                                        <div class="properties__author--thumb"><img alt="img" style="width:  70%; border-radius: 10%"
                                                                                    src="<?php echo "../../" . htmlspecialchars($imagePath)?>">
                                        </div>

                                    </div>
                                </td>
                                <td>
                                    <div class="reviews__date"><h3 class="reviews__author--title">
                                            <?php echo $title ?>
                                        </h3>
                                        <p class="reviews__author--subtitle">
                                            <?php echo $description ?>
                                        </p>
                                        <span class="properties__author--price"><?php echo number_format($rent);
                                            echo " تومان" ?></span></div>
                                </td>
                                <td><span class="reviews__date">
                                        <?php
                                        switch ($category) {
                                            case 0:
                                                echo "ویلایی";
                                                break;
                                            case 1:
                                                echo "خانه";
                                                break;
                                            case 2:
                                                echo "دفتر";
                                                break;
                                            case 3:
                                                echo "آپارتمان";
                                                break;
                                        }
                                        ?>
                                    </span></td>
                                <td><span class="reviews__date"><?php echo $location; ?></span></td>
                                <td><span class="reviews__date"><?php echo $roomsQuantity; ?></span></td>
                                <td><span class="reviews__date"><?php echo $area; ?></span></td>
                                <td><span class="reviews__date"><?php echo $floorNumber; ?></span></td>
                                <td><span class="reviews__date"><?php echo $phoneNumber; ?></span></td>
                                <td><span class="reviews__date"><?php echo $address; ?></span></td>
                                <?php
                                if ($status == 0){
                                    echo '<td><span class="status__btn active">فعال</span></td>';
                                }
                                else{
                                    echo '<td><span class="status__btn pending">غیرفعال</span></td>';
                                }
                                ?>
                                <td>
                                    <div class="reviews__action--wrapper position-relative">
                                        <button aria-expanded="true" aria-label="action button"
                                                class="reviews__action--btn" data-bs-toggle="dropdown" type="button">
                                            <svg fill="none" height="17" viewbox="0 0 3 17" width="3"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="1.5" cy="1.5" fill="currentColor" r="1.5"></circle>
                                                <circle cx="1.5" cy="8.5" fill="currentColor" r="1.5"></circle>
                                                <circle cx="1.5" cy="15.5" fill="currentColor" r="1.5"></circle>
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu sold-out__user--dropdown"
                                            data-popper-placement="bottom-start">
                                            <li><a href="edit-advertisements.php?id=<?= $advertisementId ?>">ویرایش کنید</a></li>
                                            <li><a data-bs-toggle="modal" href="../../ArayRentoController/admin/DeleteAdvertisements.php?id=<?= $advertisementId ?>">حذف کنید</a></li>
                                            <?php
                                            if($status == 0){
                                                ?>
                                                <li><a data-bs-toggle="modal" href="../../ArayRentoController/admin/InactiveAdvertisements.php?id=<?= $advertisementId ?>">غیرفعال کنید</a></li>

                                            <?php
                                            } else {
                                            ?>
                                                <li><a data-bs-toggle="modal" href="../../ArayRentoController/admin/ActiveAdvertisements.php?id=<?= $advertisementId ?>">فعال کنید</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </td>
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
                                        class="pagination__arrow-icon link" href="advertisements-list.php#">
                                    <svg fill="none" height="22" viewbox="0 0 12 22" width="12"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.583 20.5832L0.999675 10.9998L10.583 1.4165" stroke="currentColor"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                    <span class="visually-hidden">پیکان سمت چپ صفحه</span> </a><span
                                        class="pagination__arrow-icon"><svg fill="none" height="22" viewbox="0 0 3 22"
                                                                            width="3"
                                                                            xmlns="http://www.w3.org/2000/svg"><path
                                        d="M1.50098 1L1.50098 21" stroke="currentColor" stroke-linecap="round"
                                        stroke-width="2"></path></svg> </span><a class="pagination__arrow-icon link"
                                                                                 href="advertisements-list.php#">
                                    <svg fill="none" height="22" viewbox="0 0 12 22" width="12"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.001 20.5832L1.41764 10.9998L11.001 1.4165" stroke="currentColor"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                    <span class="visually-hidden">پیکان سمت چپ صفحه</span></a></li>
                                <li class="pagination__menu--items"><a class="pagination__menu--link"
                                                                       href="advertisements-list.php#">01</a></li>
                                <li class="pagination__menu--items"><a
                                        class="pagination__menu--link active color-accent-1" href="advertisements-list.php#">02</a>
                                </li>
                                <li class="pagination__menu--items"><a class="pagination__menu--link"
                                                                       href="advertisements-list.php#">03</a></li>
                                <li class="pagination__menu--items pagination__arrow d-flex"><a
                                        class="pagination__arrow-icon link" href="advertisements-list.php#">
                                    <svg fill="none" height="22" viewbox="0 0 12 22" width="12"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.00098 20.5832L10.5843 10.9998L1.00098 1.4165" stroke="currentColor"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                    <span class="visually-hidden">صفحه فلش سمت راست</span> </a><span
                                        class="pagination__arrow-icon"><svg fill="none" height="22" viewbox="0 0 3 22"
                                                                            width="3"
                                                                            xmlns="http://www.w3.org/2000/svg"><path
                                        d="M1.50098 1L1.50098 21" stroke="currentColor" stroke-linecap="round"
                                        stroke-width="2"></path></svg> </span><a class="pagination__arrow-icon link"
                                                                                 href="advertisements-list.php#">
                                    <svg fill="none" height="22" viewbox="0 0 12 22" width="12"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.41895 20.5832L11.0023 10.9998L1.41895 1.4165" stroke="currentColor"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
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
                    <form action="advertisements-list.php#">
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