<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamów pizzę</title>
</head>
<body>
    <form action="pizza.php" method="post">
        <label for="1">odległość w kilometrach:</label>
        <input type="number" name="km" id="1"></br>
        <label for="check">Ciepła</label>
        <input type="checkbox" name="hot" id="check" value="true">
        <input type="submit" value="sprawdź">
    </form>
</body>
</html>