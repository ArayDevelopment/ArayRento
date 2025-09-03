<?php

if (!isset($_SESSION['userId'])) {
    echo '
    <html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                      icon: "warning",
                        title: "عدم دسترسی",
                        text: "لطفا ابتدا وارد شوید",
                        timer: 3000,
                        showConfirmButton: false
            });
        </script>
    </body>
    </html>
    ';

    header("refresh:2;url=../../index.php");
    exit();
}
