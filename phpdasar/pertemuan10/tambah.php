<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 10 - 23 April 2021
Mempelajari Koneksi DB dan Insert Data
*/
?>

<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan')
            document.location.href = 'latihan3.php';
          <script>";
  } else {
    echo "<script>
            alert('data gagal ditambahkan');
          <script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST"></form>
  <ul>
    <li>
      <label>
        Nama :
        <input type="text" name="nama" autofocus required>
      </label>
    </li>
    <li>
      <label>
        NRP :
        <input type="text" name="nrp" required>
      </label>
    </li>
    <li>
      <label>
        Email :
        <input type="text" name="email" required>
      </label>
    </li>
    <li>
      <label>
        Jurusan :
        <input type="text" name="jurusan" required>
      </label>
    </li>
    <li>
      <label>
        Gambar :
        <input type="text" name="gambar" required>
      </label>
    </li>
    <li>
      <button type="submit" name="tambah">Tambah Data</button>
    </li>
  </ul>
</body>

</html>