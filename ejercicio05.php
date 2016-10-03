<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo 3</title>
    </head>
    <body>
        <?php
        function ordenar (&$array1) { //Hay que ordenarlo
            foreach ($array1 as $position=>$element){ 
            echo $position . ": " . $element . '<br>'; 
            }
                
        }

        $arrayNumerico=array1(5,18,9,6,85,35,48,21,55);
      echo "El array desordenado es: " ;
            foreach ($array1 as $element){ 
            echo $element . '     '; 
            }
        echo '<br>'. "El array ordenado es: " . ordenar($arrayNumerico) . '<br>' ;
       
        ?>
    </body>
</html>