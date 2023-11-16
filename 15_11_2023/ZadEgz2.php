<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badanie</title>
</head>
<body>
    <form action="ZadEgz2.php" method="post">
        <label for="nazwisko">Podaj Nazwisko:</label>
        <input type="text" name="nazwisko" id="nazwisko"><br>
        <label for="imie">Podaj Imie:</label>
        <input type="text" name="imie" id="imie"><br>
        <label for="nazwisko">Podaj ocene:</label>
        <input type="number" name="ocena" id="ocena" min="1" max="6"><br>
        <input type="submit" value="Prześlij">
    </form>
    <?php
         $host = 'localhost';
         $user = 'root';
         $pas = '';
         $db = 'imiona';
        
         if(isset($_POST['nazwisko'])){
            $conn = mysqli_connect($host,$user,$pas,$db);
            $nazwisko = $_POST['nazwisko'];
            $imie = $_POST['imie'];
            $ocena = $_POST['ocena'];
            $query1 = "INSERT INTO oceny(nazwisko, imie, ocena) VALUES ('$nazwisko','$imie','$ocena');";
            $result1 = mysqli_query($conn,$query1);
            $query2 = 'SELECT * FROM oceny';
            $result2 = mysqli_query($conn,$query2);
            $query3 = 'SELECT AVG(ocena) FROM oceny;';
            $result3 = mysqli_query($conn,$query3);
           
           echo "<table> <tr><td>ID</td><td>Nazwisko</td><td>Imie</td><td>Ocena</td></tr>";
            while($row = mysqli_fetch_assoc($result2)){
                echo "<tr>";
                echo "<td>". $row['ID'] . "</td>";
                echo "<td>". $row['nazwisko'] . "</td>";
                echo "<td>". $row['imie'] . "</td>";
                echo "<td>". $row['ocena'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            while($avg = mysqli_fetch_row($result3)){
                for($i = 0; $i < count($avg); $i++){
                    print "<p>Średnia ocen to: $avg[$i]</p>";
                }
            }

            mysqli_close($conn);
         }
         

    ?>
</body>
</html>