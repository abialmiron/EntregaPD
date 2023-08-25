<?php

function data_submitted(){
$tipoMetodo = [];
/* empty devuelve true si la variable es vacia y false si tiene datos */
if(!empty($_POST)){
$tipoMetodo = $_POST;
}elseif(!empty($_GET)){
$tipoMetodo = $_GET;
}
return $tipoMetodo;
}
