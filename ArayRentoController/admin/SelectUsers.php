<?php
global $conn;
include "../../ArayRentoModel/ArayRentoConnectDB.php";

$usersData = [];
$toaster_messages = [];

try {
    $stmt = $conn->prepare("SELECT * from aray_rento_users_aray");
    $stmt->execute();
    $usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($usersData)) {
        $toaster_messages[] = "toastr.error('هیچ کاربری پیدا نشد.');";
    }
} catch (PDOException $e) {
    $toaster_messages[] = "toastr.error('خطا در بارگذاری کاربران: " . $e->getMessage() . "');";
}

foreach ($toaster_messages as $message) {
    echo "<script>$message</script>";
}

$groupedUsers = [];
foreach ($usersData as $users) {
    $userId = $users['id_rento_users_aray'];

    if (!isset($groupedUsers[$userId])) {
        $groupedUsers[$userId] = $users;
    }
}