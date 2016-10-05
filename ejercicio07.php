<?php
require_once 'Rectangulo.php';
 $rectangulo = new Rectangulo(5, 8);
 //$perimetro=$rectangulo->perimetro();
 //$superficie=$rectangulo->superficie();

echo $rectangulo . '<br>';
var_dump($rectangulo);
echo '<br>';
//echo  "El perimetro es " . $perimetro .'<br>';
//echo "La superficie es ". $superficie .'<br>';
echo "La superficie es " .  $rectangulo->superficie() . '<br>';
echo "El perimetro es " . $rectangulo->perimetro();