<?php

class ServicesGeometria{

  function muestraAreaPerimetro($figura){
        echo"Area: ". $figura->CalculaArea()."<br>";
        echo "Perimetro: ". $figura->CalculaPerimetro();
  }

}
?>
