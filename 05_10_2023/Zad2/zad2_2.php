<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        echo "<h3>Pętla FOR</h3>";
        for($i = $x; $i <= $y;$i+=2 ){
            echo $i.", ";
        }
        $i -= 2;
        echo "<br>" ;
        for ($i; $i >= 1; $i -= 4){
            echo $i.", ";
        }
        $i=$x;
        echo "<h3>Pętla WHILE</h3>";
        while($i<=$y){
            echo $i.", ";
            $i+=2;
        }
        $i-=2;
        echo "<br>";
        while($i>=1){
            echo $i.", ";
            $i-=4;
        }
        echo "<h3>Pętla DO WHILE</h3>";
       $i = $x;
       do{
        echo $i.", ";
        $i +=2;
       }while($i<=$y);
       $i -=2;
       echo "<br>";
       do{
        echo $i.", ";
        $i-=4;
       }while($i >=1);
    ?>
</body>
</html>