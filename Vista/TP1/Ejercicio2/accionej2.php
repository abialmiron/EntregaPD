<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'Control/TP1/Ejercicio2/control.php');
?>
<main class="p-5 bg-light">
<div class="justify-content-md-center align-items-center ">
<div class="row justify-content-center">
            <div class="col-md-3">
    <div class="card shadow">
     <div class="card-header">
       <h5 class="card-title text-center">Cantidad de horas</h5>
     </div> 
    <div class="card-body">
      <?php
      $datos = data_submitted();
      $objHoras = new control_ej2;
      $cantHoras = $objHoras->calcularTotalHoras($datos);
      ?>
      <div class="justify-content-between align-items-center">
        <div class="card-text text-center">
          <h3><?php echo $cantHoras; ?></h3> </div>
          <div class="form-group text-end mt-3">
            <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>