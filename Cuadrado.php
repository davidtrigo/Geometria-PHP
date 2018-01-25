<?php

class Cuadrado extends FiguraBaseAltura{


    public function __construct($lado){
        parent::__construct($lado,$lado);
    }


    public  function CalculaArea(){
            //A= arista*arista
    //    return $this->pow(_base,2);
    return $this->_base**2;
    }
    public  function CalculaPerimetro(){
          //P= arista*4
        return $this->_base*4;
    }
}

?>
