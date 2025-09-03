<?php
global $conn;
include "../../ArayRentoModel/ArayRentoConnectDB.php";

$locationsData = [];
$toaster_messages = [];

try {
    $stmt = $conn->prepare("SELECT id_rento_locations_aray,name_rento_locations_aray,region_rento_locations_aray FROM aray_rento_locations_aray");
    $stmt->execute();
    $locationsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($locationsData)) {
        $toaster_messages[] = "toastr.error('هیچ کاربری پیدا نشد.');";
    }
} catch (PDOException $e) {
    $toaster_messages[] = "toastr.error('خطا در بارگذاری کاربران: " . $e->getMessage() . "');";
}

foreach ($toaster_messages as $message) {
    echo "<script>$message</script>";
}

$groupedLocations = [];
foreach ($locationsData as $locations) {
    $locationId = $locations['id_rento_locations_aray'];

    if (!isset($groupedLocations[$locationId])) {
        $groupedLocations[$locationId] = $locations;
    }
}