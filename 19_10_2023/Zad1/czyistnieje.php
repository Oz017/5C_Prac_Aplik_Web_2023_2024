<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czy zalogowano</title>
</head>
<body>
    <?php
        $user = 'root';
        $pass = '';
        $host = 'localhost';
        $db = 'az_baza';

        $login = $_POST['login'];
        $passw = $_POST['pass'];

        $connection = mysqli_connect($host,$user,$pass,$db);

        $statement = "SELECT * FROM logowanie WHERE `login` = '$login'";
        $result = mysqli_query($connection, $statement);

        $row = mysqli_fetch_row($result);

        if($row == NULL){
            echo "Dane logowania są błędne";
        }else{
            if($row[3] == $passw){
                echo "Pomyślnie zalogowano </br> Witaj: $row[4]";
            }else{
                echo "Dane logowania są błędne";
            }
        }
        
    ?>
</body>
</html>