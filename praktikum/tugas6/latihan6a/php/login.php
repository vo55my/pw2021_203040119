<?php 
    session_start();
    // Menghubungkan dengan file PHP lainnya
    require 'functions.php';
    
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
            if ($password == $row['password']) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = $row['id'];
            }
            if ($row['id'] == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: index.php");
            die;
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
    <?php if (isset($error)) : ?>
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close>Username atau Password Salah</a>
        </div>
    <?php endif; ?>
    <div class="uk-card uk-card-body uk-card-large uk-position-center uk-card-default uk-card-hover">
        <div class="uk-margin uk-margin-auto">
            <label for="username" class="uk-form-label">Username</label>
            <input type="text" name="username" placeholder="Username" class="uk-input uk-form-width-medium uk-form-small">
        </div>
        <div class="uk-margin uk-margin-auto">
            <label for="password" class="uk-form-label">Password</label>
            <input type="text" name="password" placeholder="Password" class="uk-input uk-form-width-medium uk-form-small">
        </div>
        <div class="remember uk-margin uk-margin-auto">
            <input type="checkbox" name="remember" class="uk-checkbox">
            <label for="remember">Ingat Saya</label>
        </div>
        <button type="submit" name="submit" class="uk-button uk-button-primary uk-margin-auto">Login</button>
    </div>
    </fieldset>
</form>
</body>
</html>
