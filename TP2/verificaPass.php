<!DOCTYPE html>
<html>
<head>
    <title>Verificación de contraseña</title>
</head>
<body>
    <?php
    /** USUARIOS CARGADOS */
    $usuarios = array(
        array('usuario' => 'AgusFlores', 'clave' => '12345678A')
        // Puedes agregar más usuarios aquí
    );

    /** INICIO DE SESIÓN */
    if ($_POST) {
        $usuarioIngresado = $_POST['usuario'];
        $claveIngresada = $_POST['clave'];

        $usuarioEncontrado = null;

        foreach ($usuarios as $usuarioExistente) {
            if ($usuarioExistente['usuario'] === $usuarioIngresado && $usuarioExistente['clave'] === $claveIngresada) {
                $usuarioEncontrado = $usuarioExistente;
                break;
            }
        }
        
        if ($usuarioEncontrado) {
            echo '¡Bienvenido, ' . $usuarioEncontrado['usuario'] . '!';
        } else {
            echo 'Error: Usuario o contraseña incorrectos.';
        }
    }
    ?>
</body>
</html>
