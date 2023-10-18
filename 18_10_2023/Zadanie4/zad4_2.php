<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
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

        $query = "UPDATE `matematycy` SET imie='$firstName',nazwisko='$lastName',rok_urodzenia='$birthyear',liczba_publikacji='$num' WHERE id = '$id';";

        $result = mysqli_query($connection,$query);

        if ($result == TRUE){
            echo "Pomyślnie zedytowano rekord</br>";
            $query2 = "SELECT * FROM matematycy WHERE id = '$id';";
            $result2 = mysqli_query($connection, $query2);
            echo "<table>";
            echo " <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Rok Urodzenia</th>
            <th>Liczba publikacji</th>
            </tr>";
            while($row = mysqli_fetch_assoc($result2)){
                echo "<tr>";
                echo "<td>". $row['id'] . "</td>";
                echo "<td>". $row['imie'] . "</td>";
                echo "<td>". $row['nazwisko'] . "</td>";
                echo "<td>". $row['rok_urodzenia'] . "</td>";
                echo "<td>". $row['liczba_publikacji'] . "</td>";
                echo "</tr>";
             }
            echo "</table>";

        }else{
            echo "Błąd: " . $query . "</br>" . mysqli_error($connection);
        }

        mysqli_close($connection);
    ?>
</body>
</html>