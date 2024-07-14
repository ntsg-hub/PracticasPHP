<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    
</head>
<body>

    <?php
        echo "Hola Mundo","<br>";
        $fecha=date("d/m/y");
        echo "Hoy es: ",$fecha, "<br>"; 

        $numaleatorio=rand(1,100);
        echo "Numero Aleatorio:  ",$numaleatorio, "<br>";

        $dia = 24; //Se declara una variable de tipo integer.
        $sueldo = 758.43; //Se declara una variable de tipo double.
        $nombre = "juan"; //Se declara una variable de tipo string.
        $exite = true; //Se declara una variable boolean.

        echo $dia, " " ,$sueldo, " ",$nombre, " ",$exite, "<br>";

        $numaleatorio2=rand(1,3);
        echo "Numero Aleatorio del 1 al 3:  ",$numaleatorio2, "<br>";

        if ($numaleatorio2==1)
        {
            echo "<h1>Uno</h1>";
        }
        elseif ($numaleatorio2==2)
        {
           echo "<h1>Dos</h1>";      
        }
        else
        {
            echo "<h1>Tres</h1>";

        }
   

        echo "<br>";
        echo "<h2>1 Al 100 con For</h2>";
        
        for($N0=1;$N0<=100;$N0++){
            echo $N0," ";
            
        }

        echo "<br>";
        echo "<h2>1 Al 100 con While</h2>";

        $N1=0;
        while ($N1 < 100) {
            $N1++;
            echo $N1," ";
        }
        
        echo "<br>";
        echo "<h2>1 Al 100 Pares con For</h2>";

        for($N4=1;$N4<=100;$N4++){
            if (($N4 % 2) == 0) {
                echo $N4," ";
            }
            
        }

        echo "<br>";
        echo "<h2>1 Al 100 Imares con While</h2>";

        $N3=0;
        while ($N3 < 100) {
            if (($N3 % 2) == 0) {
          
            }else{
                echo $N3," ";
            }
            $N3++;
        }

        
    ?>

</body>
</html>