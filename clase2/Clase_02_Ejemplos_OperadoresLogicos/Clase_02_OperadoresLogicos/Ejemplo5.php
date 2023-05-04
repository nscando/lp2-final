<?php 
$Lado1=50;
$Lado2=10;
$Lado3=50;
$Lado4=10;
   

$ClaseEstilo='';
$Mensaje='';

if ( $Lado1==$Lado3 && $Lado2==$Lado4)  {
    $ClaseEstilo='MensajeOk';
    $Mensaje='Es un rectangulo!! ';
    
    if ($Lado1==$Lado2 && $Lado2==$Lado3 && $Lado3==$Lado4 ) {
        $Mensaje='Tienen todos sus lados iguales, se considera un Cuadrado! ';
    }
    
}else {
    $ClaseEstilo='MensajeError';
    $Mensaje='Es un paralelogramo de cuatro lados.';
}

define('TITULO', 'C2_Ej5');
?>

<html>
    <head>
        <title><?php echo TITULO; ?></title>
        <meta http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .MensajeOk {
                color: #187c12;
            }
            .MensajeError {
                color: #f00;
            }
        </style>
    </head>
    <body>
        <div>
            <p class="<?php echo $ClaseEstilo; ?>">
                las medidas son:<br />
                Lado 1: <?php echo $Lado1; ?> <br />
                Lado 2: <?php echo $Lado2; ?> <br />
                Lado 3: <?php echo $Lado3; ?> <br />
                Lado 4: <?php echo $Lado4; ?> <br />
                Figura geometrica:
                <?php echo $Mensaje; ?>
            </p>
        </div>
    </body>
</html>