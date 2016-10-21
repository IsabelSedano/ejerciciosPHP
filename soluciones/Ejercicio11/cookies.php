<?php
setcookie($_POST['cookie'], $_POST['valor'], time() + $_POST['duracion']);

echo "<ul>";
    foreach($_COOKIE as $nombre => $valor){
        echo "<li>Cookie $nombre: $valor</li>";
    }
echo "</ul>";