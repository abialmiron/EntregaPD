<?php
class NumeroModelo {
    public function verificarNumero($numero) {
        if ($numero > 0) {
            return "positivo";
        } elseif ($numero < 0) {
            return "negativo";
        } else {
            return "cero";
        }
    }
}
?>
