    <?php
    include_once ("../../../includes/dirs.php");
    include_once("../../../utiles/funciones.php");
    include_once ('../../../Control/TP1/Ejercicio1/control.php');
    include_once (STRUCTURE_PATH."head.php");
    ?>
    <main class="p-5 text-center bg-light">
    <div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Resultado:</h5>
      <?php
      $datos = data_submitted();
      $modelo = new control_ej1();
      $resultado = $modelo->verificarNumero($datos);
      ?>

      <div class="d-flex justify-content-between align-items-center">
        <div class="card-text">El número es: <?php echo $resultado; ?></div>
        <a href="index.php" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>
</main>
<?php
include_once (STRUCTURE_PATH."footer.php");
?>
