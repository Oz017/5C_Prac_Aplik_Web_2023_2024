<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Plik_PHP</title>
</head>
<body>
    <?php
        print "Tekst - instrukcja print</br>";
        echo "Tekst - instrukcja echo";
    ?>
    <br>
    <?php 
        print "<b>Grafika:</b>" . "<i>php.gif</i>";
        print "<img src = \"php.gif\">";
    ?>
    <br><br>
    <?php
        define("IMIE", "Aleksander Ziembicki");
        define("ROK", "2004");
        $zawod = "informatyk";
        $wiek = 18;
        print(IMIE . "<br>");
        print($zawod . "<br>");
        print("rocznik - " . ROK . "<br>");
        print($wiek . " lat <br>");
        $a = 4;
        $b = 3;
        print( $a**$b);

        /*. - łączy łańcuchy znaków
         + dodawanie
         - odejmowanie
         * mnożenie 
         */

    ?>
</body>
</html>