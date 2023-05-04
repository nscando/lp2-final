<?php
/*
Dada una variable llamada Temperatura, asignar un valor: 25, 30 o 40.
 * Segun el numero asignado, debera mostrar la imagen correspondiente
 * siguiendo estas condiciones:
 * 
 * Si la temperatura es de 25 grados, mostrar la imagen menos_calor.jpg
 * si la termperatura es 30 grados, mostrar la imagen calor.jpg
 * si la temperatura es de 40 grados, mostrar la imagen mucho_calor.jpg
 * con los mensajes correspondientes.
 *  * si no es ninguno de esos 3 valores, mostrar el mensaje de error.
Hacer dos scripts, uno con IF y otro con Switch.
 *  */
$Titulo = "C2 E1";
$Temperatura = 50;
?>
<html>

<head>
    <title><?php echo $Titulo; ?></title>
</head>

<body>
    <?php if ($Temperatura == 25) {
        echo "<img src='images/menos_calor.jpg' /> <br />";
        echo "<p>La temperatura es de</p> <strong>25 grados</strong>";
    } else if ($Temperatura == 30) {
        "<hr />";
        echo "<img src='images/calor.jpg' /> <br />";
        echo "La temperatura es de <strong>30 grados</strong>";
        "<hr />";
    } else if ($Temperatura == 40) {
        "<hr />";
        echo "<img src='images/mucho_calor.jpg' /> <br />";
        echo "La temperatura es de <strong>40 grados</strong>";
        "<hr />";
    } else {
        echo "La temperatura de <strong> es incorrecta</strong>";
    }
    ?>


</body>

</html>