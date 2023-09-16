<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'/Control/TP4/ControlAuto.php');

$datos = data_submitted();
$auto = new ControlAuto();
$autoEncontrado = $auto->buscarAuto($datos); // Devuelve el objeto Auto

if ($autoEncontrado) {
    $patente = $autoEncontrado->getPatente();
    $marca = $autoEncontrado->getMarca();
    $modelo = $autoEncontrado->getModelo();
    $duenio = $autoEncontrado->getObjDuenio()->getNombre() . " " . $autoEncontrado->getObjDuenio()->getApellido();

    // Construir la tabla HTML
    $tabla = '<table class="table">'.
     '<tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr>'.
     '<tr>'.
     '<td>' . $patente . '</td>'.
     '<td>' . $marca . '</td>'.
     '<td>' . $modelo . '</td>'.
     '<td>' . $duenio . '</td>'.
     '</tr>'.
    '</table>';
} else {
    $tabla = "No se encontró registro de esa patente";
}
?>

<main class="p-5 text-center bg-light">
  <div class="justify-content-md-center align-items-center ">
    <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
        <div class="card-header">
            <h3>Datos</h3>
        </div> 
        <div class="card-body">
            <?php echo $tabla; ?>
            <div class="d-flex justify-content-end align-items-end mt-4">
                <a href="buscarAuto.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</div>
</main>


<?php include(STRUCTURE_PATH . "footer.php"); ?>
