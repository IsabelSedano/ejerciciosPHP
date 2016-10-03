<?php 
//aprobechamos para ver un par de funciones para el manejo de variables.
//isset comprueba si una variable está definida y no es null 
//empty comprueba si una variable contiene algún valor distinto de 0 o false
echo '<meta charset="UTF-8">'; 
if(isset($_POST) && !empty($_POST)){ 
    echo "Nombre y apellidos: $_POST[nombre] $_POST[apellido]"; 
    echo "contraseña: $_POST[contraseña] "; 
    
} 
 else { 
     echo "No hemos recibido nada!"; 
} 