<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
    <form action="zad4_2.php" method="post">
        <label for="id1">Podaj ID rekordu który chcesz zmienić</label>
        <input type="number" name="id" id="id1"></br>
        <label for="imie">Podaj nowe imię</label>
        <input type="text" name="firstName" id="imie"></br>
        <label for="nazwisko">Podaj nowe nazwisko:</label>
        <input type="text" name="lastName" id="nazwisko"></br>
        <label for="rok">podaj nowy Rok urodzenia</label>
        <input type="number" name="year" id="rok"></br>
        <label for="liczba">podaj nową liczbę publikacji:</label>
        <input type="number" name="nr" id="liczba">
        <input type="submit" value="Wyśij">
    </form>
</body>
</html>