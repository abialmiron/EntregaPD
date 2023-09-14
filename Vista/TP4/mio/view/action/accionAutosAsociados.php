<?php 
$title="Buscar Auto";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");

$objAuto=new AmbAuto();
$objPersona=new AmbPersona();
$datos=data_submitted();
$autos=$objAuto->autosConMismoDuenio($datos['dniDuenio']);
$arrayPersona=$objPersona->personaConDni($datos['dniDuenio']);
?>
<section class="main-container container p-5">



<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 ">
    <div class="col">
        <div class="card shadow mb-3" style="max-width: 25rem;">  
            <div class="card-header">
                <h3>Propietario</h3>
            </div>
            <div class="card-body">
                <?php
            if($arrayPersona==null){ ?>
                <div class="alert alert-danger text-center">No existe ninguna persona registrada con el DNI: <?php echo $datos['dniDuenio'] ?> </div>
                <?php
            }// fin if 
            else{ ?>
                <h5 class="card-title"><?php echo $arrayPersona->getApellido().", ".$arrayPersona->getNombre() ?></h5>
                <p class="card-text">DNI: <?php echo $arrayPersona->getDni() ?></p>
                <p class="card-text">Fecha de Nacimiento: <?php echo $arrayPersona->getfechaNac() ?></p>
                <p class="card-text">Domicilio: <?php echo $arrayPersona->getDomicilio() ?></p>
                <p class="card-text">Telefono: <?php echo $arrayPersona->getTelefono() ?></p>
                
            </div>
        </div>
        </div>
        <div class="col">

            <?php
            if($autos==null){ ?>
                
                <div class="alert alert-danger text-center"><?php echo $arrayPersona->getNombre().' '.$arrayPersona->getApellido(); ?> no tiene autos registrados. <a href="../nuevoAuto.php">Registre un nuevo Auto</a></a></h3>
                
                <?php }// fin if 
            else{  ?>
            <div class="card align-self-center shadow" style="max-width:50rem">
                
                <div class="card-header">
                    <h3>Autos asociados a <?php echo $arrayPersona->getNombre().' '.$arrayPersona->getApellido(); ?></h3>
                </div>
                <table class="table table-hover " name="tablaAuto" id="tablaAuto">
                    <thead>
                        <tr>
                            <th scope="col">Modelo</th>
                            <th scope="col">Marca</th></th>
                            <th scope="col">Patente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    foreach($autos as $unAuto){
                        if($unAuto<>null){?>
                        <tr>
                          <th scope="row"><?php echo $unAuto->getModelo() ?></th>
                          <td> <?php echo $unAuto->getMarca() ?> </td>
                          <td> <?php echo $unAuto->getPatente() ?> </td>
                        </tr>
                        <?php     
                    }// fin if 
                    
                }// fin foreach
                ?>
                </tbody>
            </table>
        </div>
        <?php
        } }
        ?>




</div>
</div>
</section>

<?php
include_once ("../layout/footer.php");
?>