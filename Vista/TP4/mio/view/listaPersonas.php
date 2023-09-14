<?php 
$title="Lista de Personas";
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");

$objPersona=new AmbPersona();
$arrayObjPersonas=$objPersona->buscar(null);
?>
<section class="main-container p-5">

<h3>Listado de Personas Registradas</h3>



<div class="card container shadow" style="min-width: 25rem;">
<div class="card-body">
        <table class="table table-hover" name="tablaAuto" id="tablaAuto">
          <thead>
            <tr>
              <th scope="col">DNI</th>
              <th scope="col">Nombre</th></th>
              <th scope="col">Apellido</th>
              <th scope="col">Fecha Nacimiento</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($arrayObjPersonas as $unaPersona){ ?>
                <tr>
                  <th scope="row"><?php echo $unaPersona->getDni () ?></th>
                  <td> <?php echo $unaPersona->getNombre () ?> </td>
                  <td> <?php echo $unaPersona->getApellido () ?> </td>
                  <td> <?php echo $unaPersona->getFechaNac () ?> </td>
                </tr>
              <?php
              }// fin foreach
              ?>  
          </tbody>
        </table>
        <a href="./autosPersona.php" class="btn btn-primary">Ver Autos</a>
        </div>
        </div>

</section>
<?php
include_once ("./layout/footer.php");
?>