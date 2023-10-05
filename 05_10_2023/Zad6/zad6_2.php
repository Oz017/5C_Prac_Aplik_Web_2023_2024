<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
    <?php
     $x = $_POST['x'];
     $y = $_POST['y'];
     
     echo "<table>";
     for ($i = 1; $i <= $y; $i++){
        echo '<tr>';
        for ($j = 1; $j <= $x; $j++){
            if ($i == 1 || $i == $y || $j == 1 || $j == $x){
                echo '<td>*</td>';
            }else{
                echo '<td></td>';
            }
        }
        echo "</tr>";
     }
     echo "</table>"
    ?>
</body>
</html>