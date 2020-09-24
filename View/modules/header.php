
<div class="d-flex" id="content-wrapper">
  <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">Portal de AutoGestion</h4>
            </div>
            <div class="menu">
            <li class="nav-item dropdown">
            <a href="#" class="nav-link  dropdown-toggle d-block text-light p-3 border-0 " href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ADD</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="index.php?action=beid">BEIDS</a>
                      <a class="dropdown-item" href="index.php?action=apn">APNS</a>
                      <a class="dropdown-item" href="index.php?action=spn">SPNS</a>
                    </div>
              </li>
              <li class="nav-item dropdown">
                    <a href="#" class="nav-link  dropdown-toggle d-block text-light p-3 border-0 " href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mensajeria</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Barring</a>
                      <a class="dropdown-item" href="#">Bienvenida</a>
                      <a class="dropdown-item" href="#">Portabilidad</a>
                      <a class="dropdown-item" href="#">Cambio DN</a>
                    </div>
                <a href="#" class="d-block text-light p-3 border-0">
                    Consulta de saldo</a>
            </div>
            </li>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo $_SESSION["user"]; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Registrar</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>