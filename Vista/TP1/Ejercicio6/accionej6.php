<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once (ROOT_PATH.'Control/TP1/Ejercicio6/control.php');
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Resultado:</h5>
      <?php
    $datos=data_submitted();
    $objDatos = new control_ej6();
    $string = $objDatos->verInformacion($datos);
    $condicion= $objDatos->mayorEdad($datos);
    $estudios=$datos['nivelEstudio'];
    $sexo=$datos['sexo'];
    $cantDeportes = $objDatos->cantDeportes($datos);
    ?>
      <div class="d-flex justify-content-between align-items-center">
        <div class="card-text"><?php echo '<div>'.$string.'<br>'.$condicion.'<br> Sexo: '.$sexo.'<br>Estudios: '.$estudios."<br>Cantidad deportes seleccionados: " . $cantDeportes.'</div> <br>';?></div>
        <a href="index.php" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>