<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie Egzaminacyjne 2</title>
</head>
<body>
    <?php
        $i = 10;
        $suma = 0;

        do{
            $suma+=$i;
            $i++;
        }while($suma <=1000);

        echo "Suma liczb to:". $suma . " ilość liczb to ". $i;
    ?>
</body>
</html>