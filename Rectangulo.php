<?php
class Rectangulo
{
    private $_base;
    private $_altura;
    //private $_superficie;
    //private $_perimetro;

    public function __construct($base, $altura)
    {
        $this->_base = $base;
        $this->_altura = $altura;
    }

    public function __toString()
    {
        return "Rectángulo de $this->_base x $this->_altura";
    }
    public function perimetro()
    {
        //$_perimetro=2*($this->_base+$this->_altura);
        //echo "Perimetro: " . $_perimetro .'<br>';
        return 2 * ($this->_base+$this->_altura);
    }

    public function superficie()
    {
        //$_superficie=$this->_base * $this->_altura;
        //echo "Superficie: ". $_superficie . '<br>';
        return $this->_base * $this->_altura;
    }


}//class