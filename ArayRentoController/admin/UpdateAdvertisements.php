<?php
include "../../ArayRentoModel/ArayRentoConnectDB.php";
include 'jdf-master/jdf.php';

$toaster_messages = [];

if (isset($_POST['btnSubmit'])) {
    global $conn;
    $adId = intval($_POST['id']);
    $title = isset($_POST['title']) ? htmlspecialchars(trim($_POST['title'])) : null;
    $desc = isset($_POST['description']) ? htmlspecialchars(trim($_POST['description'])) : null;
    $category = isset($_POST['category']) ? htmlspecialchars(trim($_POST['category'])) : null;
    $documentStatus = isset($_POST['documentStatus']) ? htmlspecialchars(trim($_POST['documentStatus'])) : null;
    $rent = isset($_POST['rent']) ? intval($_POST['rent']) : null;
    $deposit = isset($_POST['deposit']) ? intval($_POST['deposit']) : null;
    $locationId = isset($_POST['locationId']) ? intval($_POST['locationId']) : null;
    $roomsQuantity = isset($_POST['roomsQuantity']) ? intval($_POST['roomsQuantity']) : null;
    $area = isset($_POST['area']) ? intval($_POST['area']) : null;
    $floorsQuantity = isset($_POST['floorsQuantity']) ? intval($_POST['floorsQuantity']) : null;
    $floorNumber = isset($_POST['floorNumber']) ? intval($_POST['floorNumber']) : null;
    $phoneNumber = isset($_POST['phoneNumber']) ? htmlspecialchars(trim($_POST['phoneNumber'])) : null;
    $manufactureYear = isset($_POST['manufactureYear']) ? intval($_POST['manufactureYear']) : null;
    $address = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : null;
    $facilities = isset($_POST['amenities']) ? implode(", ", $_POST['amenities']) : null;

    if ($phoneNumber && !preg_match('/^\d{11}$/', $phoneNumber)) {
        $toaster_messages[] = "toastr.error('شماره تلفن باید ۱۱ رقم باشد.');";
    }

    $fieldsToUpdate = [];
    $params = [];
    if ($title !== null) { $fieldsToUpdate[] = "title_rento_advertisements_aray = ?"; $params[] = $title; }
    if ($desc !== null) { $fieldsToUpdate[] = "desc_rento_advertisements_aray = ?"; $params[] = $desc; }
    if ($category !== null) { $fieldsToUpdate[] = "category_rento_advertisements_aray = ?"; $params[] = $category; }
    if ($documentStatus !== null) { $fieldsToUpdate[] = "document_status_rento_advertisements_aray = ?"; $params[] = $documentStatus; }
    if ($rent !== null) { $fieldsToUpdate[] = "rent_rento_advertisements_aray = ?"; $params[] = $rent; }
    if ($deposit !== null) { $fieldsToUpdate[] = "deposit_rento_advertisements_aray = ?"; $params[] = $deposit; }
    if ($locationId !== null) { $fieldsToUpdate[] = "location_rento_advertisements_aray = ?"; $params[] = $locationId; }
    if ($roomsQuantity !== null) { $fieldsToUpdate[] = "rooms_quantity_rento_advertisements_aray = ?"; $params[] = $roomsQuantity; }
    if ($area !== null) { $fieldsToUpdate[] = "area_rento_advertisements_aray = ?"; $params[] = $area; }
    if ($floorsQuantity !== null) { $fieldsToUpdate[] = "floors_quantity_rento_advertisements_aray = ?"; $params[] = $floorsQuantity; }
    if ($floorNumber !== null) { $fieldsToUpdate[] = "floor_number_rento_advertisements_aray = ?"; $params[] = $floorNumber; }
    if ($phoneNumber !== null) { $fieldsToUpdate[] = "phone_numbre_rento_advertisements_aray = ?"; $params[] = $phoneNumber; }
    if ($manufactureYear !== null) { $fieldsToUpdate[] = "manufacture_year_rento_advertisements_aray = ?"; $params[] = $manufactureYear; }
    if ($address !== null) { $fieldsToUpdate[] = "address_rento_advertisements_aray = ?"; $params[] = $address; }
    if ($facilities !== null) { $fieldsToUpdate[] = "facilities_rento_advertisements_aray = ?"; $params[] = $facilities; }

    if (!empty($fieldsToUpdate)) {
        $sql = "UPDATE aray_rento_advertisements_aray SET " . implode(", ", $fieldsToUpdate) . " WHERE id_rento_advertisements_aray = ?";
        $params[] = $adId;
        $stmt = $conn->prepare($sql);
        foreach ($params as $index => $value) {
            $stmt->bindValue($index+1, $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }

        if ($stmt->execute()) {

            if (!empty($_FILES['images']['name'][0])) {
                $uploadDir = '../../ArayRentoController/admin/uploads/';
                $dbPath = 'ArayRentoController/admin/uploads/';
                if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

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
                                $imgStmt->bindValue(1, $adId, PDO::PARAM_INT);
                                $imgStmt->bindValue(2, $dbPath . $fileName, PDO::PARAM_STR);
                                $imgStmt->bindValue(3, $mimeType, PDO::PARAM_STR);
                                $imgStmt->execute();
                            }
                        }
                    }
                }
            }

            $toaster_messages[] = "toastr.success('آگهی با موفقیت ویرایش شد.');";
            $toaster_messages[] = "setTimeout(function() { window.location.href =advertisements-list.php'?adId=$adId'; }, 2000);";

        } else {
            $toaster_messages[] = "toastr.error('خطا در ویرایش آگهی! لطفاً دوباره تلاش کنید.');";
        }
    } else {
        $toaster_messages[] = "toastr.info('هیچ فیلدی برای آپدیت ارسال نشده است.');";
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
}
?>