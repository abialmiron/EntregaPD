<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>
    <main class="p-5 text-center bg-light">
<div class="justify-content-md-center align-items-center ">
    <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
        <div class="card-header">
            <h3>Subir archivo (solo .doc/.pdf)</h3>
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
    </div>
    </div>
    </main>

<?php include(STRUCTURE_PATH . "footer.php"); ?>
