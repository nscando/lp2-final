    <nav class="pc-sidebar ">
      <div class="navbar-wrapper">
        <div class="m-header">
          <a href="index.php" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="assets/images/logo.svg" alt="" class="logo logo-lg">
            <img src="assets/images/logo-sm.svg" alt="" class="logo logo-sm">
          </a>
        </div>
        <div class="navbar-content">
          <ul class="pc-navbar">
            <li class="pc-item pc-caption">
              <label>Navegación</label>
            </li>
            <li class="pc-item pc-caption">
              <label>Prestaciones</label>
            </li>
            <?php
            if ($_SESSION['Usuario_Rol'] == 2) {
            ?>
              <li class="pc-item"><a href="carga.php" class="pc-link ">
                  <span class="pc-micon"><i data-feather="layout"></i></span>
                  <span class="pc-mtext">Cargar nueva</span></a>
              </li>
            <?php   } ?>

            <li class="pc-item pc-caption">
              <label>Listados</label>
            </li>
            <li class="pc-item"><a href="listado.php" class="pc-link ">
                <?php
                if ($_SESSION['Usuario_Rol'] == 1 || $_SESSION['Usuario_Rol'] == 4) {
                ?>
            <li class="pc-item"><a href="listado.php" class="pc-link ">
                <span class="pc-micon"><i data-feather="list"></i></span>
                <span class="pc-mtext">Listado total</span></a>
            </li>
          <?php
                } elseif ($_SESSION['Usuario_Rol'] == 2) {
          ?>
            <li class="pc-item"><a href="listado.php" class="pc-link ">
                <span class="pc-micon"><i data-feather="list"></i></span>
                <span class="pc-mtext">Listado de mis cargas</span></a>
            </li>
          <?php
                } elseif ($_SESSION['Usuario_Rol'] == 3) {
          ?>
            <li class="pc-item"><a href="listado.php" class="pc-link ">
                <span class="pc-micon"><i data-feather="list"></i></span>
                <span class="pc-mtext">Listado mis turnos</span></a>
            </li>
          <?php
                }
          ?>
          </li>

          </ul>
        </div>
      </div>
    </nav>