<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario ejercicio 09</title>
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
        require_once 'Ejercicio09/app.php';
        $aplicacion = new App();

        ?>
    </body>
</html>
