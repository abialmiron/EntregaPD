<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>
<main class="p-5 bg-light">
<div class="justify-content-md-center align-items-center ">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h3>Horarios Programación Dinámica</h3>
                    </div>
                    <div class="card-body">

                        <form class="d-flex flex-column needs-validation" novalidate method="post" action="accionej2.php" name="form" id="form">    
                            <div class="form-group col-md-6"> 
            <label>Lunes:</label>
            <input type="number" class="form-control validate" id="lunes_form" name="lunes_form" placeholder="Ingresa un número" maxlength="5" required>
            <div class="invalid-feedback">
            Ingrese un número válido.
            </div>
        </div>
        <div class="form-group col-md-6"> 
            <label>Martes:</label>
            <input type="number" class="form-control validate"  id="martes_form" name="martes_form" placeholder="Ingrese un número" maxlength="5" required>
            <div class="invalid-feedback">
                Ingrese un número válido.
            </div>
        </div>

        <div class="form-group col-md-6">
            <label>Miércoles:</label>
            <input type="number" class="form-control validate" id="miercoles_form" name="miercoles_form" placeholder="Ingrese un número" maxlength="5" required>
            <div class="invalid-feedback">
            Ingrese un número válido.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Jueves:</label>
            <input type="number" class="form-control validate" id="jueves_form" name="jueves_form" placeholder="Ingrese un número" maxlength="5" required>
            <div class="invalid-feedback">
                Ingrese un número válido.
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Viernes:</label>
            <input type="number" class="form-control validate"  id="viernes_form" name="viernes_form" placeholder="Ingrese un número" maxlength="5" required>
            <div class="invalid-feedback">
                Ingrese un número válido.
            </div>
        </div>
        <div class="form-group text-end mt-3">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </form>
</div>
</div>
    </div>
</div>
</main>
<?php include(STRUCTURE_PATH . "footer.php"); ?>

