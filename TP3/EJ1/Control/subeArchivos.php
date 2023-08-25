<?php
include_once('C:\xampp\htdocs\TP3\EJ1\Control\Archivo.php');
$tipodocumento = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
$tipoPDF = "application/pdf";


if ($_FILES['miArchivo']["error"] <= 0){
    if($_FILES['miArchivo']['type'] === $tipodocumento || $_FILES['miArchivo']['type'] === $tipoPDF){
        $archivo = new Archivo();
        $archivo->cargar($_FILES['miArchivo']['name'],$_FILES['miArchivo']['type'],($_FILES['miArchivo']["size"] / 1024),$_FILES['miArchivo']['tmp_name']);
        $resultado = $archivo->copiar();
    }else {
            $resultado = 'ERROR: El tipo del archivo no es el correcto, debe ser DOC o PDF';
        }
}

?>