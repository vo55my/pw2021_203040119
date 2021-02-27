<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>

        <tr>
        <th>Baris 1</th>
            <?php for ($i = 1; $i <= 1; $i++) 
                for ($j = 1 ; $j <= 5 ; $j++) : ?>
                <th><?php echo "Baris $i, Kolom $j" ?></th>
            <?php endfor; ?>
        </tr>

        <tr>
        <th>Baris 2</th>
            <?php for ($i = 2; $i <= 2; $i++) 
                for ($j = 1 ; $j <= 5 ; $j++) : ?>
                <th><?php echo "Baris $i, Kolom $j" ?></th>
            <?php endfor; ?>
        </tr>

        <tr>
        <th>Baris 3</th>
            <?php for ($i = 3; $i <= 3; $i++) 
                for ($j = 1 ; $j <= 5 ; $j++) : ?>
                <th><?php echo "Baris $i, Kolom $j" ?></th>
            <?php endfor; ?>
        </tr>

        <tr>
        <th>Baris 4</th>
            <?php for ($i = 4; $i <= 4; $i++) 
                for ($j = 1 ; $j <= 5 ; $j++) : ?>
                <th><?php echo "Baris $i, Kolom $j" ?></th>
            <?php endfor; ?>
        </tr>

        <tr>
        <th>Baris 5</th>
            <?php for ($i = 5; $i <= 5; $i++) 
                for ($j = 1 ; $j <= 5 ; $j++) : ?>
                <th><?php echo "Baris $i, Kolom $j" ?></th>
            <?php endfor; ?>
        </tr>
    </table>
</body>
</html>