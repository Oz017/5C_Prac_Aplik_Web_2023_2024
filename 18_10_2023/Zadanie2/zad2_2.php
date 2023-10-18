<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
    <style>
        table{
            border-collapse: collapse;
            border: 1px solid;
        }
        td{
           border: 1px solid; 
        }
        th{
           border: 1px solid; 
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Rok Urodzenia</th>
            <th>Liczba publikacji</th>
        </tr>
        <?php
             $host = "localhost";
             $user = "root";
             $db = "prognoza";
             $pass = "";

             $id = $_POST["id"];

             $connection = mysqli_connect($host, $user, $pass, $db);

             $query = "SELECT * FROM matematycy WHERE id = '$id';";

             $result = mysqli_query($connection,$query);

             while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row['id'] . "</td>";
                echo "<td>". $row['imie'] . "</td>";
                echo "<td>". $row['nazwisko'] . "</td>";
                echo "<td>". $row['rok_urodzenia'] . "</td>";
                echo "<td>". $row['liczba_publikacji'] . "</td>";
                echo "</tr>";
             }
             mysqli_close($connection);
        ?>
    </table>
    
</body>
</html>