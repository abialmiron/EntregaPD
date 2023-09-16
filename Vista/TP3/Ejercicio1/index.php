<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>
    <div class="card col-md-9 mx-auto p-3">
        <div class="card-header">
            <h3 class="text-primary">Subir archivo (solo .doc/.pdf):</h3>
        </div>
        <div class="card-body">
            <form action="accion.php" method="post" enctype="multipart/form-data" class="input-group" onsubmit="return validarArchivo()">
                <input type="file" class="form-control" id="archivo" name="archivo">
                <div class="invalid-feedback">
                Por favor, debe ingresar un archivo JPG.
                </div>
                <button class="btn btn-primary" type="submit">Subir Archivo</button>
            </form>
        </div>
    </div>
<?php include(STRUCTURE_PATH . "footer.php"); ?>
