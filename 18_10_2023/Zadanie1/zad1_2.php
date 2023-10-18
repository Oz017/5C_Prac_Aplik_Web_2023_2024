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

        $id = $_POST['id'];
        $birthyear = $_POST["year"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $num = $_POST["nr"];

        $connection = mysqli_connect($host, $user, $pass, $db);

        $query = "INSERT INTO `matematycy`( `id`, `imie`, `nazwisko`, `rok_urodzenia`, `liczba_publikacji`) VALUES ( '$id', '$firstName', '$lastName', '$birthyear' , '$num' );";

        $result = mysqli_query($connection,$query);

        if ($result == TRUE){
            echo "Utworzono nowy rekord";
        }else{
            echo "Błąd: " . $query . "</br>" . mysqli_error($connection);
        }

        mysqli_close($connection);
    ?>
</body>
</html>