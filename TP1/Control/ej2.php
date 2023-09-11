<?php
class HorasModelo {
    public function calcularTotalHoras($horasPorDia) {
        $totalHoras = array_sum($horasPorDia);
        return $totalHoras;
    }
}
?>
