<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>
    <?php
        $year = $_POST["rok"];
        if($year < 1582){
            echo "Przed reformą. W roku $year luty mial 28 dni";
        }elseif($year % 400 ==0){
            echo "W roku $year luty miał 29 dni";
        }elseif($year % 100 == 0){
            echo "W roku $year luty miał 28 dni";
        }elseif($year % 4 == 0){
            echo "W roku $year luty miał 29 dni";
        }else{
            echo "W roku $year luty miał 28 dni";
        }
    ?>
</body>
</html>