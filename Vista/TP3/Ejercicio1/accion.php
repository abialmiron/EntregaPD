<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'Control/TP3/control_3.php');
include_once(ROOT_PATH.'Control/TP3/Archivos.php');

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="margin-top: 10px;">
 <div style="max-height: calc(100vh - 80px);">
<div class="card w-50 mt-3">
    <div class="card-body mt-3">
    <?php
    $carga="recuerde ingresar documentos pdf o doc";
    if($_FILES["archivo"]["error"]<=0)
    {   
       $datos=data_submitted();
       $objControl= new Archivos();
       $upload=$objControl->subirDoc($datos);
       if($upload){
      $carga= $objControl->cargar();}
      else{
        $carga="recuerde ingresar documentos pdf o doc";
      }

    }
    
    ?>  

    <h5 class="card-title">Resultado:</h5>
    <?php echo $carga ?>
         <div class="d-flex justify-content-end"> <!-- Aplicamos la clase justify-content-end aquí -->
            <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
     </div>
 </div>
        
      </div>
    </div>
  </div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>
