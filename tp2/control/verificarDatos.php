<?php

include('../util/config.php');
include('C:\xampp\htdocs\trabajosPDW\TrabajosEntregablesPD\tp2\control\SesionController.php');

$datos = data_submitted();
$usuario1 = new Sesion('tomas.salto', 'albano99');
$usuario2 = new Sesion('tomas.ferrin', '42095934');
$usuario3 = new Sesion('dario.pedraza', '12345678');

$arrayUsuarios = array($usuario1, $usuario2, $usuario3);
$encontrado = false;
$indice = 0;

if ($datos['usuario'] && $datos['contrasenia']) {
    while (!$encontrado && $indice < count($arrayUsuarios)) {
        $usuario = $arrayUsuarios[$indice];

        if ($usuario->getUser() == $datos['usuario'] && $usuario->getPassword() == $datos['contrasenia']) {
            $encontrado = true;
            $resultado = "Se ha iniciado sesion con exito";
        }
        $indice++;
    }
    if (!$encontrado) {
        $resultado = "Usuario o contraseña incorrecto";
    }
}
