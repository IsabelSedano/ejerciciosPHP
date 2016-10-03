<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>ejemplo 6</title> 
</head><body> 
<?php 
//inicializamos 

  $nombres = array( 
            "Pablo", "Manuel", "Bárbara", "Ana", "Paola"
        ); 


//foreach clave->elemento 
echo "Recorrido mediante bucle foreach ordenado :" . '<br>'; 
foreach ($nombres as $position=>$element){ 
    echo $position . ": " . $element . '<br>'; 
} 

?> 
</body></html>