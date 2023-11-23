<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>wylogowano</title>
</head>
<body>
    <?php
        session_start();
        session_destroy();
        echo "<h3 class = 'logout'>Wylogowano<h3>";
        header('Location: login.php');
    ?>
</body>
</html>