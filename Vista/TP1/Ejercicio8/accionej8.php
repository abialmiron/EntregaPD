<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once (ROOT_PATH.'Control/TP1/Ejercicio8/control.php');
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Resultado:</h5>
      <?php
    $datos=data_submitted();
    $objEntrada= new control_ej8();
    $precio=$objEntrada->precioEntrada($datos);
    
   ?>
      <div class="d-flex justify-content-between align-items-center">
        <div class="card-text"><?php  echo 'Su precio es: $'.$precio.'<br> ';?></div>
        <a href="index.php" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>