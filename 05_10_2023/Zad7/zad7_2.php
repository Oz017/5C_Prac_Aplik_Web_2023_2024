<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 7</title>
</head>
<body>
    <?php
     $x = $_POST['x'];
     $y = $_POST['y'];
     $suma = 0;
     
     for($i = $x; $i <= $y; $i++){
        if($i % 2 == 1){
            $suma += $i;
        }else{
            continue;
        }
     }
     echo "Suma wszystkich liczb z przedziału od $x do $y to: $suma";
    ?>
</body>
</html>