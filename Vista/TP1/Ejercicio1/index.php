<?php  
include_once ("../../../includes/configuracion.php");
include_once (STRUCTURE_PATH."head.php");
?>
<main class="p-5 bg-light">
<div class="justify-content-md-center align-items-center ">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h3>Verificación de Número</h3>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate method="post" action="vernumero.php" name="form1" id="form1">
                            <div class="form-group text-start ">
                                <label for="numero">Ingrese un número:</label>
                                <input type="text" class="form-control validate" id="numero" name="numero" required>
                                <div class="invalid-feedback">
                                    Por favor, ingrese un número válido.
                                </div>
                            </div>
                            <div class="form-group text-end mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Verificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include (STRUCTURE_PATH."footer.php"); ?>
    