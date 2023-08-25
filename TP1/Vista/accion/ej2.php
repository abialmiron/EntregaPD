<!DOCTYPE html>
<html>
    <head><title>PUNTO 2</title></head>
    <link rel="stylesheet" href="../estilos.css">
<body>
<?php
require_once '../../Control/ej2.php';
if ($_GET) {
    $horasPorDia = array('lunes' => $_GET['lunes_form'],
        'martes' => $_GET['martes_form'],
        'miercoles' => $_GET['miercoles_form'],
        'jueves' => $_GET['jueves_form'],
        'viernes' => $_GET['viernes_form']
    );

    $objHoras = new HorasModelo();
    $cantHoras = $objHoras->calcularTotalHoras($horasPorDia);
   echo '<div class="rta">Cantidad de Horas:'.$cantHoras.'<br> <a href="../vistaej2.html">Volver</a></div> <br>
   ';
}
?>

   
</body>
</html>
