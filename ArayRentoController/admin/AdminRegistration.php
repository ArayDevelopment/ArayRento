<?php
include "../../ArayRentoModel/ArayRentoConnectDB.php";
include 'jdf-master/jdf.php';

$toaster_messages = [];

if (isset($_POST['btnSubmit'])) {
    global $conn;

    $adminFirstName = htmlspecialchars(trim($_POST['adminFirstName']));
    $adminLastName = htmlspecialchars(trim($_POST['adminLastName']));
    $adminPhoneNumber = htmlspecialchars(trim($_POST['adminPhoneNumber']));
    $adminEmail = filter_var($_POST['adminEmail'], FILTER_SANITIZE_EMAIL);
    $adminPassword = htmlspecialchars(trim($_POST['adminPassword']));
    $createdAt = jdate("Y/m/d/");
    $createdHour = jdate("H:i:s");
    $adminActiveCode = rand(100000, 999999);
    $adminRole = 1;

    if (empty($adminFirstName) || empty($adminLastName) || empty($adminPhoneNumber) || empty($adminEmail) || empty($adminPassword)) {
        $toastr_messages[] = "toastr.error('لطفاً تمام فیلدها را پر کنید.');";
    }

    if (!filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
        $toastr_messages[] = "toastr.error('ایمیل نامعتبر است.');";
    }

    if (!preg_match('/^\d{11}$/', $adminPhoneNumber)) {
        $toaster_messages[] = "toastr.error('شماره تلفن باید ۱۱ رقم باشد.');";
    }

    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $adminPassword)) {
        $toastr_messages[] = "toastr.error('رمز عبور باید حداقل ۸ کاراکتر و شامل حروف بزرگ، کوچک و عدد باشد.');";
    }

    if (empty($toastr_messages)) {
        
            $hashedPassword = password_hash($adminPassword, PASSWORD_BCRYPT);

            $stmt = $conn->prepare("INSERT INTO aray_rento_users_aray (fname_rento_users_aray, lname_rento_users_aray, phone_number_rento_users_aray, email_rento_users_aray, password_rento_users_aray, active_code_rento_user_aray,role_rento_users_aray) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?)");

            $stmt->bindValue(1, $adminFirstName, PDO::PARAM_STR);
            $stmt->bindValue(2, $adminLastName, PDO::PARAM_STR);
            $stmt->bindValue(3, $adminPhoneNumber, PDO::PARAM_STR);
            $stmt->bindValue(4, $adminEmail, PDO::PARAM_STR);
            $stmt->bindValue(5, $hashedPassword, PDO::PARAM_STR);
            $stmt->bindValue(6, $adminActiveCode, PDO::PARAM_INT);
            $stmt->bindValue(7, $adminRole, PDO::PARAM_INT);

            if ($stmt->execute()) {
                $toaster_messages[] = "toastr.success('ادمین با موفقیت ثبت شد.');";
                $toaster_messages[] = "setTimeout(function() { window.location.href = 'admin-registration.php'; }, 2000);";
            }

        } else {
            $toaster_messages[] = "toastr.error('خطا در ثبت نام ادمین! لطفاً دوباره تلاش کنید.');";
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