<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 8</title>
</head>
<body>
    <?php
     $x = $_POST['x']; //kolumny
     $y = $_POST['y']; // wiersze

     echo "<table>";
     for($i = 1;$i <= $y; $i++){
        echo "<tr>";
        if($i % 2 == 0){
            for($j = 1; $j <= $x; $j++){
                echo "<td style = 'height: 20px; width:20px;border: 1px solid black;'>";
                if($j % 2 == 0){
                    echo "X";
                }else{
                    echo "O";
                }
                echo "</td>";
            }
        }else{
            for($j = 1; $j <= $x; $j++){
                echo "<td style = 'height: 20px; width:20px; border: 1px solid black;'>";
                if($j % 2 == 0){
                    echo " O";
                }else{
                    echo " X";
                }
                echo "</td>";
            }
        }
        echo "</tr>";
     }
     echo "</table";
    ?>
</body>
</html>