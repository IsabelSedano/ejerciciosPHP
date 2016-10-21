<!DOCTYPE html>
<!--HACIENDO USO DE INPUTS OCULTOS Vamos a crear una lista de usuarios partiendo del ejercicio anterior. 
Se trata de usar inputs ocultos con los valoress ya enviados previamente. Ayúdate de las funciones explode e implode-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario ejercicio 10</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
            Nombre usuario:
             <input type="text" name="nombre" value="" /> <p>
            Teléfono:
             <input type="text" name="telefono" value="" /> <p>
            <!--Imputs ocultos --> 

            <?php foreach ($variable as $key => $value): ?>
             <input type="text" name="lista[]" value="<?php echo implode($value); ?>" />
            <?php endforeach ?>
             <input type="submit" value="Enviar" />
        </form>
        <?php
        require_once 'Ejercicio09/App10.php';
        $aplicacion = new App();

        ?>
    </body>
</html>


