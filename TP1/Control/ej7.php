<?php
class Operacion {
    public function suma($num1,$num2,$opcion) {
        if($opcion=='SUMA')
        {$total=$num1+$num2;
        $ret= $opcion .' : '. $num1 .' + '.$num2.' = '.$total; }
        elseif($opcion=='RESTA')
        {$total=0;
        $total=$num1-$num2;
        $ret= $opcion .' : '. $num1 .' - '.$num2.' = '.$total; }
        elseif($opcion=='MULTIPLICACION')
        {$total=0;
        $total=$num1*$num2;
        $ret= $opcion .' : '. $num1 .' * '.$num2.' = '.$total; }
        return $ret;
    }
    
}
?>
