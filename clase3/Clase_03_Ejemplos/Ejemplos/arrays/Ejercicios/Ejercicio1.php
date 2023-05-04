<?php
/* Generar un array que contenga 5 elementos, comenzando desde el elemento 0.
 * Cada elemento debe contener valores numericos decimales, como la estatura de 5 personas.
 * Mostrar al navegante cada elemento del array.
 * 
 *  *  */
$Estaturas[0] = 1.85;
$Estaturas[1] = 2.00;
$Estaturas[2] = 1.58;
$Estaturas[3] = 1.88;
$Estaturas[4] = 1.70;
?>
<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html" />
        <title> Arrays </title>
</head>

<body>
        <h3>Array $Estaturas</h3>
        <?php
        $ValorEstaturas = count($Estaturas);

        for ($i = 0; $i < $ValorEstaturas; $i++) {

                echo   "El valor $i de las estaturas es: <strong> {$Estaturas[$i]} </strong>";
                echo "<br/>";
        }
        ?>
</body>

</html>