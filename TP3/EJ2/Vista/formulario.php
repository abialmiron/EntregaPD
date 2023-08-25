<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subir Archivo al Servidor</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="text-center mb-4">Subir Archivo al Servidor</h2>
  <form action="a_formulario.php" method="post" enctype="multipart/form-data" >
    <div class="mb-3">
      <label for="archivo" class="form-label">Seleccionar Archivo</label>
      <input type="file" class="form-control" id="archivo" name="miArchivo">
    </div>
    <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

