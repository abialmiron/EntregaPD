<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>
<body>
    <form name="formularioHoras" id="formularioHoras" method="get" action="accionej2.php">
        <div class="container mt-5">
            <div class="text-center">
                <h2 class="text-primary">HORARIOS PROGRAMACION DINAMICA</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Día</th>
                            <th>Horas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes:</td>
                            <td><input type="number" id="lunes_form" name="lunes_form" min="0" required></td>
                        </tr>
                        <tr>
                            <td>Martes:</td>
                            <td><input type="number" id="martes_form" name="martes_form" min="0" required></td>
                        </tr>
                        <tr>
                            <td>Miércoles:</td>
                            <td><input type="number" id="miercoles_form" name="miercoles_form" min="0" required></td>
                        </tr>
                        <tr>
                            <td>Jueves:</td>
                            <td><input type="number" id="jueves_form" name="jueves_form" min="0" required></td>
                        </tr>
                        <tr>
                            <td>Viernes:</td>
                            <td><input type="number" id="viernes_form" name="viernes_form" min="0" required></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="reset" class="btn btn-secondary" value="Restablecer">
            </div>
        </div>
    </form>
</body>
<?php include(STRUCTURE_PATH . "footer.php"); ?>

