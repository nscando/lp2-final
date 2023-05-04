<!DOCTYPE html>
<html>

<head>
  <title>Ejercicio 4</title>
</head>

<body>
  <div>
    <h2>Funciones de Fecha con PHP:</h2>
    <br />
    Completa una variable con tu fecha y hora de cumpleaños: formato español dd/mm/yyyy hh:mm:ss
    <br />
    <hr />
    <?php
    // Se define la variable con la fecha y hora de nacimiento en formato dd/mm/yyyy hh:mm:ss
    $Fecha = "23/04/1980 10:30:45";

    //1) Obtener el día de la semana en que nació
    // Se utiliza la función date() para obtener el día de la semana en que nació
    // Se utiliza la función strtotime() para convertir la fecha de formato español a un formato reconocible por date()
    // Se utiliza la función str_replace() para reemplazar los '/' por '-' y poder utilizar strtotime()
    $dia_semana = date('D', strtotime(str_replace('/', '-', $Fecha)));
    echo "* 1) El día de la semana en que nació es: $dia_semana<br>";

    //2) Obtener el número de día de la semana en que nació
    // Se utiliza la función date() para obtener el número de día de la semana en que nació
    // Se utiliza la función strtotime() para convertir la fecha de formato español a un formato reconocible por date()
    // Se utiliza la función str_replace() para reemplazar los '/' por '-' y poder utilizar strtotime()
    $num_dia_semana = date('w', strtotime(str_replace('/', '-', $Fecha)));
    echo "* 2) El número de día de la semana en que nació es: $num_dia_semana<br>";

    //3) Obtener el número de día del año en que nació
    // Se utiliza la función date() para obtener el número de día del año en que nació
    // Se utiliza la función strtotime() para convertir la fecha de formato español a un formato reconocible por date()
    // Se utiliza la función str_replace() para reemplazar los '/' por '-' y poder utilizar strtotime()
    $num_dia_ano = date('z', strtotime(str_replace('/', '-', $Fecha))) + 1;
    echo "* 3) El número de día del año en que nació es: $num_dia_ano<br>";

    //4) Verificar si nació en un año bisiesto
    // Se utiliza la función date() para obtener si el año en que nació es bisiesto o no
    // Se utiliza la función strtotime() para convertir la fecha de formato español a un formato reconocible por date()
    // Se utiliza la función str_replace() para reemplazar los '/' por '-' y poder utilizar strtotime()
    // Se utiliza un operador ternario para imprimir 'sí' o 'no' dependiendo del resultado de la función date()
    $es_bisiesto = date('L', strtotime(str_replace('/', '-', $Fecha))) ? 'sí' : 'no';
    echo "* 4) ¿Nació en un año bisiesto?: $es_bisiesto<br>";

    //5) Sumar cada número que conforma la fecha y hora de nacimiento
    // Se utiliza la función preg_replace() para eliminar todos los caracteres que no sean números de la fecha de nacimiento
    // Se utiliza la función
    // array_sum() para sumar los dígitos resultantes de preg_replace()
    // Se utiliza la función str_split() para convertir los dígitos en un arreglo para poder sumarlos con array_sum()
    $numeros = preg_replace('/[^0-9]/', '', $Fecha);
    $suma_numeros = array_sum(str_split($numeros));
    echo "* 5) La suma total de cada número de la fecha y hora de nacimiento es: $suma_numeros<br>";


    //otra opcion para sumar cada numero que conforma la fecha de nacimiento:
    // Se separa la fecha y hora de nacimiento en sus componentes
    $partes_fecha = explode(' ', $Fecha);
    $partes_fecha = explode('/', $partes_fecha[0]);
    $partes_hora = explode(':', $partes_fecha[1]);

    // Se suman los componentes de la fecha y hora
    $suma_numeros = array_sum($partes_fecha) + array_sum($partes_hora);

    // Se imprime la suma total
    echo "* 5) La suma total de cada número de la fecha y hora de nacimiento es: $suma_numeros<br>";


    //6) Mostrar información sobre la fecha de nacimiento
    // Se define una variable con el nombre del usuario
    // Se utiliza la función date() para obtener el nombre completo del día de la semana en que nació (lunes, martes, miércoles, etc.)
    // Se utiliza la función substr() para obtener el año de la fecha de nacimiento
    $nombre = "Sue Palacios";
    $dia_mes_ano = date('d/m/Y', strtotime(str_replace('/', '-', $Fecha)));
    $nombre_dia_semana = date('l', strtotime(str_replace('/', '-', $Fecha)));
    $nombre_mes = date('F', strtotime(str_replace('/', '-', $Fecha)));
    echo "<hr>";
    echo "* 6) Yo, $nombre, he nacido en la siguiente fecha: <b>$dia_mes_ano</b><br>";
    echo "El día de la semana que nací fue un <b>$nombre_dia_semana</b>, el día <b>$num_dia_semana</b> de <b>$nombre_mes</b>, el día <b>$num_dia_ano</b> del año <b>" . substr($Fecha, 6, 4) . "</b>.";
    ?>
  </div>
</body>

</html>