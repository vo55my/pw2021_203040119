<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1c</title>
    <style>
    .bulat {
            background-color: salmon;
            height: 60px;
            width: 60px;
            line-height: 60px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 6px;
            border-radius: 60px;
            border: 3px solid black;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php for($i = 1; $i <= 3; $i++) : ?>
    <?php for($j = 1; $j <= $i; $j++) : ?>
        <div class="bulat"><?= $i ?></div>
    <?php endfor; ?>
    <br>
    <?php endfor; ?> 
</body>
</html>