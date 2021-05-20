<?php
// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

// Menghubungkan dengan file PHP lainnya
require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$kampus = query("SELECT * FROM kampus WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../foundation/css/foundation-float.css">
    <link rel="stylesheet" href="../foundation/css/foundation-prototype.css">
    <link rel="stylesheet" href="../foundation/css/foundation-rtl.css">
    <link rel="stylesheet" href="../foundation/css/foundation.css">
    <link rel="stylesheet" href="../uikit/css/uikit-rtl.css">
    <link rel="stylesheet" href="../uikit/css/uikit.css">
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Detail</title>
    <style>
        table {
            margin: auto;
        }

        .container {
            width: 1200px;
            height: 600px;
            margin-top: 40px;
        }

        img {
            width: 400px;
            height: 400px;
        }

        p {
            text-align: left;
            padding-left: 20px;
            font-size: 20px;
        }

        a {
            margin-top: 40px;
            float: right;
        }

        .clear {
            clear: both;
        }

        th {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container uk-animation-fade">
        <table class="radius bordered shadow centered">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="6"><img class="uk-preserve-width uk-animation-slide-left-small" src="../assets/img/<?= $kampus["logo"]; ?>"></td>
                </tr>
                <tr>
                    <td class="uk-animation-slide-right-small">
                        <p>Nama : <?= $kampus["nama"]; ?></p>
                        <p>Alamat : <?= $kampus["alamat"]; ?></p>
                        <p>Didirikan : <?= $kampus["berdiri"]; ?></p>
                        <p>Kota : <?= $kampus["kota"]; ?></p>
                        <p>Situs Web : <?= $kampus["situs"]; ?></p>
                        <p>Urutan : <strong><?= $kampus["urutan"]; ?></strong></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="../index.php" class="waves-effect waves-light btn grey lighten-1 uk-link-reset">Kembali</a>
    </div>
    <div class="clear"></div>
</body>

</html>