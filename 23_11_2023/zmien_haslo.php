<?php
session_start();
if($_SESSION['logged'] == false){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmiana hasła</title>
</head>
<body>
    <main>
        <form action="zmien_haslo.php" method="post">
            <label for="newPass">Podaj nowe hasło: <input type="text" name="newPass" id="newPass"></label><br>
            <input type="submit" value="Zmień hasło">
        </form>
    </main>
    <nav>
        <a href="login.php">Powrót do strony głównej</a>
        <a href="podstrona1.php">Podstrona 1</a>
    </nav>
    <?php
        if(isset($_POST['newPass'])){
            $newPass = $_POST['newPass'];
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'login';
            $conn = mysqli_connect($host,$user,$pass,$db);
            $query = "UPDATE SET pass = '$newPass' WHERE ID = '".$_SESSION['UID']."';";
            $result = mysqli_query($conn,$query);
            print "<p>Pomyślnie zmieniono hasło</p>";
        }
    ?>
</body>
</html>