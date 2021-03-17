<?php 
$pemain = [
    "Cristiano Ronaldo" => "Juventus", 
    "Lionel Messi" => "Barcelona", 
    "Luca Modric" => "Real Madrid", 
    "Mohammad Salah" => "Liverpool", 
    "Neymar Jr" => "Paris Saint Germain", 
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "AC Milan"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
</head>
<body>
    <h4>Daftar Pemain Bola Terkenal dan Clubnya</h4>
    <table>
        <?php foreach( $pemain as $p => $c ) : ?>
            <tr>
                <td><strong><?= "$p" ?></strong></td>
                <td><?= ": $c" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>