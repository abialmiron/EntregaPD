<?php header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");



$PROYECTO = "GRUPO5\EntregaPD\TP4"; //Pone la ubicación de todo el proyecto desde htdocs del XAMP

//variable que almacena el directorio del proyecto
$ROOT =$_SERVER['DOCUMENT_ROOT']."/$PROYECTO/"; //Agarra la ubicación del servidor donde tiene guardada la carpeta

include_once($ROOT.'Util/funciones.php'); //Trae las funciones del script funciones.php


$_SESSION['ROOT']=$ROOT;


?>