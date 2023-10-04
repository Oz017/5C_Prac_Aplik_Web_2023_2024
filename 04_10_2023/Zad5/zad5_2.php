<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
    <?php
    $age = $_POST["wiek"];
    if($age < 11){
        echo "Jesteś dzieckiem";
    }elseif($age >= 18){
        echo "Jesteś dorosły";
    }else{
        echo "Jesteś nastolatkiem";
    }
    ?>
</body>
</html>