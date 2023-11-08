<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <?php
        $liczba = -36;

        if($liczba < 0){
            echo "liczba $liczba nie ma pierwiastka kwadratowego bo jest ujemna";
        }else{
            $pierwiastek = sqrt($liczba);
            echo "Pierwiastek kwadratowy z liczby $liczba to: $pierwiastek ";
        }
    ?>
</body>
</html>