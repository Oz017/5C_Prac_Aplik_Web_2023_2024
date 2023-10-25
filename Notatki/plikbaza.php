<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie z bazą danych</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "baza_filmow";

        $polonczenie = mysqli_connect($host,$user,$pass,$db);

        $zapytanie = "SELECT * FROM filmy";

        $wynik = mysqli_query($polonczenie,$zapytanie);

        while($wiersz_danych = mysqli_fetch_row($wynik)){
            for( $i = 0; $i <count($wiersz_danych);$i++){
                print $wiersz_danych[$i]." ";
            }
            print "<br>";
            
        }
    ?>
</body>
</html>