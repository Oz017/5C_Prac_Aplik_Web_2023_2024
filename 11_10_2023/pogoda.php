<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl2.css">
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <header>
        <section id="banner1">
            <img src="logo.png" alt="meteo">
        </section>
        <section id="banner2">
            <h1>Prognoza dla Wrocławia</h1>
        </section>
        <section id="banner3">
            <p>maj, 2019 r.</p>
        </section>
    </header>
     <main>
         <table>
            <tr>
                <th>DATA</th>
                 <th>TEMPERATURA W NOCY</th>
                 <th>TEMPERATURA W DZIEŃ</th>
                 <th>OPADY [mm/h]</th>
                 <th>CIŚNIENIE [hPa]</th>
                </tr>
                <?php
                    $host = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "prognoza";

                    $connection = mysqli_connect($host, $user, $pass, $db);

                    $kw = 'SELECT * FROM `pogoda` WHERE miasta_id = 1 ORDER BY data_prognozy ASC;';
                    $result = mysqli_query($connection, $kw);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>". $row['data_prognozy']. "</td>";
                        echo "<td>". $row['temperatura_noc']. "</td>";
                        echo "<td>". $row['temperatura_dzien']. "</td>";
                        echo "<td>". $row['opady']. "</td>";
                        echo "<td>". $row['cisnienie']. "</td>";
                        echo "</tr>";
                    }

                    mysqli_close($connection);
                ?>
            </table>
     </main>
    <aside>
            <img src="obraz.jpg" alt="Polska Wrocław">
    </aside>
    <nav>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </nav>
    <footer>
            <p>Stronę wykonał: Aleksander Ziembicki</p>
    </footer>
    
</body>
</html>