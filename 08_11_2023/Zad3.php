<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <?php 
        $a = -12;
        if($a< 0){
            $b = $a*(-1);
            echo "Wartość bezwzględna z liczby $a to $b";
        }else{
            echo "Wartość bezwzględna z liczby $a to $a";
        }
    ?>
</body>
</html>