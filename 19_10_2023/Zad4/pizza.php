<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszt pizzy</title>
</head>
<body>
    <?php
        $distance = $_POST['km'];
        $isWarm = $_POST['hot'];
        $cost = $distance * 0.5;

        if($isWarm == true){
            $cost *= 1.15;
            echo "Koszt pizzy to: $cost";
        }else{
            echo "Koszt pizzy to: $cost";
        }
    ?>
</body>
</html>