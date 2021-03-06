<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <style>
        .kotak {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php 
    $jawabanIsset = "Isset adalah = fungsi yang digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset maka variabel akan mengembalikan nilai true, sebaliknya akan bernilai false<br></br>";
    $jawabanEmpty = "Empty adalah = fungsi yang digunakan untuk memeriksa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda dengan isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.";

    function soal($style){
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
    }
    ?>

    <div class="kotak"><?= soal ("  "); ?></div>
</body>
</html>