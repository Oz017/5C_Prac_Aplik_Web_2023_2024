<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['username'])){
            echo "Value of cookie named 'username' is:" . $_COOKIE['username'];
        }
    ?>
</body>
</html>