<?php

include "../../ArayRentoModel/ArayRentoConnectDB.php";
global $conn;

$advertisementId = $_GET['id'];
    $stmt = $conn->prepare("UPDATE aray_rento_advertisements_aray SET status_rento_advertisements_aray=1 where id_rento_advertisements_aray=$advertisementId");
    if ($stmt->execute()) {
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
        title: "با موفقیت غیرفعال شد",
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