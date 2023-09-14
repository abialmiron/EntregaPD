<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'Control/TP1/Ejercicio2/control.php');
$datos = data_submitted();
$objHoras = new control_ej2;
$cantHoras = $objHoras->calcularTotalHoras($datos);
   echo  '<div class="rta">Cantidad de Horas:'.$cantHoras.'<br> <a href="../index.php">Volver</a></div> <br>';
?>

<?php include(STRUCTURE_PATH . "footer.php"); ?>