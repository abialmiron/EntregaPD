<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'Control/TP3/control_3.php');
include_once(ROOT_PATH.'Control/TP3/Archivos.php');

?>
<main class="p-5 text-center bg-light">
<div class="justify-content-md-center align-items-center ">
<div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
  <div class="card-header">
  <h3>Resultado</h3>
  </div>
    <div class="card-body">
    <?php
    $carga="<h5>Recuerde ingresar documentos pdf o doc</h5>";
    if($_FILES["archivo"]["error"]<=0)
    {   
       $datos=data_submitted();
       $objControl= new Archivos();
       $upload=$objControl->subirDoc($datos);
       if($upload){
      $carga= $objControl->cargar();}
      else{
        $carga="<h5>Recuerde ingresar documentos pdf o doc</h5>";
      }

    }
    
    ?>  
    <?php echo $carga ?>
    <div class="form-group text-end mt-3">
            <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
     </div>
 </div>
        
      </div>
    </div>
  </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>
