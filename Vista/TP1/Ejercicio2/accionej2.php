<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'Control/TP1/Ejercicio2/control.php');
?>
<main class="p-5 text-center bg-light">
    <div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Cantidad de horas</h5>
      <?php
      $datos = data_submitted();
      $objHoras = new control_ej2;
      $cantHoras = $objHoras->calcularTotalHoras($datos);
      ?>
      <div class="d-flex justify-content-between align-items-center">
        <div class="card-text"><?php echo $cantHoras; ?></div>
        <a href="index.php" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>