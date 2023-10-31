<?php
include_once("../../../includes/configuracion.php");
include_once(STRUCTURE_PATH . "head.php");
?>

<main class="p-5 text-center bg-light">
<div class="justify-content-md-center align-items-center ">
    <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
        <div class="card-header">
            <h3>LOGIN</h3>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column needs-validation" method="post" action="verificaPass.php" id="form" name="form">
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person-fill"></i>
                        </span>
                        <input class="form-control validate" type="text" name="usuario" id="usuario" placeholder="Username" required>
                        <div class="invalid-feedback">
                            Por favor, ingrese un usuario válido.
                            <br>* El usuario debe tener al menos 4 caracteres.
                            <br>* El usuario no debe contener ningún caracter especial.
                        </div>
                        <div class="valid-feedback">
                          Parece correcto!
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-lock-fill"></i>
                        </span>
                        <input class="form-control validate" type="password" name="password" id="password" placeholder="Password" required >
                        <div class="valid-feedback">
                          Parece correcto!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese una clave válida.
                            <br>* La contraseña debe tener al menos 8 caracteres.
                            <br> * La contraseña no puede ser igual al nombre de usuario.
                            <br>* La contraseña debe contener al menos una letra mayúscula, un caracter especial y un número.
                        </div>
                    </div>
                </div>

                <div class="d-grid">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>

            </form>   
        </div>
    </div>
</div>
</main>

<?php include(STRUCTURE_PATH . "footer.php"); ?>