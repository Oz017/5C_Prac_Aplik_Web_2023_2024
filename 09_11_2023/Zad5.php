<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
    <?php
        $a = 5;
        $b = -5;
        function f($x){
            return 3*$x -6;
        }

        function polowienie_przedzialow($a,$b,$epsilon){
            if(f($a) == 0.0) return $a;
            if(f($b) == 0.0) return $b;

            $middle = ($a + $b)/2;

            if($b-$a <= $epsilon){return $middle;}
            
            if(f($a)*f($middle)<0){
                return polowienie_przedzialow($a,$middle,$epsilon);
            }else{
                return polowienie_przedzialow($middle,$b,$epsilon);
            }
        }

        echo "miejsce zerowe to ". polowienie_przedzialow(2,6,0.01);

    ?>
</body>
</html>