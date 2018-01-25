<?php

class  Circulo implements FiguraGeometricaInterface{
    private $_radio;


    public function __construct($radio){
        $this->_radio=$radio;
    }

    public function getRadio(){
          return $this->_radio;
    }

    public function getDiametro(){
        //D= PI*r
        return  pi() * $this->_radio;
    }

    public function CalculaArea(){
        //A = PI*r^2
          $radio =$this->_radio;
          $area= pi()*($radio*$radio);
          return round($area,2);
    }

    public function CalculaPerimetro(){
        //P= 2*r*PI
          $radio =$this->_radio;
          $perimetro= 2*$radio* pi();
          return  round($perimetro,2);
    }
}


?>
