<?php
// Menghubungkan dengan file PHP lainnya
require 'functions.php';
// Melakukan Query
$kampus = query("SELECT * FROM kampus");
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
    <title>Latihan4b</title>
    <style>
        img {
            width: 60px;
            height: 60px;
        }

        table {
            margin-bottom: 60px;
        }
        
        .container {
            width: 1100px;
            height: 1000px;
            margin: auto;
        }

        h4 {
            margin: 40px;
            text-align: center;
        }

        td {
            padding: 4px 6px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<h4 class="separator-center uk-heading-bullet">Daftar PTN Terbaik 2021 Versi Webometrics</h4>
<div class="container uk-animation-fade">
    <table class="radius bordered shadow highlight centered uk-table-hover">
        <thead>
          <tr>
              <th>No.</th>
              <th>Logo</th>
              <th>Kampus</th>
              <th>Alamat</th>
              <th>Didirikan</th>
              <th>Kota</th>
              <th>Situs</th>
              <th>Urutan</th>
          </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach( $kampus as $k ) : ?>
        <tbody class="uk-animation-toggle" tabindex="0">
          <tr class="hoverable">
            <td class="grey lighten-2 uk-animation-slide-right-small"><strong><?= $i ?></strong></td>
            <td>
                <img class="uk-preserve-width uk-animation-slide-right-small" src="../assets/img/<?= $k["logo"]; ?>">
            </td>
            <td class="uk-animation-slide-right-small"><?= $k["nama"]; ?></td>
            <td class="uk-animation-slide-right-small"><?= $k["alamat"]; ?></td>
            <td class="uk-animation-slide-right-small"><?= $k["berdiri"]; ?></td>
            <td class="uk-animation-slide-right-small"><?= $k["kota"]; ?></td>
            <td class="blue-text uk-animation-slide-right-small"><?= $k["situs"]; ?></td>
            <td class="grey lighten-2 uk-animation-slide-right-small"><strong><?= $k["urutan"]; ?></strong></td>
          </tr>
        </tbody>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>
<div class="clear"></div>
</body>
</html>