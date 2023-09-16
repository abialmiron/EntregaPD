<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
include_once(ROOT_PATH.'Control/TP3/Archivos.php');

?>
 <div style="max-height: calc(100vh - 80px);">
<div class="card w-50">
    <div class="card-body">
    <?php
     $carga="recuerde ingresar documentos .text";
    if($_FILES["archivo"]["error"]<=0)
    {   
       $datos=data_submitted();
       $objControl= new Archivos();
       $type=$_FILES["archivo"]["type"];
       $upload=$objControl->tipoText($type);
       if($upload){
      $objControl->cargar();
      $carga=$objControl->leer();}
      else{
        $carga="recuerde ingresar documentos .text";
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

<?php include(STRUCTURE_PATH . "footer.php"); ?>
