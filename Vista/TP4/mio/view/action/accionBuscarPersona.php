<?php 
$title="Buscar Auto";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");


$dato=data_submitted(); 
$objPersona=new AmbPersona();
$personas=$objPersona->personaConDni($dato['dni']);// devuelve el obj persona (con su datos), buscando  el dni dado por parametro
// Datos obtenidos de la BD
$estaPersona=$personas<>null;
if ($estaPersona){
$nombre=$personas->getNombre();
$apellido=$personas->getApellido();
$telefono=$personas->getTelefono();
$domicilio=$personas->getDomicilio();
$fechaNacimiento=$personas->getfechaNac();
$dni=$dato['dni']; 
}
?>

<section class="main-container p-5">
<?php if($estaPersona){ ?>
    <h3>Datos de la Persona seleccionada</h3>

    <form name="datosModificar" method="post" action="../actualizarDatosPersona.php">
        <div class="row">
        <div class="col">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="Nombre" value="<?php echo($nombre)?>" aria-label="First name">
        </div>
        <div class="col">
        <label for="nombre" class="form-label">Apellido:</label>
        <input type="text" class="form-control" name="Apellido" value="<?php echo($apellido)?>" aria-label="Last name">
        </div>
        <div class="col">
        <label for="nombre" class="form-label">Domicilio:</label>   
        <input type="text" class="form-control" name="Domicilio" value="<?php echo($domicilio)?>" aria-label="Last name">
        </div>
        <div class="col">
        <label for="nombre" class="form-label">Telefono:</label>   
        <input type="text" class="form-control" name="Telefono" value="<?php echo($telefono)?>" aria-label="Last name">
        </div>
        <div class="col">
        <label for="nombre" class="form-label">Fecha Nacimiento:</label>   
        <input type="text" class="form-control" name="fechaNac" value="<?php echo($fechaNacimiento)?>" aria-label="Last name">
        </div>
        <div class="col">  
        <input 
          type="number" 
          min=1000000 
          max=99999999
          class="form-control" 
          name="NroDni" 
          value="<?php echo($dni)?>" aria-label="Last name" 
          hidden>
        </div>

        <div class="col-12">

        <button type="submit" class="btn btn-primary">Editar</button>
        </div>

    </form>
    <?php }else{ ?>
        <h3>No se encontro la persona</h3>
      <div class="alert alert-danger text-center" role="alert"> El DNI ingresado no está registrado. <a href="../buscarPersona.php" class="alert-link">Volver a intentarlo!</a> / <a href="../nuevaPersona.php" class="alert-link">Cargar nueva persona!</a></div>

    <?php } ?>
  </section>
  
  <?php
include_once ("../layout/footer.php");
?>