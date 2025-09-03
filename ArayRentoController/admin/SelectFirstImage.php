<?php
include "../ArayRentoModel/ArayRentoConnectDB.php";

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