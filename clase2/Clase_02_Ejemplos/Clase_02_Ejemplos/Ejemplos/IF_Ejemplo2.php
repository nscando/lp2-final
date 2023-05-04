<?php
$Titulo = 'Condicionales';
?>
<html>

<head>
    <title><?php echo $Titulo; ?></title>
</head>

<body>
    <?php
    $var = 10;
    if ($var == 10) {
        echo "La variable vale <b>10</b>.";
    } else {
        echo "La variable <b>NO</b> vale 10.";
    }
    ?>

    <hr />
    <?php
    $var = 410;  //asigno un valor 410 a la $var
    if ($var != 10) {  //si la $var tiene un valor distinto a 410
        //muestro este mensaje
        echo "La variables ahora es <b>distinta</b> a 10. Vale $var .";
    } else { //de lo contrario
        //muestro este otro mensaje
        echo "La variable ahora vale 10.";
    }
    ?>
</body>

</html>