<html>
    <head><title>Cine Cinem@s</title></head>
    <link rel="stylesheet" href="../estilos.css">
    <body>
        <?php
         require_once '../../Control/ej8.php';
        if($_POST)
        {
          $edad=(int)$_POST['edad'];
          $condicion=$_POST['estudiante'];
          $objEntrada= new Entradas();
          $precio=$objEntrada->precioEntrada($edad,$condicion);
          echo '<div class="rta"> Su precio es: $'.$precio.'<div>';

        }
        ?>
          <br> <a href="../vistaej8.html">Volver</a>
    </body>
</html>