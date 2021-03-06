<?php 
    function hitungDeterminan($a, $b, $c, $d) {
        echo "<table style = 'border-left: ; border-right: ;' cellpadding = '5' cellpadding = '5'>
        <tr>
            <td>$a</td>
            <td>$b</td>
        </tr>
        <tr>
            <td>$c</td>
            <td>$d</td>
        </tr>
        </table>";

        echo "<br>";
        echo "<b>Determinan dari matriks tersebut adalah " . (($a * $d) - ($b * $c)) . "</b>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d</title>
    <style>
    table {
        border-right: 2px solid black;
        border-left: 2px solid black;
    }
    </style>
</head>
<body>
    <?php hitungDeterminan(1,2,3,4) ?>
</body>
</html>