<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
    <?php
        $a = 48;
        $b = 46;
        
        if($a > $b){
            echo "Zmienna 'a' jest większa niż zmienna 'b' ";
        }elseif($a ==$b){
            echo "Zmienne 'a' oraz 'b' są równe";
        }else {
            echo "Zmienna 'a' jest mniejsza od zmiennej 'b'";
        }
    ?>
</body>
</html>