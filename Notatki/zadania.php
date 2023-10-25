<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadania</title>
</head>
<body>
    <?php
        echo "<h3>Zad.1</h3>";
        $a = 41;
        $b = 12;
        $c = 2;

        if($a > $b && $a > $c){
            echo "Największa liczba to: $a";
        } elseif ($b> $a && $b > $c){
            echo "Największa liczba to: $b";
        }else {
            echo "Największa liczba to: $c";
        }
        #ZAD.2
        echo "<h3>Zad.2</h3>";
        $liczba = 2;
        if($liczba == 0){
            echo "Podana liczba jest równa zero";
        } elseif ($liczba > 0){
            echo "Podana liczba jest większa niż zero";
        }else{
            echo "Podana liczba jest mniejsza niż zero";
        }
        
        /*switch($liczba){
            case 0:
                echo "Podana liczba jest równa zero";
                break;
            case $liczba<0:
                echo "Podana liczba jest mniejsza niż zero";
                break;
            default:
                echo "Podana liczba jest większa zero";
        }
        */
        echo "<h3>Zad.3</h3>";
        $number = 22;
        if($number % 2 == 0){
            echo "Liczba $number jest parzysta";
        }else{
            echo "Liczba $number nie jest parzysta";
        }

        echo "<h3>Zad.4</h3>";
        $liczba_A = -3;
        $liczba_B = 6;
        $liczba_C = 12;

        if($liczba_A == 0){
            echo "liczba A nie może być równa zero";
        }else{
            #Ax=b+c
            $wynik = ($liczba_C-$liczba_B)/$liczba_A;
            echo "Rozwiązanie równania $liczba_A * x + $liczba_B = $liczba_C to: x = $wynik";
        }

        echo "<h3>Zad.5</h3>";
        $zmiennaA = 1;
        $zmiennaB = 1;
        $zmiennaC = 1;
        if($zmiennaA == 0){
            echo "pamiętaj żeby nie dzielić przez zero";
        }else{
            $delta = pow($zmiennaB,2) - (4*$zmiennaA*$zmiennaC);
            if($delta<0){
                echo "Delta jest mniejsza niż 0. Brak miejsc zerowych";
            }elseif($delta ==0){
                $x0 = (-$zmiennaB - sqrt($delta))/(2*$zmiennaA);
                echo "Delta jest równa: $delta , miejsca zerowe to: x<sub>0</sub>= $x0 ";

                }
                else{
                $x1 = (-$zmiennaB - sqrt($delta))/(2*$zmiennaA);
                $x2 = (-$zmiennaB + sqrt($delta))/(2*$zmiennaA);
                echo "Delta jest równa: $delta , miejsca zerowe to: x<sub>1</sub>= $x1 , x<sub>2</sub>= $x2";
                }

        }


        






    ?>
</body>
</html>