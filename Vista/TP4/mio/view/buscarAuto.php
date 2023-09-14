<?php 
$title="Buscar Auto";
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");
?>
<section class="main-container p-5">

<div class="row">
    <div class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class=" text-center mb-2 ">Buscar Auto</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <form class="mb-3" method="get" action="./action/accionBuscarAuto.php" id="form1">
        <label for="string" class="form-label">Ingrese la Patente:</label>
        <input
          type="text" 
          maxlength="10" 
          placeholder="Patente" 
          class="form-control mb-3"
          id="patente"
          name="patente"
          required
        />
        <input class="btn btn-primary" type="submit" value="Buscar" />
      </form>
    </div>
  </div>

</section>
<?php
include_once ("./layout/footer.php");
?>