<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>

<main class="p-5 text-center bg-light">
  <div class="justify-content-md-center align-items-center ">
    <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
      <div class="card-header">
        <h3>Buscar Auto:</h3>
      </div>
      <div class="card-body">
          <form class="needs-validation"  method="get" action="accionBuscarAuto.php" name="form" id="form"  onsubmit="return validarFormulario()">
              <div class="form-group row ">
                  <label class="text-start">Ingrese una patente:</label>
                  <div class="col-8">
                      <input type="text" class="form-control validate" id="patente" name="patente">
                      <div class="invalid-feedback">
                            Por favor, ingrese una patente válida.
                            <br>* La patente debe tener sólo 6 caracteres.
                            <br>* La patente no debe contener ningún caracter especial ni espacio en blanco.
                            <br>* La patente debe contener primero 3 letras y luego 3 números.
                        </div>
                        <div class="valid-feedback">
                          Parece correcto!
                        </div>
                  </div>
                  <div class="col-4">
                      <button type="submit" class="btn btn-primary">Buscar</button>
                  </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</main>

<?php include(STRUCTURE_PATH . "footer.php"); ?>