<?php
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $birthDate = $day . "." . $month;
    $cookie_name = 'Birthday';
    setcookie($cookie_name,$birthDate,time() + 31536000);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czy urodziny</title>
</head>
<body>
    <?php
        $currentDate = date("d.m");
        if(isset($_COOKIE[$cookie_name])){
            if($currentDate == $_COOKIE[$cookie_name]){
                echo "Wszystkiego najlepszego 🎂🎂🎁";
            }
        }

    ?>
</body>
</html>