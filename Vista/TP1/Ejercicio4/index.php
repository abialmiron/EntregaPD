<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>
<main class="p-5 bg-light">
	<div class="row justify-content-md-center align-items-center ">
		<div class="col-md-4">
			<div class="card shadow">
				<div class="card-header">
					<h3>Formulario:</h3> 
				</div>
				<div class="card-body">
					<form class="d-flex flex-column needs-validation" novalidate method="GET" action="accionej4.php" id="form3" name="form3">
        		<div class="col-md-10">
							<label class="form-label">Nombre:</label>
							<input type="text" name="nombre" id="nombre" class="form-control validate" maxlength="30" required>
							<div class="invalid-feedback">
								Ingrese caracteres validos.
            	</div>
		    		</div>
						<div class="col-md-10">
							<label class="form-label">Apellido:</label>
							<input type="text" name="apellido" id="apellido" class="form-control validate" maxlength="30" required/>
							<div class="invalid-feedback">
								Ingrese caracteres validos.
        	    </div>
						</div>
						<div class="col-md-10">
							<label class="form-label">Edad:</label>
							<input type="number" name="edad" id="edad" class="form-control validate" maxlength="3" required/> 
							<div class="invalid-feedback">
									Ingrese su edad.
          	  </div>
						</div>
						<div class="col-md-10">
							<label class="form-label">Direccion:</label>
							<input type="text" name="direccion" id="direccion"  class="form-control validate" maxlength="40" required/>
							<div class="invalid-feedback">
								Ingrese su direccion.
							</div>
						</div>
						<div class="form-group text-end mt-3">
							<button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
							<button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
						</div>
	        </form>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>
