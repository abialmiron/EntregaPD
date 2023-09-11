<?php
class Usuarios{
    public function verificarPass($usuarioIngresado, $claveIngresada, $usuarios){
        $usuarioEncontrado = null;
        foreach ($usuarios as $usuarioExistente) {
            if ($usuarioExistente['usuario'] === $usuarioIngresado && $usuarioExistente['clave'] === $claveIngresada) {
                $usuarioEncontrado = $usuarioExistente;
                break;
            }
        }
        
        if ($usuarioEncontrado) {
            $retorno= '¡Bienvenido, ' . $usuarioEncontrado['usuario'] . '!';
        } else {
            $retorno= 'Error: Usuario o contraseña incorrectos.';
        }
return $retorno;

}

     }
?>