<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Formulario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Resultado del Formulario</h1>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detalleModal">
        Ver Detalles de la Película
    </button>

    <!-- Modal -->
    <div class="modal fade" id="detalleModal" tabindex="-1" aria-labelledby="detalleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detalleModalLabel">Detalles de la Película</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Título:</strong> <?php echo $_POST['titulo']; ?></li>
                        <li class="list-group-item"><strong>Actores:</strong> <?php echo $_POST['actores']; ?></li>
                        <li class="list-group-item"><strong>Director:</strong> <?php echo $_POST['director']; ?></li>
                        <li class="list-group-item"><strong>Guión:</strong> <?php echo $_POST['guion']; ?></li>
                        <li class="list-group-item"><strong>Producción:</strong> <?php echo $_POST['produccion']; ?></li>
                        <li class="list-group-item"><strong>Año:</strong> <?php echo $_POST['anio']; ?></li>
                        <li class="list-group-item"><strong>Nacionalidad:</strong> <?php echo $_POST['nacionalidad']; ?></li>
                        <li class="list-group-item"><strong>Género:</strong> <?php echo $_POST['genero']; ?></li>
                        <li class="list-group-item"><strong>Duración:</strong> <?php echo $_POST['duracion']; ?> minutos</li>
                        <li class="list-group-item"><strong>Restricciones de Edad:</strong> <?php echo $_POST['restricciones']; ?></li>
                        <li class="list-group-item"><strong>Sinopsis:</strong> <?php echo $_POST['floatingTextarea2']; ?></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
