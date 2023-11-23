<?php
session_start();
if($_SESSION['logged'] == false || $_SESSION['isAdmin'] == false){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuwanie użytkownika</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'login';
        $conn = mysqli_connect($host,$user,$pass,$db);
        $query1 = "SELECT * FROM users;";
        $result1 = mysqli_query($conn,$query1);
        echo "<table>";
        echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>userLogin</td>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result1)){
            echo "<tr>";
            echo "<td>". $row['ID']. "</td>";
            echo "<td>". $row['userLogin']. "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <form action="delUser.php" method="post">
        Usuń urzytkownika(po ID): <input type="number" name="id" id="identity"><br>
        <input type="submit" value="Usuń">
    </form>
    <?php
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $query = 'DELETE FROM `users` WHERE ID ='. $id;
            $result = mysqli_query($conn,$query);
            if($result == true){
                echo "<p>Usunięto użytkownika</p>";
            }else{
                echo "<p>Użytkownik o podanym ID nie istnieje</p>";
            }
        }
    ?>
    </main>
    <nav>
        <a href="podstrona1.php">Strona główna</a>
        <a href="addUser.php">Dodaj użytkownika</a>
        <a href="zmien_haslo.php">Zmień hasło</a>
        <a href = "logout.php" class="logout"> Wyloguj </a>        
    </nav>
   
</body>
</html>