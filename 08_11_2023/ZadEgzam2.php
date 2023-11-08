<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wybierz język</title>
</head>
<body>
    <?php
        $jezyk = "n";
    
        if($jezyk == "a"){
            echo "angielski";
        }elseif($jezyk == "n"){
            echo "niemiecki";
        }elseif($jezyk == "h"){
            echo "hiszpański";
        }else{
            echo "polski";
        }
    ?>
</body>
</html>