<?php
include "../../ArayRentoModel/ArayRentoConnectDB.php";
include 'jdf-master/jdf.php';

$toaster_messages = [];


if (isset($_POST['btnSubmit'])) {
    global $conn;
    $userId = $_SESSION["userId"];
    $title = htmlspecialchars(trim($_POST['title']));
    $desc = htmlspecialchars(trim($_POST['description']));
    $category = htmlspecialchars(trim($_POST['category']));
    $documentStatus = htmlspecialchars(trim($_POST['documentStatus']));
    $rent = htmlspecialchars(trim($_POST['rent']));
    $deposit = htmlspecialchars(trim($_POST['deposit']));
    $locationId = htmlspecialchars(trim($_POST['locationId']));
    $roomsQuantity = htmlspecialchars(trim($_POST['roomsQuantity']));
    $area = htmlspecialchars(trim($_POST['area']));
    $floorsQuantity = htmlspecialchars(trim($_POST['floorsQuantity']));
    $floorNumber = htmlspecialchars(trim($_POST['floorNumber']));
    $phoneNumber = htmlspecialchars(trim($_POST['phoneNumber']));
    $manufactureYear = htmlspecialchars(trim($_POST['manufactureYear']));
    $address = htmlspecialchars(trim($_POST['address']));
    $facilities = isset($_POST['amenities']) ? implode(", ", $_POST['amenities']) : "";
    date_default_timezone_set('Asia/Tehran');
    $createdAt = jdate("Y/m/d/");
    $createdHour = jdate("H:i:s");
    $status = 1;

    if (empty($title) || empty($desc) || empty($category) || empty($documentStatus) || empty($locationId) || empty($roomsQuantity) || empty($area) || empty($floorsQuantity) || empty($floorNumber) || empty($phoneNumber) || empty($manufactureYear) || empty($address)) {
        $toaster_messages[] = "toastr.error('لطفاً تمام فیلدها را پر کنید.');";
    }

    if (!preg_match('/^\d{11}$/', $phoneNumber)) {
        $toaster_messages[] = "toastr.error('شماره تلفن باید ۱۱ رقم باشد.');";
    }

    if (empty($toaster_messages)) {
        $stmt = $conn->prepare("INSERT INTO aray_rento_advertisements_aray (user_id_rento_advertisements_aray, title_rento_advertisements_aray, desc_rento_advertisements_aray, category_rento_advertisements_aray, document_status_rento_advertisements_aray, rent_rento_advertisements_aray, deposit_rento_advertisements_aray, location_rento_advertisements_aray, rooms_quantity_rento_advertisements_aray, area_rento_advertisements_aray, floors_quantity_rento_advertisements_aray, floor_number_rento_advertisements_aray, phone_numbre_rento_advertisements_aray, manufacture_year_rento_advertisements_aray, address_rento_advertisements_aray, facilities_rento_advertisements_aray , creation_date_rento_advertisements_aray , creation_hour_rento_advertisements_aray , status_rento_advertisements_aray) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ? , ? , ? , ?)");
        $stmt->bindValue(1, $userId, PDO::PARAM_STR);
        $stmt->bindValue(2, $title, PDO::PARAM_STR);
        $stmt->bindValue(3, $desc, PDO::PARAM_STR);
        $stmt->bindValue(4, $category, PDO::PARAM_STR);
        $stmt->bindValue(5, $documentStatus, PDO::PARAM_STR);
        $stmt->bindValue(6, $rent, PDO::PARAM_INT);
        $stmt->bindValue(7, $deposit, PDO::PARAM_INT);
        $stmt->bindValue(8, $locationId, PDO::PARAM_INT);
        $stmt->bindValue(9, $roomsQuantity, PDO::PARAM_INT);
        $stmt->bindValue(10, $area, PDO::PARAM_INT);
        $stmt->bindValue(11, $floorsQuantity, PDO::PARAM_INT);
        $stmt->bindValue(12, $floorNumber, PDO::PARAM_INT);
        $stmt->bindValue(13, $phoneNumber, PDO::PARAM_STR);
        $stmt->bindValue(14, $manufactureYear, PDO::PARAM_INT);
        $stmt->bindValue(15, $address, PDO::PARAM_STR);
        $stmt->bindValue(16, $facilities, PDO::PARAM_STR);
        $stmt->bindValue(17, $createdAt, PDO::PARAM_STR);
        $stmt->bindValue(18, $createdHour, PDO::PARAM_STR);
        $stmt->bindValue(19, $status, PDO::PARAM_STR);

        if ($stmt->execute()) {

            $lastAdId = $conn->lastInsertId();

            if (!empty($_FILES['images']['name'][0])) {

                $uploadDir = '../../ArayRentoController/admin/uploads/';


                $dbPath = 'ArayRentoController/admin/uploads/';

                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
                    if (is_uploaded_file($tmpName)) {
                        $mimeType = mime_content_type($tmpName);
                        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

                        if (in_array($mimeType, $allowedTypes)) {
                            $fileExtension = pathinfo($_FILES['images']['name'][$index], PATHINFO_EXTENSION);
                            $fileName = uniqid('img_') . '.' . $fileExtension;


                            $destination = $uploadDir . $fileName;

                            if (move_uploaded_file($tmpName, $destination)) {

                                $imgStmt = $conn->prepare("INSERT INTO aray_rento_imeges_aray (advertisement_id_rento_imeges_aray, url_rento_imeges_aray, image_type_rento_images_aray) VALUES (?, ?, ?)");
                                $imgStmt->bindValue(1, $lastAdId, PDO::PARAM_INT);
                                $imgStmt->bindValue(2, $dbPath . $fileName, PDO::PARAM_STR); // فقط مسیر نسبی
                                $imgStmt->bindValue(3, $mimeType, PDO::PARAM_STR);

                                if (!$imgStmt->execute()) {
                                    $toaster_messages[] = "toastr.error('خطا در ذخیره مسیر تصویر در دیتابیس.');";
                                }
                            } else {
                                $toaster_messages[] = "toastr.error('خطا در انتقال تصویر به پوشه آپلود.');";
                            }
                        } else {
                            $toaster_messages[] = "toastr.error('نوع فایل تصویر مجاز نیست.');";
                        }
                    } else {
                        $toaster_messages[] = "toastr.error('خطا در دریافت فایل موقت تصویر.');";
                    }
                }
            }
            }

            $toaster_messages[] = "toastr.success('درخواست ثبت آگهی شما به ادمین ارسال شد.');";
            $toaster_messages[] = "setTimeout(function() { window.location.href = 'create-listing.php'; }, 2000);";
        } else {
            $toaster_messages[] = "toastr.error('خطا در ثبت آگهی! لطفاً دوباره تلاش کنید.');";
        }
    }

if (!empty($toaster_messages)) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {";
    foreach ($toaster_messages as $msg) {
        echo $msg;
    }
    echo "});
        </script>";
}