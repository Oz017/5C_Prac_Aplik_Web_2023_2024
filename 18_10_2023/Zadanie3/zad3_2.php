<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $db = "prognoza";
        $pass = "";

        $id = $_POST["id"];


        $connection = mysqli_connect($host, $user, $pass, $db);

        $query = "DELETE FROM matematycy WHERE id = '$id';";

        $result = mysqli_query($connection,$query);

        if ($result == TRUE){
            echo "Usunięto rekord o ID: $id";
        }else{
            echo "Błąd: " . $query . "</br>" . mysqli_error($connection);
        }

        mysqli_close($connection);


    ?>
</body>
</html>