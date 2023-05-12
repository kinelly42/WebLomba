
<?php
session_start();
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if ($username == $admin_id && $password == $admin_password) {
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
    } else {

        echo "<script>alert('Username atau password salah. Silakan coba lagi.'); window.location.href = 'login.php';</script>";
        exit;
    }
}
?>