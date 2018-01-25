<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Figuras</title>

<?php
require_once "FiguraGeometricaInterface.php";
require_once "FiguraBaseAltura.php";
require_once "Circulo.php";
require_once "Triangulo.php";
require_once "Rectangulo.php";
require_once "Cuadrado.php";
require_once "ServicesGeometria.php";
?>
</head>
<body>
      <form action="" method="get">
          <table border ="0">
              <tr>
                  <td colspan="4">
                      <img src="img/figuras.jpg" alt="Figuras">
                  </td>
              </tr>
              <tr>
                  <td><center><input type="radio" name="figura" value="1"></center> </td>
                  <td><center><input type="radio" name="figura" value="2"></center> </td>
                  <td><center><input type="radio" name="figura" value="3"></center> </td>
                  <td><center><input type="radio" name="figura" value="4"></center> </td>
              </tr>
              <tr><td colspan = "4"><center> <input type = "submit"></center></td></tr>
          </table>
      </form>
        <p>Escoge una figura</p>
      <?php
      // comprueba si ha seleccionado figura
      if (isset($_GET['figura'])) {
          // variable que recoge la figura que es
          $figura = $_GET['figura'];

          $mensaje ="Has seleccionado el ";

          switch ($figura) {
              case 1:
                  echo $mensaje."cuadrado";
                  //Crear objeto Cuadrado
  ?>
              <!--codigo html-->
              <p>Calcular Area y Perimetro del cuadrado: </p>
              <p><code> Area = lado*lado <br></code></p>
              <p><code> Perimetro = lado*4 </code></p>

              <form action="" method="get">
                  <table>
                      <tr>
                          <td>
                              <label>Lado</label>
                              <input type = "number"  name = "lado"/>
                          </td>
                          <td>
                              <input type = "submit" value="Calcular">
                          </td>
                      </tr>
                      <tr>
                          <td colspan="4"> <center> <img src="img/cuadrado-area.jpg" alt="Figuras"></center></td>
                          <!--<td colspan="2"> <img src="img/cuadrado-perimetro.jpg" alt="Figuras"></td>-->
                      </tr>
                  </table>
                  </form>
    <?php

                  break;
              case 2:
                  echo $mensaje."triangulo";
  ?>
                  <!--codigo html-->
                  <p>Calcular Area y Perimetro del triangulo equilatero: </p>
                  <p><code> Area = base*altura <br></code></p>
                  <p><code> Perimetro = 3*lado </code></p>
                  <form action="" method="get">
                      <table>
                          <tr>
                              <td>
                                <input type ="hidden" name "triangulo" value = "triangulo"/>

                                  <label>Base</label>
                                  <input type = "number"  name = "base"/>
                              </td>
                              <td>
                                  <label>Altura</label>
                                  <input type = "number"  name = "altura"/>
                              </td>
                              <td>
                                  <input type = "submit" value="Calcular">
                              </td>
                          </tr>
                          <tr>
                              <td colspan="2">  <img src="img/triangulo-equilatero-area.jpg" alt="Figuras"></center></td>
                              <td colspan="2"> <img src="img/triangulo-equilatero-perimetro.jpg" alt="Figuras"></center></td>
                          </tr>
                      </table>
                  </form>
   <?php
                  break;
              case 3:
                  echo $mensaje."rectangulo";

   ?>
                  <!--codigo html-->

                  <p>Calcular Area y Perimetro del rectangulo: </p>
                  <p><code> Area = a*b <br></code></p>
                  <p><code> Perimetro = 2*(b+h) </code></p>

                  <form action="" method="get">
                      <table>
                          <tr>
                              <td>
                                  <label>Base</label>
                                  <input type = "number"  name = "ladoA"/>
                              </td>
                              <td>
                                  <label>Altura</label>
                                  <input type = "number"  name = "ladoB"/>
                              </td>
                              <td>
                                  <input type = "submit" value="Calcular">
                              </td>
                          </tr>
                          <tr>
                              <td colspan="4"> <center><img src="img/rectangulo-area.jpg" alt="Figuras"></center></td>
                              <!--<td colspan="2"> <img src="img/rectangulo-perimetro.jpg" alt="Figuras"></td>-->
                          </tr>
                      </table>
                  </form>
     <?php
                  break;
    ?>
    <?php
              case 4:
                  echo $mensaje."circulo";
      ?>
                  <!--codigo html-->
                  <p>Calcular Area y Diametro del Circulo: </p>
                  <p><code> Area = PI*r^2 <br></code></p>
                  <p><code> Diametro = PI*r </code></p>
                  <form action="" method="get">
                      <table>
                          <tr>
                              <td>
                                  <label>Radio</label>
                                  <input type = "number"  name = "radio"/>
                              </td>
                              <td>
                                  <input type = "submit" value="Calcular">
                              </td>
                          </tr>
                          <tr>
                              <td colspan="4"> <center><img src="img/circulo-area.jpg" alt="Figuras"></center></td>
                          </tr>
                      </table>
                  </form>
                  <?php
                  break;
          }
      }
  //echo " es un cuadrado";
      if (isset($_GET['lado'])) {
          $lado = $_GET['lado'];
          $figura = new Cuadrado ($lado);
          $sg = new ServicesGeometria();
          echo "El resultado del cálculo es:<br>";
        $sg->muestraAreaPerimetro($figura);
      }
// es un triangulo

      if (isset($_GET['base']) && isset($_GET['altura'])) {
          $base = $_GET['base'];
          $altura = $_GET['altura'];
          $figura = new Triangulo ($base,$altura);
          $sg = new ServicesGeometria();
          echo "El resultado del cálculo es:<br>";
        $sg->muestraAreaPerimetro($figura);
      }
//echo "es un rectangulo";

      if (isset($_GET['ladoA']) && isset($_GET['ladoB'])) {
          $ladoA= $_GET['ladoA'];
          $ladoB = $_GET['ladoB'];
          $figura = new Rectangulo ($ladoA,$ladoB);
          $sg = new ServicesGeometria();
          echo "El resultado del cálculo es:<br>";
        $sg->muestraAreaPerimetro($figura);
      }
// es un Circulo
      if (isset($_GET['radio'])) {
          $radio = $_GET['radio'];
          $figura = new Circulo ($radio);
          $sg = new ServicesGeometria();
          echo "El resultado del cálculo es:<br>";
        $sg->muestraAreaPerimetro($figura);
      }
    ?>

</body>
</html>
