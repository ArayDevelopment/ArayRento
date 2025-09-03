<?php
global $conn;
include "../../ArayRentoModel/ArayRentoConnectDB.php";

$advertisementData = [];
$toaster_messages = [];

try {
    $stmt = $conn->prepare("SELECT * FROM aray_rento_advertisements_aray");
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
    }
}
?>