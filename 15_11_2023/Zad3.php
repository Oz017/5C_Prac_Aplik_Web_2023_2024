<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'egzamin';
        $connect = mysqli_connect($host,$user,$pass,$db);
        if(mysqli_connect_errno()){
            echo "Nie udało się połączyć z MySql" . mysqli_connect_errno();
            exit();
        }
        mysqli_close($connect);

    ?>
</body>
</html>