<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie egzaminacyjne1</title>
</head>
<body>
    <?php
    $suma = 0;
     for($i = 100; $i < 300; $i +=2){
        echo $i."; ";
        $suma +=$i;
     }
     echo "<br>suma jest równa:". $suma;
    ?>
</body>
</html>