<?php 
$title="Actualizar Datos de Persona";
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");

$objPersona=new AmbPersona();

// NOTA: como el metodo modificar me pide todos los datos para realizar la modificacion por eso pase todos los datos. Por 
// que solo cambie uno de ellos. 
$datos=data_submitted(); 
//var_dump($datos);
$resultado=$objPersona->modificacion($datos);


?>
<section class="main-container p-5">


            <?php 
            if($resultado){
                echo("<p>La modificacion se realizó con éxito</p>");
            }// fin if 
            else{
                echo("<p>Hubo errores en la modificacion de los datos</p>");

            }// fin else
            ?>


        </section>
        <?php
include_once ("./layout/footer.php");
?>