<!DOCTYPE html>
<html>
  <head><title>Ejercicio 6</title></head>
  <link rel="stylesheet" href="../estilos.css">
  <body>
    <?php
   require_once '../../Control/ej6.php';
    if($_GET){
        $edad=(int)$_GET['edad'];
        $resultadoFutbol = isset($_GET['futbol']);
        $resultadoBasquet = isset($_GET['basquet']);
        $resultadoVoley = isset($_GET['voley']);
        $resultadoTenis = isset($_GET['tenis']);

       $objDatos = new Datos();
       $cantDeportes = $objDatos->cantDeportes($resultadoFutbol, $resultadoBasquet, $resultadoVoley, $resultadoTenis);

      $condicion= $objDatos->mayorEdad($edad);
      $contenido = "Hola, yo soy " . $_GET['nombre'] . " " . $_GET['apellido'] . ", " . "tengo " . $_GET['edad'] . " años y vivo en " . $_GET['direccion'] .
    "<br>" . $condicion . 
    '<br>Mi nivel de estudio ' . $_GET['nivelEstudio'] . '
    <br>Sexo: ' . $_GET['sexo'] . 
    "<br>Cantidad deportes: " . $cantDeportes;
    echo '<div class="rta">' . $contenido . '<br><a href="../vistaej6.html">Volver</a>
    </div><br>';
    }
    ?>
      
      
</html>
