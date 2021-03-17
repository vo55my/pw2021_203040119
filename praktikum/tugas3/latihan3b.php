<?php 
$pemain = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr", "Luca Modric", "Sadio Mane"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>
    <h4>Daftar Pemain Bola Terkenal</h4>
    <ol>
        <li><?= $pemain[0] ?></li>
        <li><?= $pemain[1] ?></li>
        <li><?= $pemain[2] ?></li>
        <li><?= $pemain[3] ?></li>
        <li><?= $pemain[4] ?></li>
    </ol>

    <h4>Daftar Pemain Bola Terkenal Baru</h4>
<ol>
    <li><?= $pemain[1] ?></li>
    <li><?= $pemain[2] ?></li>
    <li><?= $pemain[5] ?></li>
    <li><?= $pemain[0] ?></li>
    <li><?= $pemain[4] ?></li>
    <li><?= $pemain[6] ?></li>
    <li><?= $pemain[3] ?></li>
</ol>
</body>
</html>