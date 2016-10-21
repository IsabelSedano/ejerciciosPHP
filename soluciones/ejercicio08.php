<!DOCTYPE html>
<!--Crea un fichero ejercicio08.php. Debe ser un script que combine dos elementos. Debe mostrar un formulario para dar de alta un nombre de usuario y su número de teléfono. El formulario debe enviar los datos al mismo script. Investiga $_SERVER['PHP_SELF'] La segunda parte debe mostrar los datos del usuario en caso de que éstos existan.

            $_SERVER['PHP_SELF'] devuelve la ruta absoluta al script php en ejecución     -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario ejercicio 08</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
            Nombre usuario:
             <input type="text" name="usuario" value="" /> <p>
            Teléfono:
             <input type="text" name="telefono" value="" /> <p>
            <input type="submit" value="Enviar" />
        </form>

        <?php
        echo "La ruta absoluta del script php en ejecucion es: " . $_SERVER['PHP_SELF'] . '<br>' ;
        if(isset($_POST) && !empty($_POST)){ 
            echo "Nombre de usuario: $_POST[usuario]". '<br>'; 
            echo "Telefono: $_POST[telefono] ". '<br>'; 
        } 
         else { 
             echo '<br>'. "No se han recibido datos"; 
        } 

        ?>
    </body>
</html>
