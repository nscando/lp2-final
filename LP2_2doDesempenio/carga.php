<?php
require_once('./componentes/carga/head.inc.php');
require_once('./componentes/carga/funciones.php');
require_once('./config/conexionBD.php');

session_start();
$usuarioRol = $_SESSION['Usuario_Rol'];

if (empty($usuarioRol) || $usuarioRol != 2) {
  echo '<div style="display: flex; justify-content: center; align-items: center; height: 150px;">
              <div class="alert alert-danger" role="alert" style="font-size: 20px;">
                  <h2 style="color: red; text-align: center;">No tenés acceso a esta página. Serás redirigido al inicio.</h2>
              </div>
          </div>';
  header('Refresh: 3; URL=index.php'); // Redirigir después de 3 segundos
  exit;
}

$vConexion = ConexionBD();

$listadoPacientes = ListadoPacientes($vConexion);
$cantidadPacientes = count(ListadoPacientes($vConexion));
$listadoPrestaciones = ListadoPrestaciones($vConexion);
$cantidadPrestaciones = count(ListadoPrestaciones($vConexion));


if (!empty($_POST['BotonRegistrarTurno'])) {
  $vValidacion = ValidarRegistro();

  if (empty($vValidacion)) { ///no hubo errores, paso a registrar
    if (RegistrarTurno($vConexion) != false) {
      $_SESSION['Mensaje'] = "Se han registrado los datos ingresados.";
      $_SESSION['Clase_Mensaje'] = 'success';
      header('Location: carga.php');
      exit;
    }
  } else {
    $_SESSION['Mensaje'] = $vValidacion;
    $_SESSION['Clase_Mensaje'] = 'warning';
  }
}

?>

<body class="">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ Mobile header ] start -->
  <?php
  require_once('./mobileHeader.inc.php');
  ?>

  <!-- [ Mobile header ] End -->

  <!-- [ navigation menu ] start -->
  <?php
  require_once('./menu.inc.php');
  ?>
  <!-- [ navigation menu ] end -->
  <!-- [ Header ] start -->


  <!-- [ Header ] end -->
  <?php
  require_once('./header.inc.php');
  ?>
  <!-- [ Main Content ] start -->
  <section class="pc-container">
    <div class="pcoded-content">
      <!-- [ breadcrumb ] start -->
      <?php require_once('./componentes/carga/breadcrumb.inc.php') ?>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ form-element ] start -->

        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5>Cargar Solicitud </h5>
              <hr>
              <?php
              if (!empty($_SESSION['Mensaje'])) {
              ?>
                <div class="alert alert-<?php echo $_SESSION['Clase_Mensaje']; ?>" role="alert">
                  <i data-feather="alert-circle"></i>
                  <?php echo $_SESSION['Mensaje']; ?>
                </div>
              <?php
              }
              ?>

              <div class="alert alert-info" role="alert">
                <i data-feather="info"></i>
                Los campos con * son obligatorios.
              </div>

              <form role="form" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Indique el Paciente (*)
                      </label>
                      <select class="form-control" name="paciente" id="paciente">
                        <option>Selecciona un paciente...</option>
                        <?php
                        $Selected = '';
                        for ($i = 0; $i < $cantidadPacientes; $i++) {
                          $Selected = (!empty($_POST['paciente']) && $_POST['paciente'] == $listadoPacientes[$i]['ID']) ? 'selected' : '';
                        ?>
                          <option value="<?php echo $listadoPacientes[$i]['ID']; ?>" <?php echo $Selected; ?> >
                            <?php echo $listadoPacientes[$i]['NOMBRE'] . ' ' . $listadoPacientes[$i]['APELLIDO'] . ' (' . $listadoPacientes[$i]['DNI'] . ')'; ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Seleccione Prestación (*)</label>
                      <select class="form-control" name="prestacion" id="prestacion">
                        <option>Selecciona una opción...</option>
                        <?php
                        $Selected = '';
                        for ($i = 0; $i < $cantidadPrestaciones; $i++) {
                          $Selected = (!empty($_POST['prestacion']) && $_POST['prestacion'] == $listadoPrestaciones[$i]['ID_PRESTACION']) ? 'selected' : '';
                        ?>
                          <option value="<?php echo $listadoPrestaciones[$i]['ID_PRESTACION']; ?>" <?php echo $Selected; ?> >
                            <?php echo $listadoPrestaciones[$i]['DENOMINACION']; ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Ingrese el Diagnóstico</label>
                      <textarea class="form-control" name="diagnostico" id="diagnostico" rows="3"></textarea>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <label for="datepicker">Ingresa Fecha y Hora (*)</label>
                    <div class="col-md-3">
                      <div class="md-form md-outline input-with-post-icon datepicker">
                        <input class="form-control" name="fecha_turno" type="date" id="datepicker" placeholder="Selecciona fecha">
                      </div>

                      <div class="md-form md-outline input-with-post-icon datepicker">
                        <input class="form-control" name="hora" placeholder="Selecciona hora" type="text" id="datetime" />
                      </div>
                    </div>

                  </div>

                  <div class="col-md-12">
                    <button class="btn  btn-primary" type="submit" name="BotonRegistrarTurno" value="Registrar Turno">Registrar</button>
                    <input class="btn btn-secondary" name="Limpiar" type="reset" value="Limpiar datos">
                    <a class="btn btn-light" href="index.php" role="button" value="Volver a Home">Volver a Home</a>
                  </div>

                </div>

                <script>
                  $('#datetime').datetimepicker({
                    format: 'HH:mm:ss'
                  });
                </script>
            </div>
          </div>
        </div>
        </form>
        <!-- [ form-element ] end -->
      </div>
      <!-- [ Main Content ] end -->

    </div>
  </section>

  <?php require_once('./componentes/carga/scriptsjs.inc.php') ?>
</body>

</html>