<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>جزئیات آگهی</title>
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
<?php
$advertisementId = $_GET['id'];
global $conn;
include "../ArayRentoModel/ArayRentoConnectDB.php";

$advertisementData = [];
$toaster_messages = [];

try {
    $stmt = $conn->prepare("SELECT * from aray_rento_advertisements_aray where id_rento_advertisements_aray = $advertisementId");
    $stmt->execute();
    $advertisementData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($advertisementData)) {
        $toaster_messages[] = "toastr.error('هیچ آگهی پیدا نشد.');";
    }
} catch (PDOException $e) {
    $toaster_messages[] = "toastr.error('خطا در بارگذاری آگهی: " . $e->getMessage() . "');";
}


foreach ($toaster_messages as $message) {
    echo "<script>$message</script>";
}

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

$groupedAdvertisements = [];
foreach ($advertisementData as $ad) {
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
    $manufactureYear = $ad['manufacture_year_rento_advertisements_aray'];
    $address = $ad['address_rento_advertisements_aray'];
    $imagePath = getFirstImage($conn, $advertisementId);
}
?>
<div id="preloader">
    <div class="loader--border"></div>
</div>
<header class="header__section">
    <?php
    include "include/layout/header.php";
    ?>
</header>
<main class="main__content_wrapper">
    <section class="listing__hero--section">
        <div class="listing__hero--section__inner position-relative">
            <div class="listing__hero--slider">
                <div class="swiper hero__swiper--column1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="listing__hero--slider__items position-relative"><img alt="img"
                                                                                             class="listing__hero--slider__media"
                                                                                             src="assets/img/hero/listing-details-hero.png">
                                <div class="listing__hero--slider__container">
                                    <div class="container">
                                        <div class="listing__hero--slider__content">
                                            <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                                <h3 class="listing__hero--slider__title"><?php echo $title ?></h3><span
                                                        class="listing__hero--slider__price"><?php echo number_format($rent);
                                                    echo " تومان" ?></span></div>
                                            <p class="listing__hero--slider__text">
                                                <svg fill="none" height="17" viewbox="0 0 11 17" width="11"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                          fill="#FA4B4A"></path>
                                                </svg>
                                                <?php echo $address ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="listing__hero--slider__items position-relative"><img alt="img"
                                                                                             class="listing__hero--slider__media"
                                                                                             src="assets/img/hero/listing-details-hero.png">
                                <div class="listing__hero--slider__container">
                                    <div class="container">
                                        <div class="listing__hero--slider__content">
                                            <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                                <h3 class="listing__hero--slider__title">خانه خانوادگی لوکس</h3><span
                                                        class="listing__hero--slider__price">13000 تومان</span></div>
                                            <p class="listing__hero--slider__text">
                                                <svg fill="none" height="17" viewbox="0 0 11 17" width="11"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                          fill="#FA4B4A"></path>
                                                </svg>
                                                1421 خیابان سن پدرو، لس آنجلس، کالیفرنیا
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="listing__hero--slider__items position-relative"><img alt="img"
                                                                                             class="listing__hero--slider__media"
                                                                                             src="assets/img/hero/listing-details-hero.png">
                                <div class="listing__hero--slider__container">
                                    <div class="container">
                                        <div class="listing__hero--slider__content">
                                            <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                                <h3 class="listing__hero--slider__title">خانه خانوادگی لوکس</h3><span
                                                        class="listing__hero--slider__price">13000 تومان</span></div>
                                            <p class="listing__hero--slider__text">
                                                <svg fill="none" height="17" viewbox="0 0 11 17" width="11"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                          fill="#FA4B4A"></path>
                                                </svg>
                                                1421 خیابان سن پدرو، لس آنجلس، کالیفرنیا
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="listing__hero--slider__items position-relative"><img alt="img"
                                                                                             class="listing__hero--slider__media"
                                                                                             src="assets/img/hero/listing-details-hero.png">
                                <div class="listing__hero--slider__container">
                                    <div class="container">
                                        <div class="listing__hero--slider__content">
                                            <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                                <h3 class="listing__hero--slider__title">خانه خانوادگی لوکس</h3><span
                                                        class="listing__hero--slider__price">13000 تومان</span></div>
                                            <p class="listing__hero--slider__text">
                                                <svg fill="none" height="17" viewbox="0 0 11 17" width="11"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                          fill="#FA4B4A"></path>
                                                </svg>
                                                1421 خیابان سن پدرو، لس آنجلس، کالیفرنیا
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="listing__details--section section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing__details--wrapper">
                        <div class="listing__details--content">
                            <div class="listing__details--content__top mb-25 d-flex align-items-center justify-content-between">
                                <div class="listing__details--meta">
                                    <ul class="listing__details--meta__wrapper d-flex align-items-center">
                                        <li><span class="listing__details--badge">برجسته</span></li>
                                        <li><span class="listing__details--badge two">برای فروش</span></li>
                                    </ul>
                                </div>
                                <ul class="listing__details--action d-flex">
                                        <ul class="dropdown-menu share__dropdown--menu" style="margin:0">
                                            <li class="social__share--list"><a class="social__share--link"
                                                                               data-bs-toggle="modal"
                                                                               href="https://www.facebook.com/"><span>فیس بوک</span>
                                                    <svg fill="none" height="15" viewbox="0 0 7 14" width="8"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z"
                                                              fill="currentColor" fill-opacity="1"></path>
                                                    </svg>
                                                </a></li>
                                            <li class="social__share--list"><a class="social__share--link"
                                                                               data-bs-toggle="modal"
                                                                               href="listing-list.php"><span>توییتر</span>
                                                    <svg fill="none" height="12" viewbox="0 0 14 11" width="15"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.375 2.67188C12.375 2.70573 12.375 2.73958 12.375 2.77344C12.3919 2.79036 12.3919 2.81576 12.375 2.84961C12.375 2.88346 12.375 2.91732 12.375 2.95117C12.3919 2.9681 12.3919 2.99349 12.375 3.02734C12.3919 3.89062 12.2311 4.7793 11.8926 5.69336C11.554 6.60742 11.0632 7.42839 10.4199 8.15625C9.79362 8.86719 9.00651 9.45964 8.05859 9.93359C7.11068 10.3906 6.02734 10.6107 4.80859 10.5938C4.41927 10.6107 4.04688 10.5938 3.69141 10.543C3.33594 10.4753 2.98047 10.3991 2.625 10.3145C2.26953 10.2129 1.93099 10.0859 1.60938 9.93359C1.30469 9.76432 1 9.59505 0.695312 9.42578C0.763021 9.40885 0.813802 9.40885 0.847656 9.42578C0.898438 9.44271 0.957682 9.45117 1.02539 9.45117C1.0931 9.43424 1.14388 9.43424 1.17773 9.45117C1.22852 9.45117 1.28776 9.44271 1.35547 9.42578C1.66016 9.44271 1.96484 9.42578 2.26953 9.375C2.57422 9.30729 2.86198 9.23112 3.13281 9.14648C3.40365 9.06185 3.66602 8.94336 3.91992 8.79102C4.19076 8.63867 4.4362 8.47786 4.65625 8.30859C4.36849 8.29167 4.08919 8.24089 3.81836 8.15625C3.54753 8.07161 3.30208 7.94466 3.08203 7.77539C2.87891 7.58919 2.69271 7.39453 2.52344 7.19141C2.37109 6.97135 2.26107 6.71745 2.19336 6.42969C2.21029 6.46354 2.24414 6.48047 2.29492 6.48047C2.3457 6.46354 2.38802 6.46354 2.42188 6.48047C2.45573 6.4974 2.49805 6.50586 2.54883 6.50586C2.59961 6.48893 2.63346 6.48893 2.65039 6.50586C2.73503 6.48893 2.80273 6.48893 2.85352 6.50586C2.9043 6.50586 2.96354 6.4974 3.03125 6.48047C3.09896 6.46354 3.1582 6.45508 3.20898 6.45508C3.25977 6.43815 3.31901 6.42122 3.38672 6.4043C3.0651 6.35352 2.77734 6.24349 2.52344 6.07422C2.26953 5.90495 2.04102 5.71029 1.83789 5.49023C1.65169 5.27018 1.50781 5.01628 1.40625 4.72852C1.30469 4.42383 1.24544 4.11914 1.22852 3.81445C1.24544 3.7806 1.24544 3.77214 1.22852 3.78906C1.24544 3.77214 1.24544 3.76367 1.22852 3.76367C1.22852 3.76367 1.23698 3.75521 1.25391 3.73828C1.32161 3.80599 1.40625 3.85677 1.50781 3.89062C1.60938 3.92448 1.70247 3.95833 1.78711 3.99219C1.88867 4.02604 1.9987 4.05143 2.11719 4.06836C2.23568 4.06836 2.33724 4.08529 2.42188 4.11914C2.26953 3.98372 2.10872 3.83984 1.93945 3.6875C1.78711 3.53516 1.66016 3.35742 1.55859 3.1543C1.47396 2.95117 1.39779 2.74805 1.33008 2.54492C1.26237 2.3418 1.23698 2.11328 1.25391 1.85938C1.23698 1.75781 1.23698 1.64779 1.25391 1.5293C1.28776 1.39388 1.31315 1.27539 1.33008 1.17383C1.36393 1.07227 1.40625 0.96224 1.45703 0.84375C1.50781 0.72526 1.55859 0.623698 1.60938 0.539062C1.94792 0.928385 2.31185 1.29232 2.70117 1.63086C3.10742 1.9694 3.54753 2.25716 4.02148 2.49414C4.49544 2.73112 4.98633 2.92578 5.49414 3.07812C6.00195 3.21354 6.54362 3.28971 7.11914 3.30664C7.08529 3.27279 7.06836 3.23047 7.06836 3.17969C7.08529 3.11198 7.08529 3.0612 7.06836 3.02734C7.05143 2.97656 7.04297 2.92578 7.04297 2.875C7.04297 2.80729 7.03451 2.75651 7.01758 2.72266C7.03451 2.33333 7.11068 1.98633 7.24609 1.68164C7.38151 1.36003 7.56771 1.08073 7.80469 0.84375C8.05859 0.589844 8.34635 0.395182 8.66797 0.259766C8.98958 0.124349 9.33659 0.0481771 9.70898 0.03125C9.89518 0.0481771 10.0814 0.0735677 10.2676 0.107422C10.4538 0.141276 10.623 0.200521 10.7754 0.285156C10.9447 0.352865 11.1055 0.4375 11.2578 0.539062C11.4102 0.640625 11.5371 0.759115 11.6387 0.894531C11.8079 0.860677 11.9603 0.826823 12.0957 0.792969C12.2311 0.759115 12.375 0.708333 12.5273 0.640625C12.6797 0.572917 12.8151 0.513672 12.9336 0.462891C13.069 0.395182 13.2129 0.31901 13.3652 0.234375C13.2975 0.403646 13.2298 0.55599 13.1621 0.691406C13.0944 0.826823 13.0013 0.96224 12.8828 1.09766C12.7812 1.21615 12.6712 1.32617 12.5527 1.42773C12.4512 1.5293 12.3242 1.63086 12.1719 1.73242C12.3073 1.69857 12.4342 1.67318 12.5527 1.65625C12.6882 1.63932 12.8236 1.61393 12.959 1.58008C13.0944 1.5293 13.2214 1.48698 13.3398 1.45312C13.4583 1.41927 13.5853 1.36003 13.7207 1.27539C13.6191 1.42773 13.5176 1.56315 13.416 1.68164C13.3314 1.80013 13.2214 1.92708 13.0859 2.0625C12.9674 2.18099 12.849 2.29102 12.7305 2.39258C12.6289 2.47721 12.502 2.57878 12.3496 2.69727L12.375 2.67188Z"
                                                              fill="currentColor"></path>
                                                    </svg>
                                                </a></li>
                                            <li class="social__share--list"><a class="social__share--link"
                                                                               data-bs-toggle="modal"
                                                                               href="https://www.instagram.com"><span>اینستاگرام</span>
                                                    <svg fill="none" height="17" viewbox="0 0 17 17" width="17"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.27881 4.20703C10.4937 4.20703 12.3218 6.03516 12.3218 8.25C12.3218 10.5 10.4937 12.293 8.27881 12.293C6.02881 12.293 4.23584 10.5 4.23584 8.25C4.23584 6.03516 6.02881 4.20703 8.27881 4.20703ZM8.27881 10.8867C9.72021 10.8867 10.8804 9.72656 10.8804 8.25C10.8804 6.80859 9.72021 5.64844 8.27881 5.64844C6.80225 5.64844 5.64209 6.80859 5.64209 8.25C5.64209 9.72656 6.8374 10.8867 8.27881 10.8867ZM13.4116 4.06641C13.4116 4.59375 12.9897 5.01562 12.4624 5.01562C11.9351 5.01562 11.5132 4.59375 11.5132 4.06641C11.5132 3.53906 11.9351 3.11719 12.4624 3.11719C12.9897 3.11719 13.4116 3.53906 13.4116 4.06641ZM16.0835 5.01562C16.1538 6.31641 16.1538 10.2188 16.0835 11.5195C16.0132 12.7852 15.7319 13.875 14.8179 14.8242C13.9038 15.7383 12.7788 16.0195 11.5132 16.0898C10.2124 16.1602 6.31006 16.1602 5.00928 16.0898C3.74365 16.0195 2.65381 15.7383 1.70459 14.8242C0.790527 13.875 0.509277 12.7852 0.438965 11.5195C0.368652 10.2188 0.368652 6.31641 0.438965 5.01562C0.509277 3.75 0.790527 2.625 1.70459 1.71094C2.65381 0.796875 3.74365 0.515625 5.00928 0.445312C6.31006 0.375 10.2124 0.375 11.5132 0.445312C12.7788 0.515625 13.9038 0.796875 14.8179 1.71094C15.7319 2.625 16.0132 3.75 16.0835 5.01562ZM14.396 12.8906C14.8179 11.8711 14.7124 9.41016 14.7124 8.25C14.7124 7.125 14.8179 4.66406 14.396 3.60938C14.1147 2.94141 13.5874 2.37891 12.9194 2.13281C11.8647 1.71094 9.40381 1.81641 8.27881 1.81641C7.11865 1.81641 4.65771 1.71094 3.63818 2.13281C2.93506 2.41406 2.40771 2.94141 2.12646 3.60938C1.70459 4.66406 1.81006 7.125 1.81006 8.25C1.81006 9.41016 1.70459 11.8711 2.12646 12.8906C2.40771 13.5938 2.93506 14.1211 3.63818 14.4023C4.65771 14.8242 7.11865 14.7188 8.27881 14.7188C9.40381 14.7188 11.8647 14.8242 12.9194 14.4023C13.5874 14.1211 14.1499 13.5938 14.396 12.8906Z"
                                                              fill="currentColor"></path>
                                                    </svg>
                                                </a></li>
                                            <li class="social__share--list"><a class="social__share--link"
                                                                               data-bs-toggle="modal"
                                                                               href="https://www.pinterest.com"><span>پانترست</span>
                                                    <svg fill="none" height="13" viewbox="0 0 11 13" width="11"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z"
                                                              fill="currentColor"></path>
                                                    </svg>
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing__details--content__step"><h2 class="listing__details--title mb-25">خانه
                                    <?php echo $title ?></h2>
                                <div class="listing__details--price__id d-flex align-items-center">
                                    <div class="listing__details--price d-flex"><span
                                                class="listing__details--price__new"><?php echo number_format($rent);
                                            echo " تومان" ?></span></div>
                                    <p class="listing__details--location__text">
                                        <svg fill="none" height="17" viewbox="0 0 11 17" width="11"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                  fill="#FA4B4A"></path>
                                        </svg>
                                        <?php echo $address ?>
                                    </p>
                                </div>
                            </div>
                            <div class="listing__details--main__content">
                                <div class="listing__details--content__step mb-80"><h3
                                            class="listing__details--content__title">توضیحات:</h3>
                                    <p class="listing__details--content__desc"><?php echo $description ?></p>
                                    <div class="apartment__info listing__d--info">
                                    </div>
                                </div>
                                <div class="listing__details--content__step properties__info mb-80"><h3
                                            class="listing__details--content__title mb-40">جزئیات ویژگی:</h3>
                                    <ul class="properties__details--info__wrapper d-flex">
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">اجاره ماهانه:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo number_format($rent);
                                                echo " تومان" ?>ر</span></li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">ودیعه:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo number_format($rent);
                                                echo " تومان" ?></span></li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">اندازه منطقه:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo $area ?></span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">دسته بندی:</span> <span
                                                    class="properties__details--info__subtitle">
                                            <?php
                                            switch ($category) {
                                                case 0:
                                                    echo "ویلایی";
                                                    break;
                                                case 1:
                                                    echo "دفتر";
                                                    break;
                                                case 2:
                                                    echo "خانه";
                                                    break;
                                                case 3:
                                                    echo "آپارتمان";
                                                    break;
                                            }
                                            ?>
                                        </span></li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">اتاق ها:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo $roomsQuantity ?></span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">منطقه:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo $location ?></span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">تعداد طبقات:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo $floorsQuantity ?></span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">طبقه:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo $floorNumber ?></span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">شماره تلفن:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo $phoneNumber ?></span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between"><span
                                                    class="properties__details--info__title">سال ساخت:</span> <span
                                                    class="properties__details--info__subtitle"><?php echo $manufactureYear ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing__details--content__step properties__amenities mb-80">
                                    <h3 class="listing__details--content__title mb-40">املاک امکانات رفاهی</h3>
                                    <div class="properties__amenities--wrapper d-flex">
                                        <ul class="properties__amenities--step">
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">تهویه مطبوع</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">مایکروویو</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">گرمایش مرکزی</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">واشر</span></li>
                                        </ul>
                                        <ul class="properties__amenities--step">
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">لباسشویی</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">دوش در فضای باز</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">استخر شنا</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">فای</span></li>
                                        </ul>
                                        <ul class="properties__amenities--step">
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">پوشش پنجره</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">یخچال</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">سیستم هشدار</span></li>
                                            <li class="properties__amenities--list d-flex align-items-center"><span
                                                        class="properties__amenities--mark__icon"><svg fill="none"
                                                                                                       height="15"
                                                                                                       viewbox="0 0 16 15"
                                                                                                       width="16"
                                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                                d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z"
                                                                fill="currentColor"></path></svg> </span><span
                                                        class="properties__amenities--text">پوشش های پنجره</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="listing__details--review d-flex">
                                    <div class="details__review--box">
                                    </div>
                                    <div class="details__review--wrapper d-flex">
                                        <div class="details__review--step">
                                        </div>
                                        <div class="details__review--step">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="listing__widget">
                        <div class="widget__admin--profile text-center mb-30">
                            <div class="admin__profile--content"><h3 class="admin__profile--name">ملک من</h3>
                                <h5
                                        class="admin__profile--subtitle">کارگزار املاک و مستغلات</h5>
                                <ul class="admin__profile--rating d-flex justify-content-center">
                                    <li><span><svg fill="none" height="15" viewbox="0 0 16 15" width="16"
                                                   xmlns="http://www.w3.org/2000/svg"><path
                                                        d="M14.4375 5.45312L10.4453 4.87891L8.64062 1.24219C8.33984 0.613281 7.41016 0.585938 7.08203 1.24219L5.30469 4.87891L1.28516 5.45312C0.574219 5.5625 0.300781 6.4375 0.820312 6.95703L3.69141 9.77344L3.00781 13.7383C2.89844 14.4492 3.66406 14.9961 4.29297 14.668L7.875 12.7812L11.4297 14.668C12.0586 14.9961 12.8242 14.4492 12.7148 13.7383L12.0312 9.77344L14.9023 6.95703C15.4219 6.4375 15.1484 5.5625 14.4375 5.45312ZM10.6094 9.30859L11.2656 13.082L7.875 11.3047L4.45703 13.082L5.11328 9.30859L2.35156 6.62891L6.15234 6.08203L7.875 2.63672L9.57031 6.08203L13.3711 6.62891L10.6094 9.30859Z"
                                                        fill="currentColor"></path></svg></span></li>
                                    <li><span><svg fill="none" height="15" viewbox="0 0 16 15" width="16"
                                                   xmlns="http://www.w3.org/2000/svg"><path
                                                        d="M14.4375 5.45312L10.4453 4.87891L8.64062 1.24219C8.33984 0.613281 7.41016 0.585938 7.08203 1.24219L5.30469 4.87891L1.28516 5.45312C0.574219 5.5625 0.300781 6.4375 0.820312 6.95703L3.69141 9.77344L3.00781 13.7383C2.89844 14.4492 3.66406 14.9961 4.29297 14.668L7.875 12.7812L11.4297 14.668C12.0586 14.9961 12.8242 14.4492 12.7148 13.7383L12.0312 9.77344L14.9023 6.95703C15.4219 6.4375 15.1484 5.5625 14.4375 5.45312ZM10.6094 9.30859L11.2656 13.082L7.875 11.3047L4.45703 13.082L5.11328 9.30859L2.35156 6.62891L6.15234 6.08203L7.875 2.63672L9.57031 6.08203L13.3711 6.62891L10.6094 9.30859Z"
                                                        fill="currentColor"></path></svg></span></li>
                                    <li><span><svg fill="none" height="15" viewbox="0 0 16 15" width="16"
                                                   xmlns="http://www.w3.org/2000/svg"><path
                                                        d="M14.4375 5.45312L10.4453 4.87891L8.64062 1.24219C8.33984 0.613281 7.41016 0.585938 7.08203 1.24219L5.30469 4.87891L1.28516 5.45312C0.574219 5.5625 0.300781 6.4375 0.820312 6.95703L3.69141 9.77344L3.00781 13.7383C2.89844 14.4492 3.66406 14.9961 4.29297 14.668L7.875 12.7812L11.4297 14.668C12.0586 14.9961 12.8242 14.4492 12.7148 13.7383L12.0312 9.77344L14.9023 6.95703C15.4219 6.4375 15.1484 5.5625 14.4375 5.45312ZM10.6094 9.30859L11.2656 13.082L7.875 11.3047L4.45703 13.082L5.11328 9.30859L2.35156 6.62891L6.15234 6.08203L7.875 2.63672L9.57031 6.08203L13.3711 6.62891L10.6094 9.30859Z"
                                                        fill="currentColor"></path></svg></span></li>
                                    <li><span><svg fill="none" height="15" viewbox="0 0 16 15" width="16"
                                                   xmlns="http://www.w3.org/2000/svg"><path
                                                        d="M14.4375 5.45312L10.4453 4.87891L8.64062 1.24219C8.33984 0.613281 7.41016 0.585938 7.08203 1.24219L5.30469 4.87891L1.28516 5.45312C0.574219 5.5625 0.300781 6.4375 0.820312 6.95703L3.69141 9.77344L3.00781 13.7383C2.89844 14.4492 3.66406 14.9961 4.29297 14.668L7.875 12.7812L11.4297 14.668C12.0586 14.9961 12.8242 14.4492 12.7148 13.7383L12.0312 9.77344L14.9023 6.95703C15.4219 6.4375 15.1484 5.5625 14.4375 5.45312ZM10.6094 9.30859L11.2656 13.082L7.875 11.3047L4.45703 13.082L5.11328 9.30859L2.35156 6.62891L6.15234 6.08203L7.875 2.63672L9.57031 6.08203L13.3711 6.62891L10.6094 9.30859Z"
                                                        fill="currentColor"></path></svg></span></li>
                                    <li><span><svg fill="none" height="15" viewbox="0 0 16 15" width="16"
                                                   xmlns="http://www.w3.org/2000/svg"><path
                                                        d="M14.4375 5.45312L10.4453 4.87891L8.64062 1.24219C8.33984 0.613281 7.41016 0.585938 7.08203 1.24219L5.30469 4.87891L1.28516 5.45312C0.574219 5.5625 0.300781 6.4375 0.820312 6.95703L3.69141 9.77344L3.00781 13.7383C2.89844 14.4492 3.66406 14.9961 4.29297 14.668L7.875 12.7812L11.4297 14.668C12.0586 14.9961 12.8242 14.4492 12.7148 13.7383L12.0312 9.77344L14.9023 6.95703C15.4219 6.4375 15.1484 5.5625 14.4375 5.45312ZM10.6094 9.30859L11.2656 13.082L7.875 11.3047L4.45703 13.082L5.11328 9.30859L2.35156 6.62891L6.15234 6.08203L7.875 2.63672L9.57031 6.08203L13.3711 6.62891L10.6094 9.30859Z"
                                                        fill="currentColor"></path></svg></span></li>
                                </ul>
                                <p class="admin__profile--desc">مجری تمامی امور املاکی با هدف از بین بردن دغدغه های مردم
                                    و ساده کردن ارتباط میان مستاجر و مالک</p><a class="admin__profile--email"
                                                                                href="mailto:arayrento@gmail.com">arayrento@gmail.com</a>
                                <ul class="profile__social d-flex align-items-center justify-content-center">
                                    <li class="profile__social--list"><a class="profile__social--icon"
                                                                         href="https://www.facebook.com"
                                                                         target="_blank">
                                            <svg fill="none" height="17" viewbox="0 0 9 15" width="10"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">فیس بوک</span></a></li>
                                    <li class="profile__social--list"><a class="profile__social--icon"
                                                                         href="https://twitter.com" target="_blank">
                                            <svg class="bi bi-twitter-x" fill="currentColor" height="16"
                                                 viewbox="0 0 16 16"
                                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
                                            </svg>
                                            <span class="visually-hidden">توییتر</span></a></li>
                                    <li class="profile__social--list"><a class="profile__social--icon"
                                                                         href="https://www.instagram.com"
                                                                         target="_blank">
                                            <svg fill="none" height="16" viewbox="0 0 14 13" width="16"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">اینستاگرام</span></a></li>
                                    <li class="profile__social--list"><a class="profile__social--icon"
                                                                         href="https://www.pinterest.com"
                                                                         target="_blank">
                                            <svg fill="none" height="16" viewbox="0 0 15 18" width="14"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">پانترست</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget__step mb-30"><h2 class="widget__step--title">تصویر آگهی</h2>
                            <div class="widget__featured--properties">
                                <div class="widget__featured--properties__thumbnail position-relative"><img
                                            alt="img"
                                            src="<?php echo "../" . htmlspecialchars($imagePath)?>">
                                </div>
                                <div class="widget__featured--properties__content">
                                    <div class="widget__featured--properties__content--top d-flex align-items-center justify-content-between">
                                        <div class="widget__featured--properties__author"><img alt="img"
                                                                                               src="assets/img/property/properties-author2.png">
                                        </div>
                                        <ul class="widget__featured--properties__share d-flex">
                                            <li class="widget__featured--properties__share--list position-relative">
                                                <a
                                                        aria-expanded="false" aria-label="share button"
                                                        class="widget__featured--properties__share--btn"
                                                        data-bs-toggle="dropdown" href="listing-list.php">
                                                    <svg fill="none" height="18" viewbox="0 0 16 18" width="16"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.5111 11.2118C11.5684 11.2118 10.7529 11.6195 10.1923 12.282L5.86064 10.0396C6.06451 9.63191 6.16636 9.17334 6.16636 8.68916C6.16636 8.20498 6.03892 7.74642 5.86064 7.33868L10.1923 5.09633C10.7529 5.75879 11.5938 6.16652 12.5111 6.16652C14.1929 6.16652 15.5944 4.79065 15.5944 3.08326C15.5944 1.40149 14.2185 0 12.5111 0C10.8038 0.000355502 9.42786 1.45268 9.42786 3.13445C9.42786 3.54218 9.50429 3.89892 9.63173 4.25565L5.2236 6.52344C4.66302 5.96286 3.89856 5.63152 3.05765 5.63152C1.40149 5.63152 0 7.03301 0 8.71478C0 10.3966 1.37587 11.798 3.08326 11.798C3.92413 11.798 4.6886 11.4667 5.24922 10.9061L9.65734 13.1739C9.5299 13.5306 9.45347 13.8874 9.45347 14.2951C9.45347 15.9769 10.8293 17.3784 12.5367 17.3784C14.2439 17.3784 15.62 16.0025 15.62 14.2951C15.6196 12.5879 14.1928 11.2118 12.5112 11.2118L12.5111 11.2118ZM12.5111 1.09595C13.6323 1.09595 14.575 2.01325 14.575 3.15984C14.575 4.28104 13.6577 5.22374 12.5111 5.22374C11.3644 5.22391 10.447 4.28099 10.447 3.13441C10.447 2.01321 11.3644 1.0959 12.5111 1.0959V1.09595ZM3.08324 10.7786C1.96204 10.7786 1.01934 9.86132 1.01934 8.71474C1.01934 7.59354 1.93665 6.65084 3.08324 6.65084C4.20444 6.65084 5.14714 7.56815 5.14714 8.71474C5.14731 9.83593 4.20439 10.7786 3.08324 10.7786ZM12.5111 16.3334C11.3899 16.3334 10.4472 15.4161 10.4472 14.2695C10.4472 13.123 11.3645 12.2056 12.5111 12.2056C13.6577 12.2056 14.575 13.123 14.575 14.2695C14.575 15.4161 13.6321 16.3334 12.5111 16.3334Z"
                                                              fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">به اشتراک بگذارید</span></a>
                                                <ul class="dropdown-menu share__dropdown--menu" style="margin:0">
                                                    <li class="social__share--list"><a class="social__share--link"
                                                                                       data-bs-toggle="modal"
                                                                                       href="https://www.facebook.com/"><span>فیس بوک</span>
                                                            <svg fill="none" height="15" viewbox="0 0 7 14"
                                                                 width="8"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z"
                                                                      fill="currentColor" fill-opacity="1"></path>
                                                            </svg>
                                                        </a></li>
                                                    <li class="social__share--list"><a class="social__share--link"
                                                                                       data-bs-toggle="modal"
                                                                                       href="listing-list.php"><span>توییتر</span>
                                                            <svg fill="none" height="12" viewbox="0 0 14 11"
                                                                 width="15"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12.375 2.67188C12.375 2.70573 12.375 2.73958 12.375 2.77344C12.3919 2.79036 12.3919 2.81576 12.375 2.84961C12.375 2.88346 12.375 2.91732 12.375 2.95117C12.3919 2.9681 12.3919 2.99349 12.375 3.02734C12.3919 3.89062 12.2311 4.7793 11.8926 5.69336C11.554 6.60742 11.0632 7.42839 10.4199 8.15625C9.79362 8.86719 9.00651 9.45964 8.05859 9.93359C7.11068 10.3906 6.02734 10.6107 4.80859 10.5938C4.41927 10.6107 4.04688 10.5938 3.69141 10.543C3.33594 10.4753 2.98047 10.3991 2.625 10.3145C2.26953 10.2129 1.93099 10.0859 1.60938 9.93359C1.30469 9.76432 1 9.59505 0.695312 9.42578C0.763021 9.40885 0.813802 9.40885 0.847656 9.42578C0.898438 9.44271 0.957682 9.45117 1.02539 9.45117C1.0931 9.43424 1.14388 9.43424 1.17773 9.45117C1.22852 9.45117 1.28776 9.44271 1.35547 9.42578C1.66016 9.44271 1.96484 9.42578 2.26953 9.375C2.57422 9.30729 2.86198 9.23112 3.13281 9.14648C3.40365 9.06185 3.66602 8.94336 3.91992 8.79102C4.19076 8.63867 4.4362 8.47786 4.65625 8.30859C4.36849 8.29167 4.08919 8.24089 3.81836 8.15625C3.54753 8.07161 3.30208 7.94466 3.08203 7.77539C2.87891 7.58919 2.69271 7.39453 2.52344 7.19141C2.37109 6.97135 2.26107 6.71745 2.19336 6.42969C2.21029 6.46354 2.24414 6.48047 2.29492 6.48047C2.3457 6.46354 2.38802 6.46354 2.42188 6.48047C2.45573 6.4974 2.49805 6.50586 2.54883 6.50586C2.59961 6.48893 2.63346 6.48893 2.65039 6.50586C2.73503 6.48893 2.80273 6.48893 2.85352 6.50586C2.9043 6.50586 2.96354 6.4974 3.03125 6.48047C3.09896 6.46354 3.1582 6.45508 3.20898 6.45508C3.25977 6.43815 3.31901 6.42122 3.38672 6.4043C3.0651 6.35352 2.77734 6.24349 2.52344 6.07422C2.26953 5.90495 2.04102 5.71029 1.83789 5.49023C1.65169 5.27018 1.50781 5.01628 1.40625 4.72852C1.30469 4.42383 1.24544 4.11914 1.22852 3.81445C1.24544 3.7806 1.24544 3.77214 1.22852 3.78906C1.24544 3.77214 1.24544 3.76367 1.22852 3.76367C1.22852 3.76367 1.23698 3.75521 1.25391 3.73828C1.32161 3.80599 1.40625 3.85677 1.50781 3.89062C1.60938 3.92448 1.70247 3.95833 1.78711 3.99219C1.88867 4.02604 1.9987 4.05143 2.11719 4.06836C2.23568 4.06836 2.33724 4.08529 2.42188 4.11914C2.26953 3.98372 2.10872 3.83984 1.93945 3.6875C1.78711 3.53516 1.66016 3.35742 1.55859 3.1543C1.47396 2.95117 1.39779 2.74805 1.33008 2.54492C1.26237 2.3418 1.23698 2.11328 1.25391 1.85938C1.23698 1.75781 1.23698 1.64779 1.25391 1.5293C1.28776 1.39388 1.31315 1.27539 1.33008 1.17383C1.36393 1.07227 1.40625 0.96224 1.45703 0.84375C1.50781 0.72526 1.55859 0.623698 1.60938 0.539062C1.94792 0.928385 2.31185 1.29232 2.70117 1.63086C3.10742 1.9694 3.54753 2.25716 4.02148 2.49414C4.49544 2.73112 4.98633 2.92578 5.49414 3.07812C6.00195 3.21354 6.54362 3.28971 7.11914 3.30664C7.08529 3.27279 7.06836 3.23047 7.06836 3.17969C7.08529 3.11198 7.08529 3.0612 7.06836 3.02734C7.05143 2.97656 7.04297 2.92578 7.04297 2.875C7.04297 2.80729 7.03451 2.75651 7.01758 2.72266C7.03451 2.33333 7.11068 1.98633 7.24609 1.68164C7.38151 1.36003 7.56771 1.08073 7.80469 0.84375C8.05859 0.589844 8.34635 0.395182 8.66797 0.259766C8.98958 0.124349 9.33659 0.0481771 9.70898 0.03125C9.89518 0.0481771 10.0814 0.0735677 10.2676 0.107422C10.4538 0.141276 10.623 0.200521 10.7754 0.285156C10.9447 0.352865 11.1055 0.4375 11.2578 0.539062C11.4102 0.640625 11.5371 0.759115 11.6387 0.894531C11.8079 0.860677 11.9603 0.826823 12.0957 0.792969C12.2311 0.759115 12.375 0.708333 12.5273 0.640625C12.6797 0.572917 12.8151 0.513672 12.9336 0.462891C13.069 0.395182 13.2129 0.31901 13.3652 0.234375C13.2975 0.403646 13.2298 0.55599 13.1621 0.691406C13.0944 0.826823 13.0013 0.96224 12.8828 1.09766C12.7812 1.21615 12.6712 1.32617 12.5527 1.42773C12.4512 1.5293 12.3242 1.63086 12.1719 1.73242C12.3073 1.69857 12.4342 1.67318 12.5527 1.65625C12.6882 1.63932 12.8236 1.61393 12.959 1.58008C13.0944 1.5293 13.2214 1.48698 13.3398 1.45312C13.4583 1.41927 13.5853 1.36003 13.7207 1.27539C13.6191 1.42773 13.5176 1.56315 13.416 1.68164C13.3314 1.80013 13.2214 1.92708 13.0859 2.0625C12.9674 2.18099 12.849 2.29102 12.7305 2.39258C12.6289 2.47721 12.502 2.57878 12.3496 2.69727L12.375 2.67188Z"
                                                                      fill="currentColor"></path>
                                                            </svg>
                                                        </a></li>
                                                    <li class="social__share--list"><a class="social__share--link"
                                                                                       data-bs-toggle="modal"
                                                                                       href="https://www.instagram.com"><span>اینستاگرام</span>
                                                            <svg fill="none" height="17" viewbox="0 0 17 17"
                                                                 width="17"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.27881 4.20703C10.4937 4.20703 12.3218 6.03516 12.3218 8.25C12.3218 10.5 10.4937 12.293 8.27881 12.293C6.02881 12.293 4.23584 10.5 4.23584 8.25C4.23584 6.03516 6.02881 4.20703 8.27881 4.20703ZM8.27881 10.8867C9.72021 10.8867 10.8804 9.72656 10.8804 8.25C10.8804 6.80859 9.72021 5.64844 8.27881 5.64844C6.80225 5.64844 5.64209 6.80859 5.64209 8.25C5.64209 9.72656 6.8374 10.8867 8.27881 10.8867ZM13.4116 4.06641C13.4116 4.59375 12.9897 5.01562 12.4624 5.01562C11.9351 5.01562 11.5132 4.59375 11.5132 4.06641C11.5132 3.53906 11.9351 3.11719 12.4624 3.11719C12.9897 3.11719 13.4116 3.53906 13.4116 4.06641ZM16.0835 5.01562C16.1538 6.31641 16.1538 10.2188 16.0835 11.5195C16.0132 12.7852 15.7319 13.875 14.8179 14.8242C13.9038 15.7383 12.7788 16.0195 11.5132 16.0898C10.2124 16.1602 6.31006 16.1602 5.00928 16.0898C3.74365 16.0195 2.65381 15.7383 1.70459 14.8242C0.790527 13.875 0.509277 12.7852 0.438965 11.5195C0.368652 10.2188 0.368652 6.31641 0.438965 5.01562C0.509277 3.75 0.790527 2.625 1.70459 1.71094C2.65381 0.796875 3.74365 0.515625 5.00928 0.445312C6.31006 0.375 10.2124 0.375 11.5132 0.445312C12.7788 0.515625 13.9038 0.796875 14.8179 1.71094C15.7319 2.625 16.0132 3.75 16.0835 5.01562ZM14.396 12.8906C14.8179 11.8711 14.7124 9.41016 14.7124 8.25C14.7124 7.125 14.8179 4.66406 14.396 3.60938C14.1147 2.94141 13.5874 2.37891 12.9194 2.13281C11.8647 1.71094 9.40381 1.81641 8.27881 1.81641C7.11865 1.81641 4.65771 1.71094 3.63818 2.13281C2.93506 2.41406 2.40771 2.94141 2.12646 3.60938C1.70459 4.66406 1.81006 7.125 1.81006 8.25C1.81006 9.41016 1.70459 11.8711 2.12646 12.8906C2.40771 13.5938 2.93506 14.1211 3.63818 14.4023C4.65771 14.8242 7.11865 14.7188 8.27881 14.7188C9.40381 14.7188 11.8647 14.8242 12.9194 14.4023C13.5874 14.1211 14.1499 13.5938 14.396 12.8906Z"
                                                                      fill="currentColor"></path>
                                                            </svg>
                                                        </a></li>
                                                    <li class="social__share--list"><a class="social__share--link"
                                                                                       data-bs-toggle="modal"
                                                                                       href="https://www.pinterest.com"><span>پانترست</span>
                                                            <svg fill="none" height="13" viewbox="0 0 11 13"
                                                                 width="11"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z"
                                                                      fill="currentColor"></path>
                                                            </svg>
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="widget__featured--properties__share--list"><a
                                                        class="widget__featured--properties__share--btn"
                                                        href="listing-list.php">
                                                    <svg fill="none" height="16" viewbox="0 0 16 16" width="16"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.855 0C5.77166 0 3.77371 0.82758 2.30076 2.30076C0.82758 3.77375 0 5.77171 0 7.855C0 9.9383 0.82758 11.9363 2.30076 13.4092C3.77375 14.8824 5.7717 15.71 7.855 15.71C9.9383 15.71 11.9363 14.8824 13.4092 13.4092C14.8824 11.9363 15.71 9.9383 15.71 7.855C15.7073 5.77252 14.8789 3.77621 13.4062 2.30395C11.9338 0.831315 9.93743 0.00286936 7.85518 0.000182413L7.855 0ZM7.855 14.1388C6.18845 14.1388 4.59008 13.4767 3.41151 12.2983C2.23313 11.1197 1.571 9.52132 1.571 7.85482C1.571 6.18832 2.23313 4.5899 3.41151 3.41133C4.59008 2.23295 6.1885 1.57082 7.855 1.57082C9.5215 1.57082 11.1199 2.23295 12.2985 3.41133C13.4769 4.5899 14.139 6.18832 14.139 7.85482C14.1376 9.521 13.4751 11.1187 12.2969 12.2967C11.1189 13.4749 9.52118 14.1374 7.855 14.1388Z"
                                                              fill="currentColor"></path>
                                                        <path d="M11.5835 7.06853H8.64034V4.12541C8.64034 3.84469 8.49072 3.58552 8.24772 3.44511C8.00471 3.30475 7.70514 3.30475 7.46213 3.44511C7.21912 3.58547 7.06951 3.84467 7.06951 4.12541V7.06853H4.12639C3.84567 7.06853 3.58649 7.21815 3.44609 7.46115C3.30573 7.70416 3.30573 8.00373 3.44609 8.24674C3.58645 8.48975 3.84564 8.63936 4.12639 8.63936H7.06951V11.5825C7.06951 11.8632 7.21912 12.1224 7.46213 12.2628C7.70513 12.4031 8.00471 12.4031 8.24772 12.2628C8.49072 12.1224 8.64034 11.8632 8.64034 11.5825V8.63936H11.5835C11.8642 8.63936 12.1234 8.48975 12.2638 8.24674C12.4041 8.00374 12.4041 7.70416 12.2638 7.46115C12.1234 7.21815 11.8642 7.06853 11.5835 7.06853Z"
                                                              fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">فهرست کردن</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget__step"><h2 class="widget__step--title">آخرین آگهی ها</h2>
                            <div class="widget__featured">
                                <?php
                                global $conn;
                                include "../ArayRentoModel/ArayRentoConnectDB.php";

                                $advertisementData = [];
                                $toaster_messages = [];

                                try {
                                    $stmt = $conn->prepare("SELECT id_rento_advertisements_aray, title_rento_advertisements_aray, rent_rento_advertisements_aray from aray_rento_advertisements_aray ORDER BY id_rento_advertisements_aray DESC LIMIT 3");
                                    $stmt->execute();
                                    $advertisementData = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    if (empty($advertisementData)) {
                                        $toaster_messages[] = "toastr.error('هیچ آگهی پیدا نشد.');";
                                    }
                                } catch (PDOException $e) {
                                    $toaster_messages[] = "toastr.error('خطا در بارگذاری آگهی: " . $e->getMessage() . "');";
                                }

                                foreach ($toaster_messages as $message) {
                                    echo "<script>$message</script>";
                                }

                                $groupedAdvertisements = [];
                                foreach ($advertisementData as $ad) {
                                    $advertisementId = $ad['id_rento_advertisements_aray'];

                                    if (!isset($groupedAdvertisements[$advertisementId])) {
                                        $groupedAdvertisements[$advertisementId] = $ad;
                                        $groupedAdvertisements[$advertisementId]['images'] = [];
                                    }

                                    if (!empty($ad['url_rento_imeges_aray'])) {
                                        $groupedAdvertisements[$advertisementId]['images'][] = $ad['url_rento_imeges_aray'];
                                    }
                                }
                                foreach ($groupedAdvertisements as $ad) {
                                    $title = $ad['title_rento_advertisements_aray'];
                                    $rent = $ad['rent_rento_advertisements_aray'];
                                    ?>
                                    <div class="widget__featured--items d-flex">
                                        <div class="widget__featured--thumb"><a class="widget__featured--thumb__link"
                                                                                href="listing-list.php"><img
                                                        alt="img"
                                                        class="widget__featured--media"
                                                        src="assets/img/property/featured1.jpg"></a>
                                        </div>
                                        <div class="widget__featured--content"><h3 class="widget__featured--title"><a
                                                        href="listing-list.php"><?php echo $title ?></a></h3>
                                            <span
                                                    class="widget__featured--price"><?php echo number_format($rent);
                                                echo " تومان" ?></span></div>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer footer__section">
        <?php
        include "include/layout/footer.php"
        ?>
    </footer>
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