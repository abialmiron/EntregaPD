
<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>
<main class="p-5 text-center bg-light">
<div class="justify-content-md-center align-items-center ">
    <div class="card shadow col-lg-10  mx-auto">
        <div class="card-header text-start">
            <h3>
						<i class="bi bi-pencil-square fs-4"></i> Cinem@s
					</h3> 
        </div> <br/> 
        <div class="card-body text-start">
		<form id="formCine" name="formCine" id="formCine" action="accion.php" method="post" class="row g-3 needs-validation" novalidate enctype="multipart/form-data" class="input-group">
		<div class="col-md-6">
			<label class="form-label">Titulo:</label>
			<input type="text" name="titulo" id="titulo" class="form-control validate" required>
			<div class="invalid-feedback">
               Por favor, ingrese un titulo.
             </div>
		</div>

		<div class="col-md-6">
		<label class="form-label">Actores:</label>
		<input type="text" name="actores" id="actores" class="form-control validate" required/>
		<div class="invalid-feedback">
                            Por favor, ingrese actores.
        </div>
		</div>
		<div class="col-md-6">
			<label class="form-label">Director:</label>
			<input type="text" name="director" id="director" class="form-control validate" required/> 
			<div class="invalid-feedback">
             Por favor, ingrese un director.
            </div>
		</div>
		<div class="col-md-6">
		 <label class="form-label">Gui&oacute;n:</label>
		 <input type="text" name="guion" id="guion"  class="form-control validate" required /> 
		 <div class="invalid-feedback">
             Por favor, ingrese Gui&oacute;n.
         </div>
		</div>
		<div class="col-md-6">
		<label class="form-label">Producci&oacute;n:</label>
		<input type="text" name="produccion" id="produccion" class="form-control validate" required/>  
		<div class="invalid-feedback">
             Por favor, ingrese una Producci&oacute;n.
         </div>
	    </div>
		<div class="col-md-3">
		<label class="form-label">A&ntilde;o: </label>
		<input type="number" name="anio" id="anio" class="form-control validate" maxlength="4" title="Ingrese un A&ntilde;o  valido (4 digitos numericos)" required>
		<div class="invalid-feedback">
             Por favor, ingrese un A&ntilde;o.
         </div>
	    </div>
		<div class="col-md-6">
		<label class="form-label">Nacionalidad:</label>
		<input type="text" name="nacionalidad" id="nacionalidad" class="form-control validate" required/>
		<div class="invalid-feedback">
             Por favor, ingrese una Nacionalidad.
         </div>
		</div>
		<div class="col-md-3">
		<label class="form-label" >Genero:</label>
		<select class="form-select validate" id="genero" name="genero" required>
			<option value="">Elige...</option>
			<option value="comedia"> Comedia </option>
			<option value="drama"> Drama </option>
			<option value="terror"> Terror </option>
			<option value="romanticas"> Romanticas </option>
			<option value="suspenso"> Suspenso </option>
			<option value="otras"> Otras </option>
		</select> 
		<div class="invalid-feedback">
             Por favor, ingrese una opcion.
            </div>
		</div>

		<div class="col-md-6">
		<label class="form_label">Duraci&oacute;n:</label>
		<input type="number" id="duracion" name="duracion" class="form-control validate" maxlength="3" required>(minutos) 
		<div class="invalid-feedback">
             Por favor, ingrese una Duraci&oacute;n. (Solo 3 digitos)
         </div>
	    </div>

		<div class="col-md-6">
			<label class="form-label" name="restricciones" id="restricciones" ><strong>  Restricciones de edad  </strong></label><br>
			<input class="form-check-input" type="radio" id="todopublico" name="restricciones" value="Todo publicos" required/> Todo publico
        	<input class="form-check-input" type="radio" id="mayores7" name="restricciones" value="Mayores de 7" required/> Mayores de 7 a&ntilde;os
        	<input class="form-check-input" type="radio" id="mayores18" name="restricciones" value="Mayores de 18" required/> Mayores de 18 a&ntilde;os <br/> <br/>
			<div class="invalid-feedback">
				Por favor seleccione al menos una opcion.
			</div>
		</div>
		<div class="col-md-6">
		<label class="form-label">Sinopsis:</label>
	    </div>
		<div class="form-floating">
		<textarea class="form-control validate" placeholder="Leave a comment here" id="floatingTextarea2" name="floatingTextarea2" style="height: 100px" required></textarea>
		<div class="invalid-feedback">
             Por favor, ingrese una sipnosis.
         </div>

		</div>
		<div>
        <input type="file" class="form-control validate" id="archivo" name="archivo" accept=".jpg, .jpeg" REQUIRED/>
        <div class="invalid-feedback">
             Por favor, debe ingresar un archivo JPG.
        </div>
        </div>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
			<button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
			<button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
		  </div>
        </form>
        </div>
    </div>
		</div>
		</div>
		</div>

</main>

<?php include(STRUCTURE_PATH . "footer.php"); ?>
