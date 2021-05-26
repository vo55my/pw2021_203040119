<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$query = query("SELECT * FROM katalog WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Slide/Profil.png">
  <title>MyCloth Detail</title>
  <style>
    table {
      margin: 30px auto;
    }

    th,
    td {
      font-size: 20px;
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="black">
      <div class="container">
        <div class="nav-wrapper">
          <img class="brand-logo" src="../assets/img/Slide/Profil.png">
        </div>
      </div>
    </nav>
  </div>

  <!-- detail -->
  <div class="container">
    <table class="centered">
      <thead>
        <tr class="red-text text-darken-2">
          <th>Gambar</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2">
            <img class="responsive-img" width="600" src="../assets/img/Katalog/<?= $query['img']; ?>">
          </td>
        </tr>
        <tr>
          <td>
            <p>Kode : <?= $query['kode']; ?></p>
            <p>Edisi : <?= $query['edisi']; ?></p>
            <p>Harga : Rp. <?= $query['harga']; ?></p>
            <p>Ukuran : <?= $query['ukuran']; ?></p>
            <a href="member.php" class="waves-effect waves-light btn-small red darken-2">Kembali</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- footer -->
  <footer class="footer red darken-2 white-text center-align">
    <p>Copyright © 2020 MyCloth Indonesia</p>
  </footer>

  <div class="clear"></div>

  <!-- javascript -->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>