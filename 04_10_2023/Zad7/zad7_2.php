<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 7</title>
</head>
<body>
    <?php
    $a = $_POST["liczba1"];
    $b = $_POST["liczba2"];
    $c = $_POST["liczba3"];

    if($a < $b && $a < $c){
        echo "Najmniejsza podana przez ciebie liczba to $a";
    }elseif($b<$a && $b<$c){
        echo "Najmniejsza podana przez ciebie liczba to $b";
    }elseif($c<$a && $c<$b){
        echo "Najmniejsza podana przez ciebie liczba to $c";
    }elseif($a == $b && $a<$c){
        echo "Najmniejsza podana przez ciebie liczba to $a";
    }elseif($b==$c && $b<$a){
        echo "Najmniejsza podana przez ciebie liczba to $b";
    }elseif($a == $c && $a < $b){
        echo "Najmniejsza podana przez ciebie liczba to $a";

    }elseif($a == $b && $a == $c){
        echo "Najmniejsza podana przez ciebie liczba to $a";
    }
    ?>
</body>
</html>