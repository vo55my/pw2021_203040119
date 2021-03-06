<?php 
    function tumpukanBola($tumpukan) {
        for($i = 1; $i <= $tumpukan; $i++) {
        for($j = 1; $j <= $i; $j++) {
        echo "<div class = bola>$i</div>";
        }
    echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .bola {
            background-color: salmon;
            height: 40px;
            width: 40px;
            line-height: 40px;
            text-align: center;
            margin-bottom: 4px;
            border-radius: 40px;
            border: 2px solid black;
            display: inline-block;
            font-size: 25px;
            margin-left: 4px;
        }
    </style>
</head>
<body>
    <?php tumpukanBola(5) ?>
</body>
</html>