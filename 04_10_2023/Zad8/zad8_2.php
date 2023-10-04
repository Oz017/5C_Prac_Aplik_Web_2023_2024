<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 8</title>
</head>
<body>
    <?php
        $a = $_POST["liczba1"];
        $b = $_POST["liczba2"];
        $c = $_POST["liczba3"];

        if($a == $b && $a == $c){
            echo "Wszystkie podane liczby są takie same";
        }elseif($a == $b){
            echo "Przynajmniej dwie podane liczby mają taką samą wartość";
        }elseif($b == $c){
            echo "Przynajmniej dwie podane liczby mają taką samą wartość";
        }elseif($a == $c){
            echo "Przynajmniej dwie podane liczby mają taką samą wartość";
        }else{
            echo "Każda z trzech liczb ma unikalną wartość";
        }
    ?>
</body>
</html>