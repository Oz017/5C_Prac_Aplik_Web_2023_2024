<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania pętle</title>
</head>
<body>
    <?php
        echo "<h3>Zad.1</h3>";
        for($i =1; $i<11; $i++){
            echo "$i, ";
        }
        echo "<h3>Zad.2</h3>";
        $liczba = 1;
        while($liczba <= 20){
            if($liczba%2 == 0){
                echo "$liczba, ";
            }
            $liczba++;
        }
        /*echo "<h3>Zad.3</h3>";
            do pominięcia*/
        echo "<h3>Zad.4</h3>";
        for($i = 1; $i <11; $i++){
            $potega = pow($i,2);
            echo "$potega, ";

        }
        echo "<h3>Zad.5</h3>";
        $zad5 = 1;
        $suma = 0;
        while($zad5 <= 100){
            $suma += $zad5;
            echo "$zad5 Suma = $suma,<br> ";
            $zad5++;
        }
        // Zadanie 6 do pominięcia
        echo "<h3>Zad.7</h3>";
        for($i =1; $i<11; $i++){
            echo "$i, ";
        }

        echo "<h3>Zad.9</h3>";
        $zad9 =5;
        $silnia = 1;
       do {
        $silnia *= $zad9;
        $zad9--;
       }
        while($zad9 > 1);
        echo "$silnia";
        echo "<h3>Zad.10</h3>";
            for($i = 1; $i<11; $i++){
                $mnozenie = $i*5;
                echo "$mnozenie, ";
            }

        echo "<h3>Zad.11</h3>";
        $zad11 = 97;
        while($zad11 <= 122){
            $litera = chr($zad11);
            echo "$litera, ";
            $zad11++;

        }
        
        echo "<h3>Zad.13</h3>";
        $suma13 = 0;
        for($i =1; $i <=50; $i++){
            if($i%2 == 0 ){
                $suma13 += $i;
            }else continue;
        }
        echo "$suma13";
        echo "<h3>Zad.14</h3>";
        $zad14 = 1;
        while(pow($zad14,2) <=1000){
            echo pow($zad14,2)." ";
            $zad14++;
        }
        echo "<h3>Zad.16</h3>";
        for($i=1; $i <=30; $i++){
            if($i%3 == 0){
                echo "$i, ";
            }
        }
        $czyJestPierwsza = false;
        echo "<h3>Zad.19</h3>";
        for ($i = 1;$i <=100; $i++){
            if ($i == 2){
                $czyJestPierwsza = True;
            }else{
            for($k =2; $k<$i; $k++){
                if($i%$k == 0){
                    $czyJestPierwsza = false;
                    break;
                }else{
                    $czyJestPierwsza = true;
                }
               
            }
            }
            if($czyJestPierwsza == true){
                echo "$i,";
            }
        }


    ?>
</body>
</html>