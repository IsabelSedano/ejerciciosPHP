<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario ejercicio 09</title>
    </head>
    <body>
        <form method="post" action="app.php" >
            Nombre usuario:
             <input type="text" name="usuario" value="" /> <p>
            Teléfono:
             <input type="text" name="telefono" value="" /> <p>
            <input type="submit" value="Enviar" />
        </form>

        <?php
        require_once 'ejercicio09clases.php';
        $aplicacion = new App;

        $recordado = "";

        Cookie[] cookies = request.getCookies();
        if (cookies != null){  
            for (Cookie cookie: cookies){ //recorre el array
                if (cookie.getName().equals("nombre")){ //busca la cookie que se llame "nombre"
                    recordado = cookie.getValue();  //guardas el texto de la cookie en 'recordado'
                }
            }
        } 



        ?>
    </body>
</html>
