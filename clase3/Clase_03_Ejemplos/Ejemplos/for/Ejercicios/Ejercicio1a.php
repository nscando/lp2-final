<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" />
    <title> Tabla numerica</title>
</head>

<body>
    <?php
    $a = 100;
    ?>

    <h2>Probando el For</h2>
    <h3>Tabla numérica del <?php $a; ?></h3>

    <?php
    $Resultado;
    for ($i = 1; $i <= 10; $i++) {
        $Resultado = $i * $a;

        echo $i . '*' . $a . '=' . $Resultado;
        echo '<hr>';
    }
    ?>

</body>

</html>