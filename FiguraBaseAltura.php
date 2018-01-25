<?php

abstract class FiguraBaseAltura implements FiguraGeometricaInterface{

    protected $_base;
    protected $_altura;

    public function __construct($base,$altura){
            $this->_base=$base;
            $this->_altura=$altura;
    }

    public  function getBase(){
        return   $this->_base;
    }

    public  function getAltura(){
        return $this->_altura;
    }

    public abstract function CalculaArea();
    public abstract function CalculaPerimetro();


}

?>
