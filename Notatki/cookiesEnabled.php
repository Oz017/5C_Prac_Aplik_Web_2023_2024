<?php
    setcookie("testcookie","test",time()+3600,'/')
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookiesEnabled</title>
</head>
<body>
    <?php
        if(count($_COOKIE) > 0){
            echo "Cookies are enabled.";
        }else{
            echo "Cookies are disABLED. Please enable cookies.";
        }
    ?>
</body>
</html>