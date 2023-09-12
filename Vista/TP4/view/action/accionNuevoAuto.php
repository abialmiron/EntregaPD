<?php 
$title="Buscar Auto";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");
?>
<section class="main-container p-5">


<?php
$datos=data_submitted();
$objAuto=new AmbAuto();
$objPersona=new AmbPersona();
$persona=$objPersona->personaConDni($datos['DniDuenio']);// devuelve un obj / null

?>


<div class="container">
        <div class="">
            <?php
            if($persona==null){
                echo("La persona no se encuentra en la BD");
                echo("<p>Ingrese al siguiente link para cragar los datos de la persona</p>");
                echo("<a href='../nuevaPersona.php'>Cargar Persona</a>"); 
            }// fin if 
            else{
                $resultado=$objAuto->alta($datos);
                if($resultado){
                    echo("<p>La carga del auto se realizó con exito</p>");

                }// fin if
                else{
                    echo("<p> Hubo problema con la carga del auto a la Base de Datos</p>");

                }// fin else
            }// fin if
            ?>


        </div>

    </div>
    


</section>
<?php
include_once ("../layout/footer.php");
?>