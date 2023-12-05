<?php

require_once('./config/conexionBD.php');


function DataLogin($vUsuario, $vClave, $vConexion)
{
    $Usuario = array();
    $SQL = "SELECT u.id_usuario, u.nombre, u.apellido, u.dni, u.email, u.clave, u.img, u.id_rol, u.id_obrasocial, r.nombre_rol,
            o.nombre_obrasocial
            FROM usuarios u
            LEFT JOIN rol r ON u.id_rol = r.id_rol
            LEFT JOIN obrassociales o ON u.id_obrasocial = o.id_obrasocial
            WHERE u.email = '$vUsuario' AND u.clave = MD5('$vClave')";

    $rs = mysqli_query($vConexion, $SQL);

    $data = mysqli_fetch_array($rs);
    if (!empty($data)) {
        $Usuario['ID'] = $data['id_usuario'];
        $Usuario['NOMBRE'] = $data['nombre'];
        $Usuario['APELLIDO'] = $data['apellido'];
        $Usuario['DNI'] = $data['dni'];
        $Usuario['EMAIL'] = $data['email'];
        if (empty($data['img'])) {
            $data['img'] = 'user.jpg';
        }
        $Usuario['IMG'] = $data['img'];
        $Usuario['ID_ROL'] = $data['id_rol'];
        $Usuario['NOMBRE_ROL'] = $data['nombre_rol'];
        //borre los datos de la obra social
    }
    return $Usuario;
}

function Login()
{
    $Mensaje = '';

    if (!empty($_POST['BotonLogin'])) {
        $vValidacion = ValidarDatos();
        if (empty($vValidacion)) {
            $MiConexion = ConexionBD();
            $UsuarioLogueado = DataLogin($_POST['email'], $_POST['password'], $MiConexion);

            if (!empty($UsuarioLogueado)) {

                $_SESSION['Usuario_Id'] = $UsuarioLogueado['ID'];
                $_SESSION['Usuario_Nombre'] = $UsuarioLogueado['NOMBRE'];
                $_SESSION['Usuario_Apellido'] = $UsuarioLogueado['APELLIDO'];
                $_SESSION['Usuario_Dni'] = $UsuarioLogueado['DNI'];
                $_SESSION['Usuario_Email'] = $UsuarioLogueado['EMAIL'];
                $_SESSION['Usuario_Img'] = $UsuarioLogueado['IMG'];
                $_SESSION['Usuario_Rol'] = $UsuarioLogueado['ID_ROL'];
                $_SESSION['Usuario_Rol_Nombre'] = $UsuarioLogueado['NOMBRE_ROL'];

                header('Location: index.php');
                exit;
            } else {
                $Mensaje = 'Usuario y/o Contraseña incorrectos. Intenta nuevamente.';
            }
        } else {
            $Mensaje = $vValidacion;
        }
    }

    return $Mensaje;
}


function ValidarDatos()
{
    $vMensaje = '';

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    switch (true) {
        case empty($email):
            $vMensaje .= 'Datos incorrectos, ingresa nuevamente. <br />';
            break;
        case empty($password) || strlen($password) < 3:
            $vMensaje .= 'Usuario y/o Contraseña incorrectos. Intenta nuevamente. <br />';
            break;
        default:

            break;
    }

    return $vMensaje;
}
