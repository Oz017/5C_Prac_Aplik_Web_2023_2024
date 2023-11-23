<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Strona główna</title>
</head>
<body>
    <?php
        session_start();
        if($_SESSION['logged']== false){
            header('Location: login.php');
        }
        print "<h2> Witaj ". $_SESSION['login']."! </h2>";
    ?>
    <nav>
        <a href="podstrona1.php">Strona Główna</a>
        <?php
        if($_SESSION['isAdmin'] == true){
            echo '<a href="addUser.php">Dodaj użytkownika</a>';
            echo '<a href="delUser.php">Usuń użytkownika</a>';
           
        }
        echo '<a href="zmien_haslo.php">Zmień hasło</a>';
        ?>
        <a href = "logout.php" class="logout"> Wyloguj </a>        
    </nav>
</body>
</html>