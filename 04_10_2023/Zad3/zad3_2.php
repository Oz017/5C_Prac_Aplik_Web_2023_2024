<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <?php
        $liczba = $_POST["liczba"];
        if($liczba >= 100 && $liczba<150){
            echo "Liczba $liczba znajduje się w przedziale <100,150)";
        }else{
            echo "Liczba $liczba nie znajduje się w przedziale <100,150)";

        }
    ?>
</body>
</html>