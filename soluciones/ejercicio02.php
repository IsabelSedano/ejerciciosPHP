<!DOCTYPE html> 
<html>
<head> 
        <meta charset="UTF-8"> 
        <title>Array</title> 
</head>
    <body> 
        <?php 
        //inicializamos 
        
        $cont = 0;
        $posiciones = array( 
        'AlaPivot' => 'Pablo', 
        'Base' => 'Manuel', 
        'Alero' => 'Bárbara', 
        'Pivot' => 'Ana', 
        'Escolta' => 'Paola'
        ); 

        foreach ($posiciones as $position=>$element){ 
        echo "Posicion: " . $position . ". Nombre: " . $element . '<br>'; 
        }    

        ?> 
    </body>
</html>