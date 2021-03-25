<?php 

// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$kampus = query("SELECT * FROM kampus WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection">
    <title>Latihan4c</title>
    <style>
        table {
            margin: auto;
        }

        .container {
            width: 1200px;
            height: 900px;
            margin-top: 40px;
        }

        img {
            width: 400px;
            height: 400px;
        }
        
        p {
            text-align: left;
        }

        a {
            margin-top: 40px;
            float: right;
        }

        p {
            padding-left: 20px;
            font-size: 20px;
        }

        .clear {
            clear: both;
        }

        th {
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <table class="bordered striped centered z-depth-2">
        <thead class="grey">
            <tr>
                <th>Logo</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="6"><img src="../assets/img/<?= $kampus["logo"]; ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Nama : <?= $kampus["nama"]; ?></p>
                    <p>Alamat : <?= $kampus["alamat"]; ?></p>
                    <p>Didirikan : <?= $kampus["berdiri"]; ?></p>
                    <p>Kota : <?= $kampus["kota"]; ?></p>
                    <p>Situs Web : <?= $kampus["situs"]; ?></p>
                    <p>Urutan : <strong><?= $kampus["urutan"]; ?></strong></p>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="index.php" class="waves-effect waves-light btn grey darken-2">Kembali</a>
</div>
<div class="clear"></div>
</body>
</html>