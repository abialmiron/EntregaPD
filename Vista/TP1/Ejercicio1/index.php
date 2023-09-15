<?php  
include_once ("../../../includes/configuracion.php");
include_once (STRUCTURE_PATH."head.php");
?>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h1 class="text-center">Verificación de Número</h1>
                    <form class="needs-validation" novalidate method="post" action="vernumero.php" name="form1" id="form1">
                        <div class="form-group">
                            <label for="numero">Ingrese un número:</label>
                            <input type="text" class="form-control" id="numero" name="numero" required>
                            <div class="invalid-feedback">
                                Por favor, ingrese un número válido.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Verificar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include (STRUCTURE_PATH."footer.php"); ?>
