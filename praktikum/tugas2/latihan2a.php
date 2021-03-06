<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a</title>
    <style>
        .style1 {
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            margin: 10px;
        }

        .style2 {
            border: 2px solid black;
            box-shadow: 0 0 4px black;
            width: 45%;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <?php
    function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2") {
        return "<div class = $style2><p class = $style1>$tulisan</p></div>";
    }
    echo gantiStyle("Selamat datang di praktikum PW");
    ?>
</body>
</html>