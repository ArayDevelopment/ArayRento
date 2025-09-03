<?php

include "../../ArayRentoModel/ArayRentoConnectDB.php";
global $conn;
$advertisementId = $_GET['id'];

$stmtImg = $conn->prepare("DELETE FROM aray_rento_imeges_aray WHERE advertisement_id_rento_imeges_aray = ?");
$stmtImg->execute([$advertisementId]);

$stmtAd = $conn->prepare("DELETE FROM aray_rento_advertisements_aray WHERE id_rento_advertisements_aray = ?");
$stmtAd->execute([$advertisementId]);

if ($stmtAd->execute()) {
    echo '
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/gh/rastikerdar/yekan-font/Yekan-font-face.css" rel="stylesheet">
<style>
.swal2-popup {
    font-family: "Yekan", Tahoma, sans-serif !important;
}
</style>
</head>
<body>
<script>
    Swal.fire({
        icon: "success",
        title: "با موفقیت حذف شد",
        text: "",
        timer: 1000,
        showConfirmButton: false
    });
    setTimeout(() => {
        window.location.href = "../../ArayRentoView/admin/advertisements-list.php";
    }, 500);
</script>
</body>
</html>
';
} else {
    echo '
 <html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
    <script>
                    Swal.fire({
                        icon: "error",
                        title: "خطا",
                        text: "",
                        timer: 3000,
                        showConfirmButton: false
                    });
                </script>
                </body>
                </html>';
}