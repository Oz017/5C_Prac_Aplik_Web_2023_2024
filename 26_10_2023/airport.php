<?php
    $cookiename = "IsVisited";
    $cookievalue = "Dzień Dobry!";
    if(!isset($_COOKIE[$cookiename])){
    setcookie($cookiename,$cookievalue,time()+3600);
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <section id="bannerLeft">
            <h2>Odloty z lotniska</h2>
        </section>

        <section id="bannerRight">
            <img src="zad6.png" alt="logotyp">
        </section>
    </header>
    <main>
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            <?php
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'egzamin';

                $connect = mysqli_connect($host,$user,$pass,$db);

                $query = 'SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM `odloty` ORDER BY czas DESC;';

                $result = mysqli_query($connect,$query);

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>". $row['id']."</td>";
                    echo "<td>". $row['nr_rejsu']."</td>";
                    echo "<td>". $row['czas']."</td>";
                    echo "<td>". $row['kierunek']."</td>";
                    echo "<td>". $row['status_lotu']."</td>";
                    echo "</tr>";
                }
                mysqli_close($connect);
            ?>
        </table>

    </main>
    <footer>
        <section id="leftFooter">
            <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
        </section>
        <section id="midFooter">
            <?php
                if(!isset($_COOKIE[$cookiename])){
                    echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
                }else echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
            ?>
        </section>
        <section id="rightFooter">
            Autor: Aleksander Ziembicki
        </section>
    </footer>
</body>
</html>