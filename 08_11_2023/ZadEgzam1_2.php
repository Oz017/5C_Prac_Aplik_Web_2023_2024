<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przeliczanie walut</title>
</head>
<body>
    <?php
        $pl = floatval($_POST['pl']);
        $change = $_POST['currency'];
        
        define('euro',4.32);
        define('dolar',3.21);
        define('frank',3.98);

        switch($change){
            case 'euro':
                $convert = $pl/euro;
                echo "Twoje pieniądze w Euro to $convert";
            break;
            case 'dolar':
                $convert = $pl/dolar;
                echo "Twoje pieniądze w Euro to $convert";
            break;
            case 'frank':
                $convert = $pl/frank;
                echo "Twoje pieniądze w Euro to $convert";
            break;
        }

    ?>
</body>
</html>