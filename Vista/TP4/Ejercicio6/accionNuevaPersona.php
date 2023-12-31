<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'/Control/TP4/ControlAuto.php');
include_once(ROOT_PATH.'/Control/TP4/ControlPersona.php');
?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4" style="margin-top: 10px;">
    <div class="card w-50 mb-4">
        <div class="card-body">
            <h5 class="card-title">Resultado:</h5>
            <?php
            $datos = data_submitted();
            $persona = new ControlPersona();
            $datosPersona = $persona->agregarPersona($datos);
            if ($datosPersona) {
                echo "Persona agregada con éxito.";
            } else {
                echo "La persona ya existe.";
            }
            ?>
             <div class="d-flex justify-content-end align-items-end mt-4 pr-3 pb-3">
            <a href="NuevaPersona.php" class="btn btn-primary">Volver</a>
        </div>
        </div>
    </div>
</main>


<?php include(STRUCTURE_PATH . "footer.php"); ?>