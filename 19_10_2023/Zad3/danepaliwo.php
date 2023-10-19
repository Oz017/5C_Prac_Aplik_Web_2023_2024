<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator kosztów</title>
</head>
<body>
    <form action="koszt.php" method="post">
        <label for="1">Podaj koszt paliwa:</label>
        <input type="text" name="kosztpal" id="1">
        <label for="2">Podaj ilość kilometrów:</label>
        <input type="number" name="distance" id="2">
        <label for="3">Podaj średnie spalanie:</label>
        <input type="text" name="spalanie" id="3">
        <input type="submit" value="Oblicz">
    </form>
</body>
</html>