<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>
<body>
        <form name="formularioHoras" id="formularioHoras" method="get" action="accionej2.php">
            <h2>HORARIOS PROGRAMACION DINAMICA</h2>
            Lunes:
            <input type="number" id="lunes_form" name="lunes_form" min="0" required> <br>
            Martes:
            <input type="number" id="martes_form" name="martes_form" min="0" required><br>
            Miercoles:
            <input type="number" id="miercoles_form" name="miercoles_form" min="0" required><br>
            Jueves:
            <input type="number" id="jueves_form" name="jueves_form" min="0" required><br>
            Viernes:
            <input type="number" id="viernes_form" name="viernes_form" min="0" required><br>
            <br><input type="submit"> <input type="reset"><br>
            <br><a href="MENU.html">Volver Inicio TP1</a>
        </form>
    </body>
<?php include(STRUCTURE_PATH . "footer.php"); ?>

