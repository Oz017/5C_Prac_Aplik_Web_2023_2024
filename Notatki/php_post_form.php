<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Post</title>
</head>
<body>
    <p>
        <?php
            $zmienna = $_POST["pole1"];
            for($i=0;$i<2000;$i++){
            echo "$zmienna";
            }
        ?>
    </p>
</body>
</html>