<?php
    if(!isset($_COOKIE['visits'])){
        $ile = 1;
    }else{
        $ile = (int)$_COOKIE['visits'];
        if($ile < 1){
            $ile = 1;
        }
        $ile++;
    }
    setcookie("visits","$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>
<p>
        <?php
            if($ile == 1){
                $str = "raz";
            }else{
                $str = "razy";
            }

            echo "Witamy odwiedziłeś nas $ile $str.";

            if($ile == 36){
                echo '</br>Gratuluje odkryłeś easteregg-a';
            }
            ?>
</body>
</html>