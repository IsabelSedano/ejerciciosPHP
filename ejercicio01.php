<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>ejemplo 6</title> 
</head><body> 
<?php 
//inicializamos 
echo "Array ordenado inicializado en la declaración <hr>";
$nombres = array( 
    'nombre1' => 'Pablo', 
    'nombre2' => 'Manuel', 
    'nombre3' => 'Bárbara', 
    'nombre4' => 'Ana', 
    'nombre5' => 'Paola'
); 


//foreach clave->elemento 
echo "Recorrido mediante bucle for"; 
for ($element =1; $element <= SIZE; $element++){ 
    echo $element . '<br>'; 
} 

?> 
</body></html>