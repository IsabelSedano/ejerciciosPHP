<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo 3</title>
    </head>
    <body>
        <?php
        function mayor($arrayNumerico) {
            $mayor=0;
            foreach ($arrayNumerico as $numero) {
                if ($numero > $mayor) {
                    $mayor = $numero;
                };
            };
            return $mayor;
        };
        
        function menor($arrayNumerico) {
            //lo comentado es otra forma de hacerlo
            //$menor=0;          
            $menor = $arrayNumerico[0];
            $contador=1;
                foreach ($arrayNumerico as $numero) {
                /*if ($contador==1) {
                    $contador++;
                    $menor=$numero;
                };*/
                
                if ($numero < $menor) {
                    $menor = $numero;
                };
            };
            return $menor;
        };

        $arrayNumerico=array(5,18,9,6,85,35,48,21,55);
        echo "El numero mas grande es: " . mayor($arrayNumerico) . '<br>' ;
        echo "El numero mas pequeño es: " . menor($arrayNumerico);
        ?>
    </body>
</html>