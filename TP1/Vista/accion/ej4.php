<!DOCTYPE html>
<html>
  <head><title>Ejercicio 6</title></head>
  <link rel="stylesheet" href="../estilos.css">
  <body>
    <?php
   require_once '../../Control/ej6.php';
    if($_GET){
        $edad=(int)$_GET['edad'];
       $objDatos = new Datos();
      $condicion= $objDatos->mayorEdad($edad);
      $contenido = "Hola, yo soy " . $_GET['nombre'] . " " . $_GET['apellido'] . ", " . "tengo " . $_GET['edad'] . " años y vivo en " . $_GET['direccion'] .
    "<br>" . $condicion ;

    echo '<div class="rta">' . $contenido . '<br><a href="../vistaej4.html">Volver</a>
    </div><br>';
    }
    ?>
      
      
</html>