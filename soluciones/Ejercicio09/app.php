<?php 

 /*Modifica el fichero anterior usando POO. Crea una clase principal llamada App. Crea otra clase Usuario con 
 los atributos privados nombre y teléfono y un método constructor. El constructor puede llevar a cabo toda la tarea.
Entramos por ej9.php que llama a 
la clase app -> tiene  $_usuarios y constructor que lleva a cabo la tarea (lee $post y crea el usuario) 
la clase usuario es llamada por app para obtener el nombre y el telefono

 */
require_once 'Ejercicio09/usuario.php';
class App
{
    private $_usuario;

    public function __construct()
    {
        echo "probando clase app" . '<br>';
        if(isset($_POST) && !empty($_POST)){            
            $this->_usuario = new Usuario($_POST[usuario], $_POST[telefono]);
        } else { 
             echo '<br>'. "Error al crear usuario" . '<br>'; 
        } 
    }
}//class

