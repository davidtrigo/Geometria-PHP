<?php

class Rectangulo extends FiguraBaseAltura{



    public function __construct($base,$altura){
        parent::__construct($base,$altura);
    }

    public  function CalculaArea(){
        // A = lado a *lado b
         return $this->_base*$this->_altura;
    }

    public  function CalculaPerimetro(){
            //P= 2*(b+h)
        return 2*($this->_base*$this->_altura);
    }
}

?>
