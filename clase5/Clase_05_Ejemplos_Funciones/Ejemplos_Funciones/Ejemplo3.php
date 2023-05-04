<?php
function Sumar($Nro1, $Nro2) {
    $ResultadoSuma = $Nro1 + $Nro2;
    return $ResultadoSuma;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <title>Funciones</title>
    </head>
    <body>
        <h2>
            Funcion Suma
        </h2>
        <?php
        $Numero1 = 20;
        $Numero2 = 50;
        ?>
        El resultado de sumar <?php echo $Numero1; ?> mas <?php echo $Numero2; ?> es: 
        <strong><?php echo Sumar($Numero1, $Numero2); ?></strong>
    </body>
</html>

