<?php 
//isset comprueba si una variable está definida y no es null 
//empty comprueba si una variable contiene algún valor distinto de 0 o false
echo '<meta charset="UTF-8">'; 
if(isset($_POST) && !empty($_POST)){ 
    echo "Nombre y apellidos: $_POST[nombre]  $_POST[apellido]". '<br>'; 
    echo "Contraseña: $_POST[contraseña] ". '<br>'; 
    echo "Nombre de usuario: $_POST[usuario] ". '<br>'; 
    echo "Sexo: $_POST[sexo] ". '<br>'; 
    echo "Libro favorito: $_POST[librofav] ". '<br>'; 
    echo "Estilos de libros: $_POST[estilo] ". '<br>'; 
} 
 else { 
     echo "No hemos recibido nada!"; 
} 