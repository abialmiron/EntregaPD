<?php
class Entradas {
    public function precioEntrada($edad,$condicion) {
        if($edad<12 || $condicion=="si")
        {$precio=160;} 
        elseif($edad>=12 && $condicion=="si")
        {$precio=180;}
        else{$precio=300;}
        return $precio;
    }
}
?>
