<?php

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
        </table>

    </main>
    <footer>
        <section id="leftFooter">
            <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
        </section>
        <section id="midFooter">
            <?php
                echo '<p> OK</p>';
            ?>
        </section>
        <section id="rightFooter">
            Autor: Aleksander Ziembicki
        </section>
    </footer>
</body>
</html>