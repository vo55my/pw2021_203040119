<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 10 - 23 April 2021
Mempelajari Koneksi DB dan Insert Data
*/

require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>"></li>
    <li>NRP : <?= $mhs['nrp']; ?></li>
    <li>Nama : <?= $mhs['nama']; ?></li>
    <li>Email : <?= $mhs['email']; ?></li>
    <li>Jurusan : <?= $mhs['jurusan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
  </ul>
</body>

</html>