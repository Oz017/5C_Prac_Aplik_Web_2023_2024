<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
    <?php
        echo "<h3>for</h3>";
        for($i = 1; $i<11;$i++){
            echo $i."<br>";
            echo sqrt($i)."<br><hr>";
        }

        echo "<h3>WHILE</h3>";
        $a = 1;
        while($a < 11){
            echo $a."<br>";
            echo sqrt($a)."<br><hr>";
            $a++;
        }

        echo "<h3>DO WHILE</h3>";
        $b = 1;
        do{
            echo $b."<br>";
            echo sqrt($b)."<br><hr>";
            $b++;
        }while($b<11);
    ?>
</body>
</html>