<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <?php
        $liczba = $_POST["liczba"];
        if($liczba % 2 == 0){
            echo "liczba $liczba jest parzysta";
        }else{
            echo "liczba $liczba jest nieparzysta";
        }
    ?>
</body>
</html>