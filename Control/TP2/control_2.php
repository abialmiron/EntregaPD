<?php
class control_2{
    public function verificarPass($datos,$usuarios){
			$retorno= 'Error: Usuario o contraseña incorrectos.';
			$usuarioIngresado= $datos["usuario"];
			$claveIngresada=$datos["password"];
			foreach ($usuarios as $usuarioExistente) {
				if ($usuarioExistente['usuario'] === $usuarioIngresado && $usuarioExistente['password'] === $claveIngresada) 
					$retorno= '¡Bienvenido, ' . $usuarioIngresado . '!';
			}
			return $retorno;
		}

public function informacion($datos){
    $return=[];
    $return["titulo"]= $datos['titulo']; 
    $return["actores"]= $datos['actores']; 
    $return["director"]= $datos['director']; 
    $return["guion"]= $datos['guion']; 
    $return["produccion"]= $datos['produccion']; 
    $return["anio"]= $datos['anio'];
    $return["nacionalidad"]= $datos['nacionalidad']; 
    $return["genero"]= $datos['genero']; 
    $return["duracion"]= $datos['duracion']; 
    $return["restricciones"]= $datos['restricciones']; 
    $return["floatingTextarea2"]= $datos['floatingTextarea2']; 

    return $return;
}

}
?>