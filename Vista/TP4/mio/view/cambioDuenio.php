<?php 
$title="Cambio de Dueño";
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");
?>
<section class="main-container p-5">

<div class="row">
    <div class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class=" text-center mb-2 ">Cambiar dueño de un Auto</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <form class="mb-3" method="post" action="./action/accionCambioDuenio.php" id="cambiaDuenio">
        <label for="text" class="form-label">Ingrese la Patente:</label>
        <input
          type="text" 
          maxlength="10" 
          placeholder="Patente" 
          class="form-control mb-3"
          id="Patente"
          name="Patente"
          required
        />
        <label for="NroDni">Ingrese el DNI de la persona:</label><br>
        <input
          type="number" 
          min=1000000 
          max=99999999
          placeholder="DNI" 
          class="form-control mb-3"
          id="NroDni"
          name="NroDni"
          required
        />
        <input class="btn btn-primary" type="submit" value="Cambiar" />
      </form>
    </div>
  </div>

</section>
<?php
include_once ("./layout/footer.php");
?>