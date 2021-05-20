<?php
session_start();
// Menghubungkan dengan file PHP lainnya
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// melakukan pengecekan apakah user sudah melakukan login, jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    // mencocokkan USERNAME dengan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            // jika INGAT SAYA dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../uikit/css/uikit-rtl.css">
    <link rel="stylesheet" href="../uikit/css/uikit.css">
    <title>Login</title>
</head>

<body>
    <form action="" method="post" class="uk-form-stacked">
        <fieldset class="uk-fieldset">
            <div class="uk-card uk-card-body uk-card-large uk-position-center uk-card-default uk-card-hover">
                <legend class="uk-legend" style="text-align: center;">Login</legend>
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username/Password Salah</p>
                <?php endif; ?>
                <div class="uk-margin uk-margin-auto">
                    <label for="username" class="uk-form-label">Username</label>
                    <input type="text" name="username" placeholder="Username" class="uk-input uk-form-width-medium uk-form-small" autocomplete="off">
                </div>
                <div class="uk-margin uk-margin-auto">
                    <label for="password" class="uk-form-label">Password</label>
                    <input type="password" name="password" placeholder="Password" class="uk-input uk-form-width-medium uk-form-small" autocomplete="off">
                </div>
                <div class="remember uk-margin uk-margin-auto">
                    <input type="checkbox" name="remember" class="uk-checkbox">
                    <label for="remember">Ingat Saya</label>
                </div>
                <button type="submit" name="submit" class="uk-button uk-button-primary uk-margin-auto">Login</button>
                <div class="registrasi uk-margin uk-margin-auto">
                    <p>Belum punya akun? Registrasi <a href="registrasi.php" class="uk-button-link">Disini</a></p>
                </div>
            </div>
        </fieldset>
    </form>
</body>

</html>