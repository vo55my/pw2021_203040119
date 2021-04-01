<?php
// Melakukan Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "");
// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040119");
// Melakukan Query dari Database
$result = mysqli_query($conn, "SELECT * FROM kampus");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foundation/assets/css/foundation-float.css">
    <link rel="stylesheet" href="foundation/assets/css/foundation-prototype.css">
    <link rel="stylesheet" href="foundation/assets/css/foundation-rtl.css">
    <link rel="stylesheet" href="foundation/assets/css/foundation.css">
    <link rel="stylesheet" href="uikit/css/uikit-rtl.css">
    <link rel="stylesheet" href="uikit/css/uikit.css">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Latihan4a</title>
    <style>
        img {
            width: 60px;
            height: 60px;
        }

        table {
            margin-bottom: 20px;
        }
        
        .container {
            width: 1100px;
            height: 1100px;
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tbody class="uk-animation-toggle" tabindex="0">
          <tr class="hoverable">
            <td class="grey lighten-2 uk-animation-slide-right-small"><strong><?= $i ?></strong></td>
            <td>
                <img class="uk-preserve-width uk-animation-slide-right-small" src="assets/img/<?= $row["logo"]; ?>">
            </td>
            <td class="uk-animation-slide-right-small"><?= $row["nama"]; ?></td>
            <td class="uk-animation-slide-right-small"><?= $row["alamat"]; ?></td>
            <td class="uk-animation-slide-right-small"><?= $row["berdiri"]; ?></td>
            <td class="uk-animation-slide-right-small"><?= $row["kota"]; ?></td>
            <td class="blue-text uk-animation-slide-right-small"><?= $row["situs"]; ?></td>
            <td class="grey lighten-2 uk-animation-slide-right-small"><strong><?= $row["urutan"]; ?></strong></td>
          </tr>
        </tbody>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</div>
<div class="clear"></div>
</body>
</html>