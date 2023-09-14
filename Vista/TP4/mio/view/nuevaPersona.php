<?php 
$title="Nueva Persona";
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");
?>


<section class="main-container p-5">
    <div class="row">
        <div class="container p-3 col-auto">
            <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
                <h3 class=" text-center mb-2 ">Cargar Nueva Persona</h3>
                <div class="border bg-light border-3 rounded p-2 mt-3">
                    <form name="cargaPersona" id="cargaPersona" method="POST" action="./action/accionNuevaPersona.php">
                        <div class="row">
                            <div class="col-6">
                                <label for="patente" class="form-label">Nombre:</label>
                                <input
                                  type="text" 
                                  maxlength="15" 
                                  placeholder="Nombre" 
                                  class="form-control mb-3"
                                  id="nombre"
                                  name="nombre"
                                  required
                                />
                                <label for="patente" class="form-label">Apellido:</label>
                                <input
                                  type="text" 
                                  maxlength="15" 
                                  placeholder="Apellido" 
                                  class="form-control mb-3"
                                  id="apellido"
                                  name="apellido"
                                  required
                                />                                
                                <label for="nroDni" class="form-label">DNI:</label> 
                                <input 
                                  type="number" 
                                  min=1000000
                                  max=99999999
                                  placeholder="Dni Dueño" 
                                  class="form-control mb-3" 
                                  name="nroDni" 
                                  id="nroDni" 
                                  require>
                                </div>
                                <div class="col-6">
                                  <label for="fechaNac" class="form-label">F Nacimiento:</label>
                                  <input 
                                    type="date" 
                                    name="fechaNac"
                                    id="fechaNac"
                                    placeholder="Modelo" 
                                    class="form-control mb-3" 
                                    required>
                                  <label for="telefono" class="form-label">Teléfono:</label> 
                                  <input 
                                    type="number" 
                                    minlength="11" 
                                    maxlength="11" 
                                    placeholder="Teléfono" 
                                    class="form-control mb-3" 
                                    name="telefono" 
                                    id="telefono" 
                                    require>
                                  <label for="domicilio" class="form-label">Dirección:</label>
                                  <input 
                                    type="text" 
                                    minlength="4" 
                                    maxlength="15"
                                    placeholder="Dirección" 
                                    class="form-control mb-3" 
                                    name="domicilio" 
                                    id="domicilio" 
                                required>
                                
                              </div>    
                            </div>      
                          <input class="btn btn-primary" type="submit" value="Cargar" />
                      </form>
                  </div>
              </div>
          </div>
      </div>
</section>
<?php
include_once ("./layout/footer.php");
?>