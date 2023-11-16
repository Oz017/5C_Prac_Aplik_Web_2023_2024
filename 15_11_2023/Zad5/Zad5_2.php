<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Imie</td>
            <td>Nazwisko</td>
            <td>Data Urodzenia</td>
        </tr>
        <?php
            $host = 'localhost';
            $user = 'root';
            $pas = '';
            $db = 'imiona';

            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $data = $_POST['data'];

            $conn = mysqli_connect($host,$user,$pas,$db);
            $query = 'SELECT * FROM dane';
            $query2 = "INSERT INTO dane(imie, nazwisko, dataUrodzenia) VALUES ('$imie', '$nazwisko', '$data');";
            $insert = mysqli_query($conn,$query2);
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row['ID'] . "</td>";
                echo "<td>". $row['imie'] . "</td>";
                echo "<td>". $row['nazwisko'] . "</td>";
                echo "<td>". $row['dataUrodzenia'] . "</td>";
                echo "</tr>";

            }
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>