<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
    <?php
        $x = $_POST['x'];
        $isPrimary = true;
        for($i = 2;$i < $x; $i++){
            if ($x % $i == 0){
                $isPrimary = false;
            }
        }
        if($isPrimary == true){
            echo $x." jest liczbą pierwszą";
        }else{
            echo $x." nie jest liczbą pierwszą.";
        }
        echo "<br><a href = 'zad4.php'>Powrót</a>";
        
    ?>
</body>
</html>