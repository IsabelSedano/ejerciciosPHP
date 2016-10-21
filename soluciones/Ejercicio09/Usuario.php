<?php
    class Usuario{
    private $_nombre;
    private $_telefono;

    public function __construct($nombre, $telefono)
    {
        $this->_nombre = $nombre;
        $this->_telefono = $telefono;
        //$this->_telefono = $usuarios;
        echo "usuario guardado" . '<br>';
        echo "Nombre: $nombre ".'<br>'."Telefono: $telefono";
    } 
    /**
     * Gets the value of _nombre.
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->_nombre;
    }

    /**
     * Gets the value of _telefono.
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->_telefono;
    }
}//class