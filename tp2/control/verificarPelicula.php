<?php

include('../util/config.php');
include('C:\xampp\htdocs\trabajosPDW\TrabajosEntregablesPD\tp2\control\PeliculaController.php');

$datos = data_submitted();

if ($datos['titulo'] && $datos['director'] && $datos['produccion'] && $datos['nacionalidad'] && $datos['duracion'] && $datos['sinopsis'] && $datos['actores'] && $datos['guion'] && $datos['anio'] && $datos['genero'] && $datos['publico']) {
    
    $resultado = $datos;
}
