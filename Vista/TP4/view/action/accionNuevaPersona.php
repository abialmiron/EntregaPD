<?php 
$title="Buscar Auto";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");
$datos=data_submitted();
$objPersona=new AmbPersona();
$resutadoAlta=$objPersona->alta($datos);
?>
<section class="main-container p-5">

<?php
            if($resutadoAlta){
                echo("<h2>La persona fue cargada con exito</h2>");
            }// fin if 
            else{
                echo("<h2>Hubo problemas con la carga</h2>");

            }// fin else
            ?>

</section>
<?php
include_once ("../layout/footer.php");
?>