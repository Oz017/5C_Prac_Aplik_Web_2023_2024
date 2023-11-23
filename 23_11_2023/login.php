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
    <link rel="stylesheet" href="styl1.css">
    <title>Zaloguj się</title>
</head>
<body>
    <main>
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
            $query = "SELECT * FROM users WHERE userLogin = '$login' AND pass = '$pass';";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($result);
            if($row['userLogin'] != $login){
                $_SESSION['logged'] = false;
                

            }else{
                $_SESSION['logged'] = true;
                $_SESSION['UID'] = $row['ID'];
                print '<nav>';
                print '<a href = "zmien_haslo.php">Zmiana hasła</a>';
                print '<a href = "podstrona1.php">Podstrona 1</a>';
                if($row['isAdmin'] == 1){
                    $_SESSION['Admin'] = true;
                    print '<a href = "addUser.php">Dodaj użytkownika</a>';
                    print '<a href = "delUser.php">Usuń użytkownika</a>';
                }
                print '<button>Wyloguj</button>';
                print '</nav>';
            }
            mysqli_close($conn);
        }
        if($_SESSION['logged'] == true){
            print '<nav>';
                print '<a href = "zmien_haslo.php">Zmiana hasła</a>';
                print '<a href = "podstrona1.php">Podstrona 1</a>';
                if($row['isAdmin'] == 1){
                    $_SESSION['Admin'] = true;
                    print '<a href = "addUser.php">Dodaj użytkownika</a>';
                    print '<a href = "delUser.php">Usuń użytkownika</a>';
                }
                print '<button>Wyloguj</button>';
                print '</nav>';
        }
    ?>
</body>
</html>