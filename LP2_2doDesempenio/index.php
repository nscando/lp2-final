<?php
require_once('./componentes/principal/head.inc.php');
session_start();
$usuarioRol = $_SESSION['Usuario_Rol'];
if (empty($usuarioRol)) {
    header('Location: cerrarsesion.php');
    exit;
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
    <?php require_once('./mobileHeader.inc.php') ?>
    <!-- [ Mobile header ] End -->

    <!-- [ navigation menu ] start -->
    <?php require_once('./menu.inc.php') ?>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <?php require_once('./header.inc.php') ?>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4><?php echo $_SESSION['Usuario_Nombre']; ?></h4>
                            <h3>Bienvenid@! </h3>
                            <hr>
                            Elige una opción para utilizar el panel.
                        </div>
                    </div>
                </div>
                <!-- [ form-element ] end -->
            </div>
            <!-- [ Main Content ] end -->

        </div>
    </section>

    <?php
    require_once('./componentes/principal/scriptsjs.inc.php');
    ?>

</body>

</html>