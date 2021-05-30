<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 2 - 12 Februari 2021
Mempelajari tentang Syntax PHP Dasar
*/

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// echo "Dhaifullah Hilmy";

// echo 123;

// echo true;

// echo false;

// print_r("Dhaifullah Hilmy");

// var_dump("Dhaifullah Hilmy");

// Penulisan sintaks PHP
/*
1. PHP didalam HTML
2. HTML didalam PHP
*/

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Dhaifullah Hilmy";


// Interpolasi
// echo "Hello, Nama Saya $nama";
// echo 'Hello, Nama Saya $nama';

// Operator Aritmatika (+ - * / %)
// echo 1 + 1;

/*
$x = 10;
$y = 20;
echo $x * $y;
*/

// Operator Penggabung String / Concatenation (.)
// $nama_depan = "Dhaifullah";
// $nama_belakang = "Hilmy";
// echo $nama_depan . " " . $nama_belakang;

// Operator Assignment (= , += , -= , *= , /= , %= , .=)
// $x = 1;
// $x = 5;
// $x += 5;
// $x -= 5;
// $x *= 5;
// $x /= 5;
// $x %= 5;
// $x .= 5;

// echo $x;

// $nama = "Dhaifullah";
// $nama .= " ";
// $nama .= "Hilmy";

// echo $nama;

// Operator Perbandingan (< , > , <= , >= , == , !=)
// var_dump(1 < 5);
// var_dump(1 > 5);
// var_dump(1 == 5);
// var_dump(1 == "1");

// Operator Identitas (=== , !==)
// var_dump(1 === "1");

// Operator Logika (&& , || , !)
// $x = 30;
// var_dump($x < 20 && $x % 2 == 0);
// var_dump($x < 20 || $x % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- <h1>Hello, Selamat Datang Hilmy</h1> -->
    <!-- <h1>Hello, Selamat Datang <?php echo $nama; ?></h1> -->
    <!-- <p><?php echo "ini adalah paragraf"; ?></p> -->

    <!-- <?php echo "<h1>Hello, Selamat Datang Hilmy</h1>" ?> -->
</body>
</html>