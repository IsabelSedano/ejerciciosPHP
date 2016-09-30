<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>ejemplo 6</title> 
</head><body> 
<?php 
//inicializamos 
echo "Array ordenado inicializado en la declaración <hr>";
$cont = 0;
$nombres = array( 
    "Pablo", "Manuel", "Bárbara", "Ana", "Paola"
); 

for ($nombres as $element){ 
    $cont++;
    echo $element . ": " . $cont .'<br>'; 
} 

?> 
</body></html>