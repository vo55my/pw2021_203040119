<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// while( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() = mengembalikan array numerik
// mysqli_fetch_assoc() = mengembalikan array assosiative
// mysqli_fetch_array() = mengembalikan kedua jenis array
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->email);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            
            <?php $i = 1; ?>
            <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> | 
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="60"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </tr>
    </table>
</body>
</html>