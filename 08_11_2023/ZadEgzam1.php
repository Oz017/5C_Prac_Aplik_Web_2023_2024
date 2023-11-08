<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przeliczanie walut</title>
</head>
<body>
    <form action="ZadEgzam1_2.php" method="post">
        <label for="zl">Podaj ilość pieniędzy w PLN</label>
        <input type="text" name="pl" id="zl"></br>
        <input type="radio" name="currency" id="euro" value = 'euro' required>
        <label for="euro">Euro</label><br>
        <input type="radio" name="currency" id="dolar" value = 'dolar' required>
        <label for="dolar">Dolar</label><br>
        <input type="radio" name="currency" id="frank" value = 'frank' required>
        <label for="frank">Frank</label><br>
        <input type="submit" value="przelicz">
    </form>
</body>
</html>