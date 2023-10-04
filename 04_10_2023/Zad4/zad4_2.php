<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
    <?php
        $liczba = $_POST["liczba"];
        if($liczba == 0){
            echo "Liczba $liczba jest równa zero";
        }elseif($liczba < 0){
            echo "Liczba $liczba jest mniejsza niż zero";
        }else{
            echo "Liczba $liczba jest większa niż zero";
        }
    ?>
</body>
</html>