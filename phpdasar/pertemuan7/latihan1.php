<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 7 - 19 Maret 2021
Mempelajari GET dan POST dalam PHP
*/

// // Variabel Scope / lingkup variabel
// $x = 10;

// function tampilx() {
//     global $x; // Variabel Global untuk menampilkan variabel diluar function
//     echo $x;
// }

// tampilx();

// SUPERGLOBALS
// variable global milik PHP
// merupakan array assosiative
// echo $_SERVER["SERVER_NAME"];

// $_GET
$mahasiswa = [
    [
        "nama" => "Dhaifullah Hilmy",
        "nrp" => "203040119",
        "email" => "203040119@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hilmy.jpg"
    ],
    [
        "nama" => "Hilmy Dhaifullah",
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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"] ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"] ?>&gambar=<?= $mhs["gambar"] ?>"><?= $mhs["nama"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>