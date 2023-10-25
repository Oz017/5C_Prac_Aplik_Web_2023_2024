<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie z bazą danych</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Tytuł</td>
            <td>Reżyser</td>
            <td>Czas</td>
        </tr>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "baza_filmow";

        $polonczenie = mysqli_connect($host,$user,$pass,$db);

        $zapytanie = "SELECT ID, tytul, rezyser, czas FROM filmy";

        $wynik = mysqli_query($polonczenie,$zapytanie);
        while($row = mysqli_fetch_assoc($wynik)){
            echo "<tr>";
            echo "<td>". $row['ID']. "</td>";
            echo "<td>". $row['tytul']. "</td>";
            echo "<td>". $row['rezyser']. "</td>";
            echo "<td>". $row['czas']. "</td>";
            echo "</tr>";
            

        }
            
        
    ?>
    </table>
</body>
</html>