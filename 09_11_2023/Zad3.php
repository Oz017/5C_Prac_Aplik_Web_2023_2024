<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <?php
        echo "while<br>";
        $i = 100;
        while($i<=120){
            if($i%5 == 0){
                echo $i.'; ';
            }
            $i++;
        }
        echo "<br>";
        echo "for<br>";
        for($a=100;$a<=120;$a++){
           if($a%5 == 0){
                echo $a.'; ';
           }
        }

        echo "<br>";
        echo "do while<br>";
        $b = 100;
        do{
            if($b%5 == 0){
                echo $b.'; ';
            }
            $b++;
        }while($b<=120);
    ?>
</body>
</html>