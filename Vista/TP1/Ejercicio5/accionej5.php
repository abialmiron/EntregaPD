<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once (ROOT_PATH.'Control/TP1/Ejercicio6/control.php');
?>
<main class="p-5 bg-light">
  <div class="justify-content-md-center align-items-center ">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow">
          <div class="card-header">
            <h3>Resultado:</h3>
          </div>
          <div class="card-body">
            <?php
            $datos=data_submitted();
            $objDatos = new control_ej6();
            $string = $objDatos->verInformacion($datos);
            $condicion= $objDatos->mayorEdad($datos);
            $estudios=$datos['nivelEstudio'];
            $sexo=$datos['sexo'];
            ?>
          <div class="form-group text-end mt-3">
          <div class="card-text"><?php echo '<div>'.$string.' <br>'.$condicion.'<br> Sexo: '.$sexo.'<br>Estudios: '.$estudios.'<br> </div> ';?></div>
        <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>