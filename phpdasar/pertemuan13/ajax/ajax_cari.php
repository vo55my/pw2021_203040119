<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 13 - 14 Mei 2021
Mempelajari Ajax Live Search dan Upload Gambar
*/
?>

<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p>Data Mahasiswa Tidak Ditemukan</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1; ?>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
      <td><?= $mhs['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>