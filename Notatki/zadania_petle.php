<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania pętle</title>
</head>
<body>
    <?php
        echo "<h3> Zadanie 1</h1>";
        for($i=0;$i<=100;$i++){
            if($i %2 == 0){
                echo "$i; ";
            }
        }
        echo "<h3> Zadanie 2</h1>";
        for($i = 1; $i <=50; $i++){
            if($i %3 == 0){
                if($i%5 == 0){
                    continue;
                }else{
                    print "$i; ";
                }
            }
        }
        echo "<h3> Zadanie 3</h1>";
        for($i = 1; $i<= 10;$i++){
           for($k =1;$k<=10;$k++){
                $iloczyn = $i*$k;
                echo "$iloczyn ";
           }
           echo "<br>";
        }


    ?>
</body>
</html>