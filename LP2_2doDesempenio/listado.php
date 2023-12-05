<?php
require_once('./componentes/listado/head.inc.php');
require_once('./componentes/listado/funciones.php');
require_once('./config/conexionBD.php');


session_start();
$usuarioRol = $_SESSION['Usuario_Rol'];
if (empty($usuarioRol)) {
  header('Location: cerrarsesion.php');
  exit;
}

$vConexion = ConexionBD();

// Rol=1 (admin)
// Rol=2 (medico)
// Rol=3 (paciente)
// Rol=4 (secretaria)
switch ($usuarioRol) {
  case 1:
  case 4:
    $listadoTurnos = TurnosSecretaria($vConexion);
    break;
  case 3:
    $listadoTurnos = TurnosPorPaciente($vConexion, $_SESSION['Usuario_Id']);
    break;
  case 2:
    $listadoTurnos = TurnosPorMedico($vConexion, $_SESSION['Usuario_Id']);
    break;
  case 1:
    $listadoTurnos = TurnosAdministrador($vConexion);
  default:
    $listadoTurnos = "No hay turnos disponibles";
    break;
}

$cantidadDeTurnos = count($listadoTurnos);

$prestacionesComplejas = 0;
$recaudacion = 0;

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
  <?php require_once('./mobileHeader.inc.php'); ?>
  <!-- [ Mobile header ] End -->

  <!-- [ navigation menu ] start -->
  <?php require_once('./menu.inc.php'); ?>
  <!-- [ navigation menu ] end -->
  <!-- [ Header ] start -->
  <?php require_once('./header.inc.php'); ?>
  <!-- [ Header ] end -->

  <!-- [ Main Content ] start -->
  <section class="pc-container">
    <div class="pcoded-content">

      <!-- [ breadcrumb ] start -->
      <?php require_once('./componentes/listado/breadcrumb.inc.php'); ?>
      <!-- [ breadcrumb ] end -->

      <!-- [ Contextual-table ] start -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <?php
            switch ($usuarioRol) {
              case 1:
              case 4:
                echo "<h5>Todas las Prestaciones Cargadas ($cantidadDeTurnos)</h5>";
                break;
              case 3:
                echo "<h5>Mis Turnos Asignados ($cantidadDeTurnos)</h5>";
                break;
              case 2:
                echo "<h5>Mis Prestaciones Cargadas ($cantidadDeTurnos)</h5>";
                break;
              default:
                echo ' ';
                break;
            }
            ?>

          </div>

          <div class="card-body table-border-style">
            <div class="table-responsive">

              <table class="table">

                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Paciente</th>
                    <th>Obra social</th>
                    <th>Solicitante</th>
                    <th>Prestación</th>
                    <?php if ($usuarioRol == 4) {
                    ?>
                      <th>Acciones</th>
                    <?php } ?>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  for ($i = 0; $i < $cantidadDeTurnos; $i++) {
                    $asistido = $listadoTurnos[$i]['ASISTIDO'];
                    $class = '';
                    $title = '';

                    switch ($asistido) {
                      case 0:
                        $class = 'table-warning';
                        $title = 'Turno No Asistido';
                        break;
                      case 1:
                        $class = 'table-success';
                        $title = 'Turno Asistido';
                        break;
                      default:
                        $class = 'table-light';
                        $title = 'Turno cargado al sistema';
                        break;
                    }
                  ?>

                    <tr class="<?php echo $class; ?>" title="<?php echo $title; ?>">
                      <td><?php echo "<b>" . ($i + 1) . "</b>"; ?></td>
                      <td><?php echo $listadoTurnos[$i]['FECHA_TURNO'] . "<br>" . $listadoTurnos[$i]['HORA_TURNO']; ?></td>
                      <td><?php echo $listadoTurnos[$i]['APELLIDO_PACIENTE'] . ' ' . $listadoTurnos[$i]['NOMBRE_PACIENTE']; ?></td>
                      <td><?php echo $listadoTurnos[$i]['OBRASOCIAL']; ?></td>
                      <td>Dr/a. <?php echo $listadoTurnos[$i]['NOMBRE_MEDICO'] . ' ' . $listadoTurnos[$i]['APELLIDO_MEDICO']; ?></td>
                      <td><?php echo $listadoTurnos[$i]['PRESTACION']; ?>
                        //rol = 2 (medico)
                        <?php if ($usuarioRol != 2) {
                          if ($listadoTurnos[$i]['COMPLEJIDAD'] == 1) {
                        ?>
                            <br>Monto a abonar: $ <?php echo $total = calcularValorPrestacion($listadoTurnos[$i]['PRESTACION_PRECIO'], $listadoTurnos[$i]['PRESTACION_PORCENTAJE']);
                                                  $prestacionesComplejas++;
                                                  if ($listadoTurnos[$i]['ASISTIDO'] == 1) {
                                                    $recaudacion += $total;
                                                  }
                                                  ?>
                          <?php } ?>
                        <?php } ?>
                      </td>
                      <?php if ($usuarioRol == 4) {
                      ?>
                        <td>
                          <a href="#!" title="Asistencia/Inasistencia Turno"><i class="icon feather icon-clock f-20 text-success"></i></a>
                          <a href="#!" title="Cancelar turno"><i class="feather icon-trash-2 ml-3 f-20 text-danger"></i></a>
                        </td>
                      <?php } ?>
                    </tr>

                  <?php } ?>

                </tbody>
              </table>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Contextual-table ] end -->
      <?php if ($usuarioRol == 1) {
      ?>
        <!-- support-section start -->
        <?php require_once('./componentes/listado/sectionRecaudacion.inc.php'); ?>

      <?php } ?>


      <!-- Required Js -->
      <?php require_once('./componentes/listado/scriptsjs.inc.php'); ?>
  </section>

</body>

</html>