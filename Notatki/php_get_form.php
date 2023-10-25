<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Get</title>
</head>
<body>
    <p>
        <?php
            $zmienna = $_GET["pole1"];
            echo "Wartość pola pole1 z formularza to: $zmienna";
        ?>
    </p>
</body>
</html>