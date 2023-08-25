<?php include_once("../control/verificarPelicula.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/js/bootstrap.min.js">
    <link href="./index.css" rel="stylesheet">
    <link href="../../cabecera/footer.css" rel="stylesheet">
    <link href="../../cabecera/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div>

        <div class="card text-bg-info mb-3" style="max-width: 18rem; background-color:lightgreen !important; display: flex;
    justify-content: center;">
            <h2 style="background-color: lightgreen;">La película introducida es:</h2>
            <div class="card-body" style="background-color: lightgreen;">
                <?php foreach ($resultado as $clave => $valor) : ?>
                    <b class="card-text"><?php echo ucfirst($clave) . ': ' . $valor; ?></b></br>
                <?php endforeach; ?>
            </div>
        </div>
</body>

</html>