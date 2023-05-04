<?php
$Fechas[0]['Cumple'] = "25/07/1987 00:00:00";  //estos son valores con fecha/hora
$Fechas[1]['Cumple'] = "31/02/2000 22:30:00";
$Fechas[2]['Cumple'] = "07/14/1990 10:00:23";
$Fechas[3]['Cumple'] = "31/09/1900 22:00:00";
$Fechas[4]['Cumple'] = "12/10/1980 00:33:00";
$Fechas[5]['Cumple'] = "29/02/2014 14:33:00";
$Fechas[6]['Cumple'] = "12/32/2001 00:22:00";

function es_fecha_valida($fecha)
{
    $partes = explode(" ", $fecha);
    if (count($partes) != 2) {
        return false;
    }
    $fecha_partes = explode("/", $partes[0]);
    if (count($fecha_partes) != 3) {
        return false;
    }
    $dia = $fecha_partes[0];
    $mes = $fecha_partes[1];
    $anio = $fecha_partes[2];
    $hora_partes = explode(":", $partes[1]);
    if (count($hora_partes) != 3) {
        return false;
    }
    $hora = $hora_partes[0];
    $minuto = $hora_partes[1];
    $segundo = $hora_partes[2];
    if (!checkdate($mes, $dia, $anio)) {
        return false;
    }
    if ($hora < 0 || $hora > 23 || $minuto < 0 || $minuto > 59 || $segundo < 0 || $segundo > 59) {
        return false;
    }
    return true;
}

foreach ($Fechas as $fecha) {
    $cumple = $fecha['Cumple'];
    if (es_fecha_valida($cumple)) {
        echo "$cumple es una fecha y hora válida<br>";
    } else {
        echo "$cumple es una fecha y hora inválida<br>";
    }
}
?>
?>


<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio3</title>
</head>

<body>
    <div>
        <h2>Ejercicio 3 con funciones</h2>
        <ul>
            <li>

                Recorrer el array e ir informando si su fecha es correcta o no. Utilizar las funciones q brinda php para explotar la fecha y corroborar q una fecha sea correcta.
            </li>
            <li>
                Las fechas estan en formato Espa&ntilde;ol: dd/mm/yyyy
            </li>
        </ul>


        <pre>
                <?php print_r($Fechas); ?>
            </pre>

    </div>
</body>

</html>