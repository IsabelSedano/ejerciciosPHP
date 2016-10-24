<?php
$nombre = request.getParameter("nombre");
            $password = request.getParameter("password");
            $cookies= array();
            $cookies = request.getCookies();
            $nuevaCookie = null;
            if ($cookies != null){
                foreach($_COOKIE as $nombre => $valor){ //recorre el array
                    if ($cookie.getName().equals("nombre")){ //busca la cookie que se llame "nombre"
                    $recordado = $cookie.getValue();  //guardas el texto de la cookie en 'recordado'
                }
            }
            }
            if ($nuevaCookie != null) { //comprueba si la cookie ya existia, si es la 'vieja'
                $nuevaCookie.setValue(nombre); //si existia la cookie, le cambia el nombre
            } else {
                $nuevaCookie = new Cookie("nombre", nombre); //sino la crea
            }
            $nuevaCookie.setMaxAge(120);
            response.addCookie(nuevaCookie);  //envia la cookie

?>
<!DOCTYPE html>
<html>
<head>
    <title>Servlet Recepcion</title>        
</head>
    <body>
        <h1>Datos</h1>
        Nombre: " + nombre + <br>
        Contraseña: " + password + <br>
        <p><a href='Formulario'>  Volver </a></p>
    </body>
</html>