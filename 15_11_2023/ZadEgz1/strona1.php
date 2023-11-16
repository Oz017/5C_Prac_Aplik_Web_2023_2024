<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badanie</title>
</head>
<body>
    <h1>Badanie</h1>
    <p>Ta strona zapisuje wprowadzone przez ciebie dane</p>
    <form action="strona1.php" method="post">
        <label for="data">Podaj rok urodzenia:</label>
        <input type="number" name="year" id="data"><br>
        <label for="plec"><input type="radio" name="plec" id="plec" value="mężczyzna">Mężczyzna</label>
        <label for="plec"><input type="radio" name="plec" id="plec" value="kobieta">Kobieta</label></br>
        <label for="uwaga">Uwagi</label></br>
        <textarea name="uwaga" id="uwaga" cols="50" rows="2" maxlength="100"></textarea><br>
        <label for="zgoda"><input type="checkbox" name="zgoda" id="zgoda">Wyrażam zgode na udział w badaniu</label></br>
        <input type="submit" value="Prześlij">

    </form>
    <?php
         $host = 'localhost';
         $user = 'root';
         $pas = '';
         $db = 'imiona';
        
         if(isset($_POST['year'])){
            $conn = mysqli_connect($host,$user,$pas,$db);
            $year = $_POST['year'];
            $plec = $_POST['plec'];
            $uwaga = $_POST['uwaga'];
            if(isset($_POST['zgoda'])){
                $zgoda = 'Tak';
            }else $zgoda = 'Nie';
            $query = "INSERT INTO dane_klientow(dataUr, plec, uwagi, zgoda) VALUES ('$year','$plec','$uwaga', '$zgoda');";
            $result = mysqli_query($conn,$query);
            echo "<p>Dziękuje za przesłanie danych</p>";
            mysqli_close($conn);
         }
         

    ?>
</body>
</html>