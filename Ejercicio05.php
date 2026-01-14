<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        echo "<h1>Exercise05</h1>";
        //numero generado
        
        $sum = 0;
        $contadorPares = 0;
        $contadorImpares = 0;
        //repetir hasta que sumando superen a 100
        while ($sum <= 100) {
            $number = rand(0,20);
            echo $number . " , ";
            $sum += $number;
        //Contador de pares e impares
            if ($number % 2 == 0) {
                $contadorPares++;
            }else{
                $contadorImpares++;
            }
        }     
        echo "<br>";
        echo "The sum total is " . $sum;
        echo "<br>";
        echo "There were " . $contadorPares . " numbers";
        echo "<br>";
        echo "There were " . $contadorImpares . " numbers";

        

        

           
        

       
            
        
              

        
      
        ?>
</body>
</html>