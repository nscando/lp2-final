<!DOCTYPE html>
<html>

<head>
  <title>Ejercicio 5</title>
  <meta http-equiv="Content-Type" content="text/html">
</head>

<body>
  <div>
    <h2>Funciones de Arrays con PHP:</h2>
    Generar un array con los datos personales de 3 personas: Nombre, apellido, fecha de nacimiento [dd/mm/yyyy] .
    <br />
    Calcular la edad basicamente usando solamente su año de nacimiento.
    <br />
    Mostrar en una tabla los 4 valores de cada persona. El nombre debe ir con su primer letra en mayuscula, y el apellido todo en mayuscula.
    <?php
    // Se crea un array con los datos personales de 3 personas
    $personas = array(
      array("nombre" => "Juan", "apellido" => "Pérez", "fecha_nacimiento" => "05/07/1980"),
      array("nombre" => "María", "apellido" => "Gómez", "fecha_nacimiento" => "12/10/1992"),
      array("nombre" => "Pedro", "apellido" => "López", "fecha_nacimiento" => "20/03/1975")
    );

    // Se recorre el array de personas para calcular la edad de cada una
    foreach ($personas as &$persona) {
      // Se obtiene el año de nacimiento utilizando la función substr()
      // En la línea $anio_nacimiento = substr($persona["fecha_nacimiento"], -4);, se está utilizando la función substr() de PHP para obtener los últimos 4 caracteres de la cadena que representa la fecha de nacimiento de la persona.
      $anio_nacimiento = substr($persona["fecha_nacimiento"], -4);
      // Se calcula la edad restando el año actual menos el año de nacimiento
      $edad = date("Y") - $anio_nacimiento;
      // Se agrega la edad al array de la persona
      $persona["edad"] = $edad;
    }

    // Se imprime una tabla con los datos de las personas
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Apellido</th><th>Fecha de Nacimiento</th><th>Edad</th></tr>";
    foreach ($personas as $persona) {
      // Se capitaliza la primera letra del nombre
      $nombre = ucfirst(strtolower($persona["nombre"]));
      // Se convierte el apellido a mayúsculas
      $apellido = strtoupper($persona["apellido"]);
      $fecha_nacimiento = $persona["fecha_nacimiento"];
      $edad = $persona["edad"];
      // Se imprime una fila de la tabla con los datos de la persona
      echo "<tr><td>$nombre</td><td>$apellido</td><td>$fecha_nacimiento</td><td>$edad</td></tr>";
    }
    echo "</table>";
    ?>
  </div>
</body>

</html>