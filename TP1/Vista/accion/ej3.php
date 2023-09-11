<!DOCTYPE html>
<html>
  <head><title>Ejercicio 3</title></head>
  <link rel="stylesheet" href="../estilos.css">
  <body>
    <?php
   require_once '../../Control/ej6.php';
    if($_GET){
      $contenido = 
      "Hola, yo soy " . $_GET['nombre'] . " " . $_GET['apellido'] . ", " . "tengo " . $_GET['edad'] .
       " años y vivo en " . $_GET['direccion'] ."<br>" .
        '<br><a href="../vistaej3.html">Volver</a>
        </div><br>';
        echo '<div class="rta">' . $contenido . '</div><br>';
    }
    ?>
      
      
</html>