<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOLOR</title>
    <style>
        p{
            height: 50%;
            width:50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            border: 1px dashed red;
        }
    </style>
</head>
<body>
    <?php
    $bgcolor =  $_POST['bgcolor'];
    $color = $_POST['txtcolor'];
    if(strlen($bgcolor) != 6 || strlen($color) != 6){
        echo "Długość zmiennej niepoprawna - prawidłowa długość to 6";
    }else{
        $bgcolor = '#'. $bgcolor;
        $color = '#'. $color;

        echo "<p style = 'background-color: $bgcolor ; color: $color;'>Aleksander Ziembicki</p>"; 
    }

   
    ?>
</body>
</html>