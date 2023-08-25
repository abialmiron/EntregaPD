<html>
    <head>
        <title>Punto 7</title>
        <link rel="stylesheet" href="../estilos.css">
    </head>
    <body>
        <?php
         require_once '../../Control/ej7.php';
        if($_GET)
        { $num1=(int)$_GET["num1"];
          $num2=(int)$_GET["num2"];
          $opcion=$_GET["opcion"];
          $objOperaciones=new Operacion();
          $resultado=$objOperaciones->suma($num1,$num2,$opcion);
          echo '<div class="rta">Resultado: '.$resultado.'<br> <a href="../vistaej7.html">Volver</a></div> <br>
          ';
        }
        ?>
    </body>
    
</html>