<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
   <?php
   echo "<h2> Pętla FOR </h2>";
   echo "<table style = 'border-collapse: collapse;'>";
   for($i = 0; $i <= 10; $i++){
        echo "<tr style = 'border-top: 1px black solid;'>";
        echo "<td style = 'width: 20px; height:20px'>".$i."</td>";
        for ($j = 1; $j<=10; $j++){
            echo "<td style = 'width: 20px; height:20px'>";
            if($i>0){
            echo $i*$j." ";
            }else{
                echo $j." ";
            }
            echo "</td>";
        }
        echo "</tr>";
   }
   echo "</table>";

   echo "<h2> Pętla WHILE </h2>";

   $a = 0;
   
   echo "<table style = 'border-collapse: collapse;'>";
   while($a<=10){
    echo "<tr style = 'border-top: 1px black solid;'>";
    echo "<td style = 'width: 20px; height:20px'> $a </td>";
    $b = 1;
    while($b <=10){
        echo "<td style = 'width: 20px; height:20px'>";
        if($a>0){
            echo $a*$b." ";
        }else{
            echo $b." ";
        }
        echo "</td>"; 
        $b++; 
        }
        echo "</tr>";
        $a++;
    }
   echo "</table>";

    
    echo "<h2> Pętla DO WHILE </h2>";

    $a = 0;
    
    echo "<table style = 'border-collapse: collapse;'>";
    do{
     echo "<tr style = 'border-top: 1px black solid;'>";
     echo "<td style = 'width: 20px; height:20px'> $a </td>";
     $b = 1;
        do{
         echo "<td style = 'width: 20px; height:20px'>";
         if($a>0){
             echo $a*$b." ";
         }else{
             echo $b." ";
         }
         echo "</td>"; 
         $b++; 
         }while($b<=10);
         echo "</tr>";
         $a++;
     }while($a <=10);
     

   ?>
</body>
</html>