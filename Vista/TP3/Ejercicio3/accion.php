<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'Control/TP3/Archivos.php');
include_once(ROOT_PATH.'Control/TP3/control_3.php');
?>
<main class="p-5 text-center bg-light">
<div class="justify-content-md-center align-items-center ">
<div class="card shadow  col-lg-8  mx-auto">
  <div class="card-header">
  <h3>Detalles de la pelicula</h3>
  </div>
    <div class="card-body">
    <?php
 if($_FILES["archivo"]["error"]<=0)
 {  $datos=data_submitted();
    $objControl=new control_3;
    $string=$objControl->informacion($datos);
    $objArchivo= new Archivos();
   $carga=$objArchivo->subirArchivo($datos);
 }
 ?>  

    <ul class="list-group list-group-flush">
             <li class="list-group-item"><strong>Título:</strong> <?php echo $string['titulo']; ?></li>
             <li class="list-group-item"><strong>Actores:</strong> <?php echo $string['actores']; ?></li>
             <li class="list-group-item"><strong>Director:</strong> <?php echo $string['director']; ?></li>
             <li class="list-group-item"><strong>Guión:</strong> <?php echo $string['guion']; ?></li>
             <li class="list-group-item"><strong>Producción:</strong> <?php echo $string['produccion']; ?></li>
             <li class="list-group-item"><strong>Año:</strong> <?php echo $string['anio']; ?></li>
             <li class="list-group-item"><strong>Nacionalidad:</strong> <?php echo $string['nacionalidad']; ?></li>
             <li class="list-group-item"><strong>Género:</strong> <?php echo $string['genero']; ?></li>
             <li class="list-group-item"><strong>Duración:</strong> <?php echo $string['duracion']; ?> minutos</li>
             <li class="list-group-item"><strong>Restricciones de Edad:</strong> <?php echo $string['restricciones']; ?></li>
             <li class="list-group-item"><strong>Sinopsis:</strong> <?php echo $string['floatingTextarea2']; ?></li>
             <li class="list-group-item"><strong>Imagen:<br></strong><?php echo $carga ?></li>
         </ul>
         <div class="d-flex justify-content-end"> 
            <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
     </div>
 </div>
        
      </div>
    </div>
  </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>

