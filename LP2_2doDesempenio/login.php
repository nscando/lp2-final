<?php
require_once('./componentes/login/funciones.php');
require_once('./componentes/login/head.inc.php');

session_start();

$MensajeError = Login();
?>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">

                        <h2>Ingresa al panel</h2>
                        <h4 class="mb-3 f-w-400">Login</h4>
                        <?php
                        if (!empty($MensajeError)) {
                            echo '<div class="form-group text-left mt-2">';
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $MensajeError;
                            echo '</div>';
                            echo '</div>';
                        } ?>
                        <div class="form-group text-left mt-2">
                            <div class="alert alert-info" role="alert">
                                Usuario y clave son requeridos.
                            </div>
                        </div>
                        <form role="form" method='post'>
                            <fieldset>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                    </div>
                                    <input class="form-control" type="email" class="form-control" placeholder="Email address" name="email" required>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="lock"></i></span>
                                    </div>
                                    <input class="form-control" type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <button class="btn btn-block btn-primary mb-4" type="submit" value="Login" name="BotonLogin">Ingresa</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<?php require_once('./componentes/login/scriptsjs.inc.php') ?>

</body>

</html>