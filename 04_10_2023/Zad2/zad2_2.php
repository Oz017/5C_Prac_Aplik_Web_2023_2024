<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
   <?php
    $liczba1 = $_POST["liczba1"];
    $liczba2 = $_POST["liczba2"];

    if($liczba1 % $liczba2 == 0){
        echo "Liczba $liczba1 jest podzielna przez $liczba2";
    }else{
        echo "Liczba $liczba1 nie jest podzielna przez $liczba2";
    }
   ?> 
</body>
</html>