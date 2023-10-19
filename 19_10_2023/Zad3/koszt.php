<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator kosztów</title>
</head>
<body>
    <?php
        $cena = $_POST['kosztpal'];
        $dystans = $_POST['distance'];
        $spalanie = $_POST['spalanie'];
        
        $cena = floatval($cena);
        $spalanie = floatval($spalanie);
        
        $koszt = $cena * ($spalanie * ($dystans/100)) ;
        
        if(is_float($cena) && is_float($spalanie)){
            echo "Cena paliwa to: $cena <br>";
            echo "Ilość kilometrów to: $dystans <br>";
            echo "Średnie spalanie(na 100km) to: $spalanie <br>";
            echo "Koszt przejazdu to: $koszt ";
        }else{
            echo "pola Koszt paliwa oraz Spalanie to nie liczby zmiennoprzecinkowe";
        }

    ?>
</body>
</html>