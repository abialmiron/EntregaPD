<?php
class Datos{
    public function mayorEdad($edad){
        if($edad>=18)
        {$condicion='Soy mayor de edad '; }
        else
        {$condicion= 'Soy menor de edad';}
      return $condicion;
    }
    public function cantDeportes($futbol, $basquet, $voley, $tenis) {
        $suma = 0;
        
        if ($futbol) { $suma++; }
        if ($basquet) { $suma++; }
        if ($voley) { $suma++; }
        if ($tenis) { $suma++; }
        
        return $suma;
    }
    
    
}
?>