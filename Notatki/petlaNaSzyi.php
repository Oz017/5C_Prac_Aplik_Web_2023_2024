<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle</title>
</head>
<body>
    <?php 
        for($i = 1; $i <= 5; $i++){
            if($i %2 ==0){
            echo "Petla wykonana $i raz/y pętlą for<br>";
            }else continue;
        }

        $i = 0;
        while ($i <5){
            print "Pętla wykonana $i raz /y pętlą while<br>";
            $i++;
        }

        $i = 0;
        do{
            print "Pętla wykonana $i raz /y pętlą do while<br>";
        } while($i++<5);

        $tab = array(
            1 => 'bialy',
            2 => '<b>czarny</b>',
            3 => 'niebieski',
            4 => 'zielony',
        ) ;
        foreach($tab as $x){
            echo "$x </br>";
        }

        $i = 0;
        while(true){
            echo( "Wypisz $i <br>");
            if($i >= 20){
                break;
            }
            $i++;
        }

        for($i =0; $i<=30; $i++){
            if($i % 3 != 0){
                continue;
            }
            echo "$i;";
        }
    ?>
</body>
</html>