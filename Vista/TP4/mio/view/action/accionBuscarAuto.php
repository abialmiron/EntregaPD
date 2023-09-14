<?php 
$title="Buscar Auto";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");

$datos=data_submitted();
$objAuto=new AmbAuto();
$objArrayAutos=$objAuto->buscar(null);
?>
<section class="main-container p-5">
  <h3>Datos del auto</h3>
  <?php
    $contador=0; 
    foreach ($objArrayAutos as $unAuto){
      if($datos['patente']==$unAuto->getPatente()){ ?>
      <div class="card container shadow" style="min-width: 25rem;">

        <table class="table table-hover" name="tablaAuto" id="tablaAuto">
          <thead>
            <tr>
              <th scope="col">Modelo</th>
              <th scope="col">Marca</th></th>
              <th scope="col">Patente</th>
              <th scope="col">DNI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php echo $unAuto->getModelo() ?></th>
              <td> <?php echo $unAuto->getMarca() ?> </td>
              <td> <?php echo $unAuto->getPatente() ?> </td>
              <td> <?php echo $unAuto->getDuenio() ?> </td>
            </tr>
          </tbody>
        </table>
        </div>
        <?php
        $contador++;
      }// fin if 
    }// fin foreach
    if($contador==0){
      echo('<div class="alert alert-danger text-center" role="alert"> La patente del auto no se encuentra registrada. <a href="../buscarAuto.php" class="alert-link">Volver a intentarlo!</a> / <a href="../nuevoAuto.php" class="alert-link">Cargar nuevo auto!</a></div>');
      
    }// fin if
    ?>
</section>
<?php
include_once ("../layout/footer.php");
?>