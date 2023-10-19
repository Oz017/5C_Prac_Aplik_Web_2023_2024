<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podaj Kolor</title>
</head>
<body>
    <form action="kolory.php" method="post">
        <label for="bgcolor">Podaj kolor tła (,np FFFFFF):</label>
        <input type="text" name="bgcolor" id="bgcolor"  ><br>
        <label for="txtcolor">Podaj kolor tekstu (,np FFFFFF):</label>
        <input type="text" name="txtcolor" id="txtcolor"><br>
        <input type="submit" value="Wyślij">
    </form>
</body>
</html>