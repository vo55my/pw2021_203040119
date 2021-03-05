<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 5 - 5 Maret 2021
Mempelajari Array dalam PHP
*/
?>

<?php 
$mahasiswa = [
            ["Dhaifullah Hilmy", "203040119", "Teknik Informatika", "203040119@unpas.ac.id"], 
            ["Hilmy Dhaifullah", "203040911", "Teknik Informatika", "203040911@unpas.ac.id"],
            ["Hilmy", "203040999", "Teknik Informatika", "203040999@unpas.ac.id"]
        ];
?>

<!DOCTYPE html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<!-- <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul> -->

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?php echo $mhs[0] ?></li>
    <li>NRP : <?php echo $mhs[1] ?></li>
    <li>Jurusan : <?php echo $mhs[2] ?></li>
    <li>Email : <?php echo $mhs[3] ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>