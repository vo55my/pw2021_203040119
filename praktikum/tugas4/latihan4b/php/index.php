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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection">
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
            width: 1000px;
            height: 1000px;
            margin: auto;
            display: flex;
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
<h4>Daftar PTN Terbaik 2021 Versi Webometrics</h4>
<div class="container">
    <table class="bordered highlight centered z-depth-2">
        <thead class="grey">
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
        <tbody align="center">
          <tr class="hoverable">
            <td class="grey lighten-2"><strong><?= $i ?></strong></td>
            <td>
                <img src="../assets/img/<?= $k["logo"]; ?>">
            </td>
            <td><?= $k["nama"]; ?></td>
            <td><?= $k["alamat"]; ?></td>
            <td><?= $k["berdiri"]; ?></td>
            <td><?= $k["kota"]; ?></td>
            <td class="blue-text"><?= $k["situs"]; ?></td>
            <td class="grey lighten-2"><strong><?= $k["urutan"]; ?></strong></td>
          </tr>
        </tbody>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>
<div class="clear"></div>
</body>
</html>