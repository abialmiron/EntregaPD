<?php 
$title="Ver Autos";
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");
?>
<section class="main-container p-5">
  <h3>Autos Registrados</h3>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 text-center ">
    <?php
    $objAuto=new AmbAuto();
    $objPersona=new AmbPersona();

    $listarPersonas=$objPersona->buscar(null);
    $listaAutos=$objAuto->buscar(null);

    foreach($listaAutos as $unAuto){
    ?>
      <div class="col p-3">
      <div class="card shadow" style="max-width: 15rem;" >
        <div class="card-header">
            <h4 class="card-title text-center"><?php echo $unAuto->getPatente(); ?></h4>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="row">
              <div class="col-8">
                <h6 class="card-title text-uppercase text-start"><?php echo $unAuto->getMarca(); ?></h6>
              </div>
              <div class="col-4">
                <h6 class="card-title text-uppercase text-end"><?php echo $unAuto->getModelo(); ?></h6>
              </div>
            </div>
          </li>
          <?php
          foreach($listarPersonas as $unaPersona){
            if($unaPersona->getDni()==$unAuto->getDuenio()){ ?>
                  <li class="list-group-item text-center"><h6> <?php echo $unaPersona->getApellido().", ".$unaPersona->getNombre(); ?> </h6></li>
            <?php 
            } 
          } /* fin foreach */
          ?>
        </ul>
      </div>
    </div>
    <?php
    }/* fin foreach */
    ?>

</div>
</section>

<?php
include_once ("./layout/footer.php");
?>