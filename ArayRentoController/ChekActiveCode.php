<?php
include '../ArayRentoModel/ArayRentoConnectDB.php';

if (isset($_POST['btnSubAc'])) {
    global $conn;
    $activeCode = trim($_POST['activeCode']);

    if (!empty($activeCode)) {
        $stmt = $conn->prepare("SELECT active_code_rento_user_aray FROM aray_rento_users_aray WHERE active_code_rento_user_aray = ?");
        $stmt->bindValue(1, $activeCode, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $update = $conn->prepare("UPDATE aray_rento_users_aray SET status_rento_user_aray = ? WHERE active_code_rento_user_aray = ?");
            $update->bindValue(1, 1, PDO::PARAM_INT);
            $update->bindValue(2, $activeCode, PDO::PARAM_INT);
            $update->execute();

            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'حساب کاربری شما فعال شد!',
                        text: 'اکنون می‌توانید وارد شوید.',
                        confirmButtonText: 'باشه'
                    }).then(() => {
                        window.location.href = 'login.php';
                    });
                });
            </script>";
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'خطا!',
                        text: 'کد فعال‌سازی نامعتبر است.',
                        confirmButtonText: 'تلاش مجدد'
                    });
                });
            </script>";
        }
    } else {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'خطا!',
                    text: 'لطفاً کد فعال‌سازی را وارد کنید.',
                    confirmButtonText: 'باشه'
                });
            });
        </script>";
    }
}