<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <?php
        echo "while<br>";
        $i = 100;
        while($i>90){
            echo $i.'; ';
            $i--;
        }
        echo "<br>";
        echo "for<br>";
        for($a=100;$a>90;$a--){
            echo $a.'; ';
        }

        echo "<br>";
        echo "do while<br>";
        $b = 100;
        do{
            echo $b.'; ';
            $b--;
        }while($b>90);
    ?>
</body>
</html>