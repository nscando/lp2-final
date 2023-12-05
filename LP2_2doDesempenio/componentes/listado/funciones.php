<?php

require_once('./config/conexionBD.php');


//utilicé left join para combinar los valores de las tablas dado que cuando diseñe la BD hice las relaciones correspondientes entre cada tabla.
//tambien utilicé DATE_FORMAT para darle formato a la fecha dado que la base de datos la diseñé y la armé en MySQL WORKBENCH y al importarla en phpmyadmin tuve algunos errores con los formatos de fechas

function TurnosSecretaria($vConexion)
{
    $ListadoTurnos = array();

    $SQL = "SELECT t.id_turno, t.id_paciente, t.id_medico, t.fecha_consulta, t.hora, t.asistido, DATE_FORMAT(t.fecha_turno, '%d/%m/%Y') AS fecha_turno_formato, t.id_prestacion, u.id_obrasocial,
            p.denominacion AS nombre_prestacion, p.complejidad AS complejidad, p.precio AS precio_prestacion, p.porcentaje_abono AS porcentaje_prestacion,
            o.nombre_obrasocial,
            paciente.nombre AS nombre_paciente, paciente.apellido AS apellido_paciente,
            medico.nombre AS nombre_medico, medico.apellido AS apellido_medico
            FROM Turnos t
            JOIN usuarios u ON t.id_paciente = u.id_usuario
            LEFT JOIN prestaciones p ON t.id_prestacion = p.id_prestacion
            LEFT JOIN obrassociales o ON u.id_obrasocial = o.id_obrasocial
            LEFT JOIN usuarios paciente ON t.id_paciente = paciente.id_usuario
            LEFT JOIN usuarios medico ON t.id_medico = medico.id_usuario
            ORDER BY t.fecha_turno DESC";

    $rs = mysqli_query($vConexion, $SQL);

    $i = 0;
    while ($data = mysqli_fetch_array($rs)) {
        $ListadoTurnos[$i]['ID'] = $data['id_turno'];
        $ListadoTurnos[$i]['NOMBRE_PACIENTE'] = $data['nombre_paciente'];
        $ListadoTurnos[$i]['APELLIDO_PACIENTE'] = $data['apellido_paciente'];
        $ListadoTurnos[$i]['ID_MEDICO'] = $data['id_medico'];
        $ListadoTurnos[$i]['NOMBRE_MEDICO'] = $data['nombre_medico'];
        $ListadoTurnos[$i]['APELLIDO_MEDICO'] = $data['apellido_medico'];
        $ListadoTurnos[$i]['FECHA_CONSULTA'] = $data['fecha_consulta'];
        $ListadoTurnos[$i]['FECHA_TURNO'] = $data['fecha_turno_formato'];
        $ListadoTurnos[$i]['HORA_TURNO'] = $data['hora'];
        $ListadoTurnos[$i]['ASISTIDO'] = $data['asistido'];
        $ListadoTurnos[$i]['COMPLEJIDAD'] = $data['complejidad'];
        $ListadoTurnos[$i]['PRESTACION'] = $data['nombre_prestacion'];
        $ListadoTurnos[$i]['PRESTACION_PRECIO'] = $data['precio_prestacion'];
        $ListadoTurnos[$i]['PRESTACION_PORCENTAJE'] = $data['porcentaje_prestacion'];
        $ListadoTurnos[$i]['OBRASOCIAL'] = $data['nombre_obrasocial'];

        $i++;
    }

    return $ListadoTurnos;
}

function TurnosPorPaciente($vConexion, $idPaciente)
{
    $ListadoTurnos = array();

    $SQL = "SELECT t.id_turno, t.id_paciente, t.id_medico, t.fecha_consulta, t.hora, t.asistido, DATE_FORMAT(t.fecha_turno, '%d/%m/%Y') AS fecha_turno_formato, '%d-%m-%Y', t.id_prestacion, u.id_obrasocial,
            p.denominacion AS nombre_prestacion, p.complejidad AS complejidad, p.precio AS precio_prestacion, p.porcentaje_abono AS porcentaje_prestacion,
            o.nombre_obrasocial, paciente.nombre AS nombre_paciente, paciente.apellido AS apellido_paciente, medico.nombre AS nombre_medico, medico.apellido AS apellido_medico
            FROM Turnos t
            JOIN usuarios u ON t.id_paciente = u.id_usuario
            LEFT JOIN prestaciones p ON t.id_prestacion = p.id_prestacion
            LEFT JOIN obrassociales o ON u.id_obrasocial = o.id_obrasocial
            LEFT JOIN usuarios paciente ON t.id_paciente = paciente.id_usuario
            LEFT JOIN usuarios medico ON t.id_medico = medico.id_usuario
            WHERE t.id_paciente = $idPaciente
            ORDER BY t.fecha_turno DESC";

    $rs = mysqli_query($vConexion, $SQL);

    $i = 0;
    while ($data = mysqli_fetch_array($rs)) {
        $ListadoTurnos[$i]['ID'] = $data['id_turno'];
        $ListadoTurnos[$i]['NOMBRE_PACIENTE'] = $data['nombre_paciente'];
        $ListadoTurnos[$i]['APELLIDO_PACIENTE'] = $data['apellido_paciente'];
        $ListadoTurnos[$i]['ID_MEDICO'] = $data['id_medico'];
        $ListadoTurnos[$i]['NOMBRE_MEDICO'] = $data['nombre_medico'];
        $ListadoTurnos[$i]['APELLIDO_MEDICO'] = $data['apellido_medico'];
        $ListadoTurnos[$i]['FECHA_CONSULTA'] = $data['fecha_consulta'];
        $ListadoTurnos[$i]['FECHA_TURNO'] = $data['fecha_turno_formato'];
        $ListadoTurnos[$i]['HORA_TURNO'] = $data['hora'];
        $ListadoTurnos[$i]['ASISTIDO'] = $data['asistido'];
        $ListadoTurnos[$i]['COMPLEJIDAD'] = $data['complejidad'];
        $ListadoTurnos[$i]['PRESTACION'] = $data['nombre_prestacion'];
        $ListadoTurnos[$i]['PRESTACION_PRECIO'] = $data['precio_prestacion'];
        $ListadoTurnos[$i]['PRESTACION_PORCENTAJE'] = $data['porcentaje_prestacion'];
        $ListadoTurnos[$i]['OBRASOCIAL'] = $data['nombre_obrasocial'];

        $i++;
    }

    return $ListadoTurnos;
}


function TurnosPorMedico($vConexion, $idMedico)
{
    $ListadoTurnos = array();

    $SQL = "SELECT t.id_turno, t.id_paciente, t.id_medico, t.fecha_consulta, t.hora, t.asistido, DATE_FORMAT(t.fecha_turno, '%d/%m/%Y') AS fecha_turno_formato, t.id_prestacion, u.id_obrasocial,
       p.denominacion AS nombre_prestacion, p.precio AS precio_prestacion, p.porcentaje_abono AS porcentaje_prestacion,
       o.nombre_obrasocial,
       paciente.nombre AS nombre_paciente, paciente.apellido AS apellido_paciente,
       medico.nombre AS nombre_medico, medico.apellido AS apellido_medico
FROM Turnos t
JOIN usuarios u ON t.id_paciente = u.id_usuario
LEFT JOIN prestaciones p ON t.id_prestacion = p.id_prestacion
LEFT JOIN obrassociales o ON u.id_obrasocial = o.id_obrasocial
LEFT JOIN usuarios paciente ON t.id_paciente = paciente.id_usuario
LEFT JOIN usuarios medico ON t.id_medico = medico.id_usuario
WHERE t.id_medico = $idMedico
ORDER BY t.fecha_turno DESC;";

    $rs = mysqli_query($vConexion, $SQL);

    $i = 0;
    while ($data = mysqli_fetch_array($rs)) {
        $ListadoTurnos[$i]['ID'] = $data['id_turno'];
        $ListadoTurnos[$i]['NOMBRE_PACIENTE'] = $data['nombre_paciente'];
        $ListadoTurnos[$i]['APELLIDO_PACIENTE'] = $data['apellido_paciente'];
        $ListadoTurnos[$i]['ID_MEDICO'] = $data['id_medico'];
        $ListadoTurnos[$i]['NOMBRE_MEDICO'] = $data['nombre_medico'];
        $ListadoTurnos[$i]['APELLIDO_MEDICO'] = $data['apellido_medico'];
        $ListadoTurnos[$i]['FECHA_CONSULTA'] = $data['fecha_consulta'];
        $ListadoTurnos[$i]['FECHA_TURNO'] = $data['fecha_turno_formato'];
        $ListadoTurnos[$i]['HORA_TURNO'] = $data['hora'];
        $ListadoTurnos[$i]['ASISTIDO'] = $data['asistido'];
        $ListadoTurnos[$i]['ID_PRESTACION'] = $data['id_prestacion'];
        $ListadoTurnos[$i]['PRESTACION'] = $data['nombre_prestacion'];
        $ListadoTurnos[$i]['PRESTACION_PRECIO'] = $data['precio_prestacion'];
        $ListadoTurnos[$i]['PRESTACION_PORCENTAJE'] = $data['porcentaje_prestacion'];
        $ListadoTurnos[$i]['OBRASOCIAL'] = $data['nombre_obrasocial'];
        $i++;
    }

    return $ListadoTurnos;
}


function TurnosAdministrador($vConexion)
{
    $ListadoTurnos = array();

    $SQL = "SELECT t.id_turno, t.id_paciente, t.id_medico, t.fecha_consulta, t.hora, t.asistido, DATE_FORMAT(t.fecha_turno, '%d/%m/%Y') AS fecha_turno_formato, t.id_prestacion, u.id_obrasocial,
       p.denominacion AS nombre_prestacion,  p.complejidad AS complejidad, p.precio AS precio_prestacion, p.porcentaje_abono AS porcentaje_prestacion,
       o.nombre_obrasocial,
       paciente.nombre AS nombre_paciente, paciente.apellido AS apellido_paciente,
       medico.nombre AS nombre_medico, medico.apellido AS apellido_medico
FROM Turnos t
JOIN usuarios u ON t.id_paciente = u.id_usuario
LEFT JOIN prestaciones p ON t.id_prestacion = p.id_prestacion
LEFT JOIN obrassociales o ON u.id_obrasocial = o.id_obrasocial
LEFT JOIN usuarios paciente ON t.id_paciente = paciente.id_usuario
LEFT JOIN usuarios medico ON t.id_medico = medico.id_usuario
ORDER BY t.fecha_turno DESC, t.hora DESC, p.denominacion ASC, paciente.apellido ASC, paciente.nombre ASC;";

    $rs = mysqli_query($vConexion, $SQL);

    $i = 0;
    while ($data = mysqli_fetch_array($rs)) {
        $ListadoTurnos[$i]['ID'] = $data['id_turno'];
        $ListadoTurnos[$i]['NOMBRE_PACIENTE'] = $data['nombre_paciente'];
        $ListadoTurnos[$i]['APELLIDO_PACIENTE'] = $data['apellido_paciente'];
        $ListadoTurnos[$i]['ID_MEDICO'] = $data['id_medico'];
        $ListadoTurnos[$i]['NOMBRE_MEDICO'] = $data['nombre_medico'];
        $ListadoTurnos[$i]['APELLIDO_MEDICO'] = $data['apellido_medico'];
        $ListadoTurnos[$i]['FECHA_CONSULTA'] = $data['fecha_consulta'];
        $ListadoTurnos[$i]['FECHA_TURNO'] = $data['fecha_turno_formato'];
        $ListadoTurnos[$i]['HORA_TURNO'] = $data['hora'];
        $ListadoTurnos[$i]['ASISTIDO'] = $data['asistido'];
        $ListadoTurnos[$i]['COMPLEJIDAD'] = $data['complejidad'];
        $ListadoTurnos[$i]['PRESTACION'] = $data['nombre_prestacion'];
        $ListadoTurnos[$i]['PRESTACION_PRECIO'] = $data['precio_prestacion'];
        $ListadoTurnos[$i]['PRESTACION_PORCENTAJE'] = $data['porcentaje_prestacion'];
        $ListadoTurnos[$i]['OBRASOCIAL'] = $data['nombre_obrasocial'];
        $i++;
    }

    return $ListadoTurnos;
}



function calcularValorPrestacion($precio, $porcentaje)
{
    $valor = $precio * ($porcentaje / 100);
    return $valor;
}
