<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <title> Tabla numerica</title>
</head>

<body>
  <?php
  $Multiplicador = 9; ?>
  <h2>Probando el For</h2>
  <h3>Tabla numerica del <?php echo $Multiplicador; ?></h3>
  <?php
  $Resultado = 0;
  for ($i = 1; $i <= 10; $i++) {
    $Resultado = $i * $Multiplicador;
    echo $i . ' * ' . $Multiplicador . ' = ' . $Resultado;
    echo '<hr />';
  }
  ?>

</body>

</html>