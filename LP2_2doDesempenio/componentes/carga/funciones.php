
<?php

function ListadoPacientes($vConexion)
{

    $ListadoPacientes = array();

    $SQL = "SELECT id_usuario, nombre, apellido, dni, id_rol  FROM usuarios WHERE id_rol = 3";

    $rs = mysqli_query($vConexion, $SQL);

    $i = 0;
    while ($data = mysqli_fetch_array($rs)) {
        $ListadoPacientes[$i]['ID'] = $data['id_usuario'];
        $ListadoPacientes[$i]['NOMBRE'] = $data['nombre'];
        $ListadoPacientes[$i]['APELLIDO'] = $data['apellido'];
        $ListadoPacientes[$i]['DNI'] = $data['dni'];
        $i++;
    }

    return $ListadoPacientes;
}

function ListadoPrestaciones($vConexion)
{

    $ListadoPrestaciones = array();

    $SQL = "SELECT id_prestacion, denominacion FROM prestaciones";

    $rs = mysqli_query($vConexion, $SQL);

    $i = 0;
    while ($data = mysqli_fetch_array($rs)) {
        $ListadoPrestaciones[$i]['ID_PRESTACION'] = $data['id_prestacion'];
        $ListadoPrestaciones[$i]['DENOMINACION'] = $data['denominacion'];
        $i++;
    }

    return $ListadoPrestaciones;
}


function RegistrarTurno($vConexion)
{
    $idMedico = $_SESSION['Usuario_Id'];
    $fechaConsulta = date('d-m-Y H:i:s');
    $fecha_turno = date('d-m-Y', strtotime($_POST['fecha_turno']));
    //estado del turno cargado = 2, asistido=1,  noAsistio=0
    $estadoTurno = 2;
    $abonoPaciente = 0;

    //utilizo la funcion STR_TO_DATE() que convierte un string en date en la BD, tanto en la fecha de consulta como en la de turno porque estaba teniendo problemas con la BD al cargarlas en las tablas correspondientes.
    $SQL_Insert = "INSERT INTO turnos (id_paciente, id_medico, fecha_consulta, id_prestacion, fecha_turno, diagnostico, asistido, abono_paciente, hora)
            VALUES ('{$_POST['paciente']}', '$idMedico', STR_TO_DATE('$fechaConsulta', '%d-%m-%Y %H:%i:%s'), '{$_POST['prestacion']}', STR_TO_DATE('$fecha_turno', '%d-%m-%Y'), 
            '{$_POST['diagnostico']}', '$estadoTurno', '$abonoPaciente', '{$_POST['hora']}')";

    if (!mysqli_query($vConexion, $SQL_Insert)) {
        die('<h4>Error al intentar insertar el turno.</h4>');
    }

    return true;
}


function ValidarRegistro()
{
    $vMensaje = '';

    if (empty($_POST['paciente']) || empty($_POST['prestacion']) || empty($_POST['fecha_turno']) || empty($_POST['hora'])) {
        $vMensaje = 'Debe completar todos los datos requeridos.';
    } else {
        $fecha_turno = $_POST['fecha_turno'];

        //utilizo strtotime() para convertir la fecha a un timestamp y poder validar que sea correcta y en tal caso muestro el msj del error en la fecha
        if (!strtotime($fecha_turno)) {
            $vMensaje = 'La fecha seleccionada no es válida.';
        }
    }

    return $vMensaje;
}
