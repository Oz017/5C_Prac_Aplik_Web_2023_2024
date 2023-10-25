<?php
    if(!isset($_COOKIE['hits'])) {
        $ile = 1;
    }else {
        $ile = (int)$_COOKIE['hits'];
        if($ile < 1){
            $ile = 1;
        }
        $ile++;
    }
    setcookie("hits","$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie++</title>
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

            if($ile == 2137){
                $link = "https://www.youtube.com/watch?v=0qzLRlQFFQ4";
                echo '<a href="'.$link.'">Oto twoja nagroda✔</a>';
            }
            ?>

    </p>
</body>
</html>