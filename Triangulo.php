<?php

class Triangulo extends FiguraBaseAltura{


    public function __construct($base,$altura){
        parent::__construct($base,$altura);
    }

    public  function CalculaArea(){
            //A= b*h
        return $this->_base*$this->_altura;
    }

    public  function CalculaPerimetro(){
          //P= 2*a*h
        return $this->_base*3;
    }
}

?>
