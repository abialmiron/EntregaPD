<!DOCTYPE html>
<html>
<head>
    <title>Verificación de contraseña</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once '../../control/ej1.php';
    /** USUARIOS CARGADOS */
    $usuarios = array(
        array('usuario' => 'AgusFlores', 'clave' => '12345678A')
        // Puedes agregar más usuarios aquí
    );

    /** INICIO DE SESIÓN */
    if ($_POST) {
        $usuarioIngresado = $_POST['usuario'];
        $claveIngresada = $_POST['clave'];
        $obj=new Usuarios();
        $verificacion= $obj->verificarPass($usuarioIngresado, $claveIngresada,$usuarios);
        echo '<div class="alert alert-dark" role="alert">'.$verificacion.'</div>';

    }
    ?>
</body>
</html>
