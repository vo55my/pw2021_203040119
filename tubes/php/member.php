<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

$jumlahKatalogPerHalaman = 2;
$jumlahKatalog = count(query("SELECT * FROM katalog"));
$jumlahHalaman = round($jumlahKatalog / $jumlahKatalogPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalKatalog = ($jumlahKatalogPerHalaman * $halamanAktif) - $jumlahKatalogPerHalaman;

$query = query("SELECT * FROM katalog LIMIT $awalKatalog, $jumlahKatalogPerHalaman");

if (isset($_POST['cari'])) {
  $query = cari($_POST['keyword']);
}
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
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Slide/Logo.png">
  <title>MyCloth Member</title>
  <style>
    nav {
      background-color: rgba(0, 0, 0, 0.2);
    }

    .nav-wrapper form {
      margin-top: 40px;
    }

    .container h2,
    thead tr,
    td a,
    h4,
    .pagination {
      margin-bottom: 40px;
      font-weight: 600;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    .col img {
      margin-bottom: 40px;
    }

    center {
      margin-bottom: 60px;
    }

    table {
      margin: 60px auto;
    }

    .btn-floating {
      margin: 5px;
    }

    th,
    td {
      font-size: 20px;
    }
  </style>
</head>

<body id="home">
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="black">
      <div class="container">
        <div class="nav-wrapper">
          <img class="brand-logo" src="../assets/img/Slide/Logo.png">
          <ul class="red-text text-darken-2 right">
            <li><a href="logout.php" class="hoverable">Logout<i class="material-icons right">exit_to_app</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- katalog -->
  <div id="katalog" class="parallax-container">
    <div class="parallax">
      <img src="../assets/img/Slide/Parallax.png">
    </div>
    <div class="container bike">
      <h2 class="center-align red-text text-darken-3">MyCloth Katalog</h2>
      <nav>
        <div class="nav-wrapper">
          <form action="" method="POST">
            <div class="input-field">
              <input type="search" name="keyword" required autocomplete="off">
              <label class="label-icon" for="cari"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
              <button class="btn-flat" type="submit" name="cari"></button>
            </div>
          </form>
        </div>
      </nav>
      <table class="bordered highlight centered">
        <thead>
          <tr class="red-text text-darken-3">
            <th>Katalog</th>
            <th>Kode</th>
            <th>Edisi</th>
          </tr>
        </thead>
        <tbody tabindex="0">
          <?php if (empty($query)) : ?>
            <tr>
              <td colspan="3">
                <h4 class="center-align red-text text-darken-3">Katalog Tidak Ditemukan</h4>
              </td>
            </tr>
          <?php else : ?>
            <?php foreach ($query as $query) : ?>
              <tr class="hoverable" tabindex="0">
                <td>
                  <a href="detail.php?id=<?= $query['id'] ?>"><img width="300" class="responsive-img" src="../assets/img/Katalog/<?= $query['img']; ?>"></a>
                </td>
                <td><a class="red-text text-darken-3" href="detail2.php?id=<?= $query['id'] ?>"><?= $query['kode']; ?></a></td>
                <td><a class="red-text text-darken-3" href="detail2.php?id=<?= $query['id'] ?>"><?= $query['edisi']; ?></a></td>
              </tr>
        </tbody>
      <?php endforeach; ?>
    <?php endif; ?>
      </table>

      <!-- pagination -->
      <ul class="pagination center">
        <?php if ($halamanAktif > 1) : ?>
          <li><a href="?halaman=<?= $halamanAktif - 1; ?>"><i class="material-icons white-text">chevron_left</i></a></li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
          <?php if ($i == $halamanAktif) : ?>
            <li class="active waves-effect"><a href="?halaman=<?= $i; ?>" class="white-text"><?= $i; ?></a></li>
          <?php else : ?>
            <li class="waves-effect"><a href="?halaman=<?= $i; ?>" class="white-text"><?= $i; ?></a></li>
          <?php endif; ?>
        <?php endfor; ?>

        <?php if ($halamanAktif < $jumlahHalaman) : ?>
          <li><a href="?halaman=<?= $halamanAktif + 1; ?>"><i class="material-icons white-text">chevron_right</i></a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>

  <!-- footer -->
  <footer class="footer red darken-2 white-text center-align">
    <p>Copyright © 2020 MyCloth Indonesia</p>
  </footer>

  <div class="clear"></div>

  <!-- javascript -->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);
  </script>
</body>

</html>