<!DOCTYPE html>
<html>
    <head><title></title></head>
    <link rel="stylesheet" href="../estilos.css">
    <body>
    <?php
    require_once '../../Control/ej1.php';
    if ($_POST) {
    $numero = $_POST["numero"];
    $modelo = new NumeroModelo();
    $resultado = $modelo->verificarNumero($numero);
    echo '<div class="rta">El numero es: '.$resultado.'<br> <a href="../vistaej1.html">Volver</a></div> <br>';}
    ?>
    </body>
</html>


