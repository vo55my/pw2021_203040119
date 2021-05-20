<?php
session_start();
// Menghubungkan dengan file PHP lainnya
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
              </script>";
    }
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
    <title>Registrasi</title>
</head>

<body>
    <form action="" method="post" class="uk-form-stacked">
        <fieldset class="uk-fieldset">
            <div class="uk-card uk-card-body uk-card-large uk-position-center uk-card-default uk-card-hover">
                <legend class="uk-legend" style="text-align: center;">Registrasi</legend>
                <div class="uk-margin uk-margin-auto">
                    <label for="username" class="uk-form-label">Username</label>
                    <input type="text" name="username" placeholder="Username" class="uk-input uk-form-width-medium uk-form-small">
                </div>
                <div class="uk-margin uk-margin-auto">
                    <label for="password" class="uk-form-label">Password</label>
                    <input type="text" name="password" placeholder="Password" class="uk-input uk-form-width-medium uk-form-small">
                </div>
                <button type="submit" name="register" class="uk-button uk-button-primary uk-margin-auto">Register</button>
            </div>
        </fieldset>
    </form>
</body>

</html>