<?php
session_start();
include "../ArayRentoModel/ArayRentoConnectDb.php";

if (isset($_POST['lBtnSub'])) {
    global $conn;

    $email = filter_var(trim($_POST['lEmail']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['lPassword']);

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id_rento_users_aray,password_rento_users_aray,fname_rento_users_aray,lname_rento_users_aray,role_rento_users_aray,phone_number_rento_users_aray FROM aray_rento_users_aray WHERE email_rento_users_aray = ?");
        $stmt->bindValue(1, $email, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password_rento_users_aray'])) {
                $_SESSION['userId'] = $row['id_rento_users_aray'];
                $_SESSION['userFirstName'] = $row['fname_rento_users_aray'];
                $_SESSION['userLastName'] = $row['lname_rento_users_aray'];
                $_SESSION['userPhoneNumber'] = $row['phone_number_rento_users_aray'];
                $_SESSION['userEmail'] = $email;
                $_SESSION['userRole'] = $row['role_rento_users_aray'];
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "ورود موفقیت‌آمیز",
                        text: "به داشبورد خود خوش آمدید!",
                        timer: 1000,
                        showConfirmButton: false
                    });
                    setTimeout(() => { window.location.href = "admin/dashboard.php"; }, 500);
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "خطا",
                        text: "رمز عبور نادرست است!",
                        timer: 3000,
                        showConfirmButton: false
                    });
                </script>';
            }
        } else {
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "خطا",
                    text: "کاربری با این ایمیل یافت نشد!",
                    timer: 3000,
                    showConfirmButton: false
                });
            </script>';
        }
    } else {
        echo '<script>
            Swal.fire({
                icon: "warning",
                title: "توجه",
                text: "لطفاً ایمیل و رمز عبور خود را وارد کنید!",
                timer: 3000,
                showConfirmButton: false
            });
        </script>';
    }
}
?>