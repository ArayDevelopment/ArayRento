<?php

use PHPMailer\PHPMailer\PHPMailer;

include "../ArayRentoModel/ArayRentoConnectDB.php";

$toastr_messages = [];

if (isset($_POST['btnSub'])) {
    global $conn;

    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $phoneNumber = htmlspecialchars(trim($_POST['phoneNumber']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];
    $activeCode = rand(100000, 999999);

    if (empty($firstName) || empty($lastName) || empty($phoneNumber) || empty($email) || empty($password) || empty($rePassword)) {
        $toastr_messages[] = "toastr.error('لطفاً تمام فیلدها را پر کنید.');";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $toastr_messages[] = "toastr.error('ایمیل نامعتبر است.');";
    }

    if (!preg_match('/^\d{11}$/', $phoneNumber)) {
        $toastr_messages[] = "toastr.error('شماره تلفن باید ۱۱ رقم باشد.');";
    }

    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
        $toastr_messages[] = "toastr.error('رمز عبور باید حداقل ۸ کاراکتر و شامل حروف بزرگ، کوچک و عدد باشد.');";
    }

    if ($password !== $rePassword) {
        $toastr_messages[] = "toastr.warning('رمزهای عبور مطابقت ندارند.');";
    }

    if (empty($toastr_messages)) {
        $stmt = $conn->prepare("SELECT * FROM aray_rento_users_aray WHERE email_rento_users_aray = ? OR phone_number_rento_users_aray = ?");
        $stmt->bindValue(1, $email, PDO::PARAM_STR);
        $stmt->bindValue(2, $phoneNumber, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() === 0) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $gt = $conn->prepare("INSERT INTO aray_rento_users_aray (fname_rento_users_aray, lname_rento_users_aray, phone_number_rento_users_aray, email_rento_users_aray, password_rento_users_aray, active_code_rento_user_aray) 
                                  VALUES (?, ?, ?, ?, ?, ?)");

            $gt->bindValue(1, $firstName, PDO::PARAM_STR);
            $gt->bindValue(2, $lastName, PDO::PARAM_STR);
            $gt->bindValue(3, $phoneNumber, PDO::PARAM_STR);
            $gt->bindValue(4, $email, PDO::PARAM_STR);
            $gt->bindValue(5, $hashedPassword, PDO::PARAM_STR);
            $gt->bindValue(6, $activeCode, PDO::PARAM_INT);

            if ($gt->execute()) {
                require 'phpmailer/src/PHPMailer.php';
                require 'phpmailer/src/SMTP.php';
                require 'phpmailer/src/Exception.php';

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'arayrento@gmail.com';
                $mail->Password = 'ntvyszcgffmtmrdn';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('arayrento@gmail.com', 'Active account');
                $mail->addAddress($email);

                $mail->Subject = 'Email activation code';
                $mail->Body = "Your activation code: " . $activeCode;

                if ($mail->send()) {
                    $toastr_messages[] = "toastr.success('ثبت ‌نام با موفقیت انجام شد! کد فعال‌سازی به ایمیل شما ارسال شد.');";
                    $toastr_messages[] = "setTimeout(function() { window.location.href = 'active-account.php'; }, 2000);";
                } else {
                    $toastr_messages[] = "toastr.error('خطا در ارسال ایمیل: " . $mail->ErrorInfo . "');";
                }
            } else {
                $toastr_messages[] = "toastr.error('خطا در ثبت اطلاعات! لطفاً دوباره تلاش کنید.');";
            }
        } else {
            $toastr_messages[] = "toastr.error('ایمیل یا شماره تلفن قبلاً ثبت شده است.');";
        }
    }
    if (!empty($toastr_messages)) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {";
        foreach ($toastr_messages as $msg) {
            echo $msg;
        }
        echo "});
        </script>";
    }
}