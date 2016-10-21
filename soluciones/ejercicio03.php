<!DOCTYPE html> 
<html>
<head> 
        <meta charset="UTF-8"> 
        <title>Array</title> 
</head>
    <body> 
        <?php 
        //inicializamos 
        echo "Array asociativo de dos dimensiones: ";
        $posiciones = array ( 
            'Base' => array( 
                'jugador1' => 'Ana', 
                'jugador2' => 'Maria' 
            ),  
            'Escolta' => array( 
                'jugador1' => 'Estela', 
                'jugador2' => 'Bárbara' 
            ),  
            'Alero' => array( 
                'jugador1' => 'Sofia', 
                'jugador2' => 'Cristina' 
            ),  
            'Alapivot' => array( 
                'jugador1' => 'Carlota', 
                'jugador2' => 'Esperanza' 
            ),  
            'Pivot' => array( 
                'jugador1' => 'Josefina', 
                'jugador2' => 'Beatriz' 
            ),
        ); 
    echo '<ul>';
        foreach ($posiciones as $posicion=>$datos){     
        echo "<li> $posicion </li>"; 
        echo '<ul> ';

        foreach ($datos as $jugador=>$nombre){ 
            echo " <li>$nombre </li>";
         
        } 
    echo '</ul>';

} 
echo '</ul>';


        ?> 
    </body>
</html>