<?php
include_once('C:\xampp\htdocs\TP3\EJ2\Control\Archivo.php');
$tipotxt = "text/plain";


if ($_FILES['miArchivo']["error"] <= 0){
    if($_FILES['miArchivo']['type'] === $tipotxt){
        $archivo = new Archivo();
        $archivo->cargar($_FILES['miArchivo']['name'],$_FILES['miArchivo']['type'],($_FILES['miArchivo']["size"] / 1024),$_FILES['miArchivo']['tmp_name']);
        $resultado = $archivo->copiar();
        $texto = file_get_contents('archivos/'.$archivo->getNombre());
    }else {
            $resultado = 'ERROR: El tipo del archivo no es el correcto, debe ser DOC o PDF';
        }
}

?>