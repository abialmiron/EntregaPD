<?php header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$PROYECTO ='pwd/tp_4';

//variable que almacena el directorio del proyecto
$ROOT =$_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";

include_once($ROOT.'util/functions.php');

// variable que define la pagina principal del proyecto (menu principal)
$BASE_URL = "http://".$_SERVER['HTTP_HOST']."/$PROYECTO/";

$_SESSION['ROOT']=$ROOT;

?>