<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo 3</title>
    </head>
    <body>
        <?php
        function menor($array1) {
       
            $menor = $arrayNumerico[0];
            $contador=1;
                foreach ($arrayNumerico as $numero) {

                if ($numero < $menor) {
                    $menor = $numero;
                };
            };
            return $menor;
        };

        function ordenar (&$array1, &$arrayAux) { //Hay que ordenarlo
           $menor=menor($array1);
           
           

            
                
        }

        $arrayNumerico=array1(5,18,9,6,85,35,48,21,55);
        $arrayAux=array();
      echo "El array desordenado es: " ;
            foreach ($array1 as $element){ 
            echo $element . '     '; 
            }
        echo '<br>'. "El array ordenado es: " . ordenar($arrayNumerico, $arrayAux) . '<br>' ;
       
        ?>
    </body>
</html>