  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item p-0 me-5">
            <a class="nav-link p-0 me-3 ms-3" aria-current="page" href="<?php echo $BASE_URL; ?>view"><i class="bi bi-car-front-fill fs-4 p-0" ></i><i class="fs-5 p-0"> InfoAutos</i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle   role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Trámites
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item " aria-current="page" href="<?php echo $BASE_URL; ?>view/cambioDuenio.php">Cambio de Dueño</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"   role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Personas
            </a>
            <ul class="dropdown-menu"> 
              <li>
                <a class="dropdown-item" aria-current="page" href="<?php echo $BASE_URL; ?>view/listaPersonas.php">Lista de Personas</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" aria-current="page" href="<?php echo $BASE_URL; ?>view/nuevaPersona.php">Nueva Persona</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" aria-current="page" href="<?php echo $BASE_URL; ?>view/buscarPersona.php">Buscar Persona</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"   role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Autos
            </a>
            <ul class="dropdown-menu"> 
              <li>
                <a class="dropdown-item" aria-current="page" href="<?php echo $BASE_URL; ?>view/verAutos.php">Ver Autos</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" aria-current="page" href="<?php echo $BASE_URL; ?>view/nuevoAuto.php">Nuevo Auto</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" aria-current="page" href="<?php echo $BASE_URL; ?>view/buscarAuto.php">Buscar Auto</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>