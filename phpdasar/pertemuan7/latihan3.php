<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 7 - 19 Maret 2021
Mempelajari GET dan POST dalam PHP
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["nama"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

    <form action="" method="post">
        Masukkan Nama : 
        <input type="text" name="nama">
        <br>
        <button type="button" name="submit">Kirim!</button>
    </form>
</body>
</html>