<?php
session_start();
if($_SESSION['logged'] == false){
    header("Location: login.php");
}
if($_SESSION['isAdmin'] == false){
    header("Location: podstrona1.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie użytkownika</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <form action="addUser.php" method="post">
            <label for="login">Utwórz login:<input type="text" name="login" id="login"></label><br>
            <label for="pass">Utwórz hasło:<input type="text" name="pass" id="pass"></label><br>
            <input type="submit" value="Utwórz">
        </form>
    </main>
    <nav>
        <a href="login.php">Powrót do strony głównej</a>
        <a href="podstrona1.php">podstrona 1</a>
        <a href="delUser.php">Usuń użytkownika</a>
        <a href="zmien_haslo.php">Zmień hasło</a>
        <a href = "logout.php" class="logout" class="logout"> Wyloguj </a>        
    </nav>
    <?php
        if(isset($_POST['login'])){
            $login = $_POST['login'];
            $passw = $_POST['pass'];
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'login';
            $conn = mysqli_connect($host,$user,$pass,$db);
            $query = "INSERT INTO users (userLogin, pass, isAdmin) VALUES ('$login', '$passw', 0);";
            $result = mysqli_query($conn,$query);
            print "<p>Utworzono nowego użytkownika</p>";
        }
    ?>
</body>
</html>