<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 6 - 12 Maret 2021
Mempelajari Array Assosiative dalam PHP
*/
?>

<?php 
// $mahasiswa = [
//     ["Dhaifullah Hilmy", "203040119", "203040119@mail.unpas.ac.id", "Teknik Informatika"], 
//     ["Dhaifullah Hilmy", "203040118", "203040118@mail.unpas.ac.id", "Ilmu Komputer"]
//     ]

// Array Assosiative
// Definisinya sama seperti array numerik, kecuali
// Key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Dhaifullah Hilmy", 
    "nrp" => "203040119", 
    "email" => "203040119@mail.unpas.ac.id", 
    "jurusan" => "Teknik Informatika",
    "gambar" => "hilmy.jpg"
    ], 
    [
        "nama" => "Dhaifullah Hilmy", 
        "nrp" => "203040118", 
        "email" => "203040118@mail.unpas.ac.id", 
        "jurusan" => "Teknik Komputer",
        "gambar" => "hilmy.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>