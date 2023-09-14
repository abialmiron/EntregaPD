<?php
$title="Buscar Persona"; 
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");
?>
<section class="main-container p-5"><div class="row">
    <div class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
        <h3 class=" text-center mb-2 ">Buscar Persona</h3>
        <div class="border bg-light border-3 rounded p-2 mt-3">
            <form class="mb-3" ction="./action/accionBuscarPersona.php"  method="post" name="busquedaPersona";>
                <label class="form-label" for="dni"> Ingrese su nro de documento:</label>
                <input 
                    class="form-control mb-3" 
                    placeholder="DNI" 
                    type="number" 
                    min=1000000    
                    max=99999999
                    name="dni" 
                    id="dni" 
                    required>
                <input class="btn btn-primary" type="submit" name="buscar" id="buscar" value="buscar">
            </form>
        </div>        
    </div>
</section>
<?php
    include_once ("./layout/footer.php");
?>