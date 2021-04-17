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
    <title>Latihan4c</title>
    <style>
        img {
            width: 60px;
            height: 60px;
        }

        table {
            margin-bottom: 60px;
        }
        
        .container {
            width: 400px;
            height: 400px;
            margin: auto;
        }

        h5 {
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
<h5 class="separator-center uk-heading-bullet">Daftar PTN Terbaik 2021 Versi Webometrics</h5>
<div class="container uk-animation-fade">
    <table class="radius bordered shadow highlight centered uk-table-hover">
        <thead>
          <tr>
              <th>No.</th>
              <th>Logo</th>
              <th>Kampus</th>
          </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach( $kampus as $k ) : ?>
        <tbody class="uk-animation-toggle" tabindex="0">
          <tr class="hoverable">
            <td class="grey lighten-2 uk-animation-slide-right-small"><strong><?= $i ?></strong></td>
            <td>
                <a href="detail.php?id=<?= $k['id'] ?>"><img class="uk-preserve-width uk-animation-slide-right-small" src="../assets/img/<?= $k["logo"]; ?>"></a>
            </td>
            <td class="uk-table-link uk-animation-slide-right-small">
                <a class="uk-link-reset" href="detail.php?id=<?= $k['id'] ?>"><?= $k["nama"]; ?></a>
            </td>
          </tr>
        </tbody>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>
<div class="clear"></div>
</body>
</html>