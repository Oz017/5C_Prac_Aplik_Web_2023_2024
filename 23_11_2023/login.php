<?php
    session_start();
    if(!isset($_SESSION['logged'])){
        $_SESSION['logged'] = false;
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Zaloguj się</title>
</head>
<body>
    <main id = "login-table">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="login">Login:<input type="text" name="login" id="login"></label><br>
            <label for="haslo">Password:<input type="text" name="pass" id="haslo"></label><br>
            <input type="submit" value="Log in">
        </form>
    </main>
    <?php
        $host = 'localhost';
        $user = 'root';
        $psw = '';
        $db = 'login';
        if(isset($_POST['login'])){
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $conn = mysqli_connect($host,$user,$psw,$db);
            $query = "SELECT * FROM users WHERE userLogin = '$login'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($result);
            if( mysqli_num_rows($result) == 0){
                $_SESSION['logged'] = false;
                echo "<p class = 'errorMsg'>Błędna nazwa użytkownika</p>";

            }else{
            if($row['userLogin']==$login && $row['pass'] == $pass){
                $_SESSION['logged'] = true;
                $_SESSION['UID'] = $row['ID'];
                $_SESSION['login'] = $row['userLogin'];
                if($row['isAdmin'] == 1){
                    $_SESSION['isAdmin'] = true;
                }else{
                    $_SESSION['isAdmin'] = false;
                }
                header("Location: podstrona1.php");
            }else{
                print "<p class ='errorMsg'>Błędna nazwa użytkownika lub hasło</p>";
            }
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>