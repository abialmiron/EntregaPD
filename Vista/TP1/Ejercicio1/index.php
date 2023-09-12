<?php  
include_once ("../../../includes/dirs.php");
include_once (STRUCTURE_PATH."head.php");
?>

<main class="p-5 text-center bg-light">
    <!-- Contenido de la página -->
    <h1>Verificación de Número</h1>
    <form class="d-flex flex-column needs-validation" novalidate method="post" action="vernumero.php" name="form1" id="form1">
        <div class="form-group row col-md-9">
            <label for="numero">Ingrese un número:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="numero" name="numero" >
                <div class="invalid-feedback">
                    Por favor, ingrese un número válido.
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Verificar</button>
            </div>
        </div>
    </form>
</main>

<?php include (STRUCTURE_PATH."footer.php"); ?>
