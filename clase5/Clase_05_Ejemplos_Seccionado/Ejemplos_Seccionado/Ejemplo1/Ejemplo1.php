<?php
$Personas = array();

$Personas[0]['Nombre'] = "Juan";
$Personas[0]['Apellido'] = "Gonzalez";
$Personas[0]['Antiguedad'] = 8; //en años
$Personas[0]['Sueldo'] = 68000;
$Personas[0]['Horas_Extras'] = 5;
$Personas[0]['Valor_Hora_Extra'] = 1000;


$Personas[1]['Nombre'] = "Martin";
$Personas[1]['Apellido'] = "Juarez";
$Personas[1]['Antiguedad'] = 4; //en años
$Personas[1]['Sueldo'] = 65000;
$Personas[1]['Horas_Extras'] = 8;
$Personas[1]['Valor_Hora_Extra'] = 1200;


$Personas[2]['Nombre'] = "Roberto";
$Personas[2]['Apellido'] = "Perez";
$Personas[2]['Antiguedad'] = 5; //en años
$Personas[2]['Sueldo'] = 67500;
$Personas[2]['Horas_Extras'] = 4;
$Personas[2]['Valor_Hora_Extra'] = 1500;

$Personas[3]['Nombre'] = "Pablo";
$Personas[3]['Apellido'] = "Perez";
$Personas[3]['Antiguedad'] = 10; //en años
$Personas[3]['Sueldo'] = 85000;
$Personas[3]['Horas_Extras'] = 2;
$Personas[3]['Valor_Hora_Extra'] = 1200;

$CantidadPersonas = count($Personas);

function CalcularVacaciones($Antiguedad){
    $Dias=0;
    if ($Antiguedad<5){
        //menos de 5 años
        $Dias=14;
        
    }elseif ($Antiguedad>=5 && $Antiguedad<10) {
        //entre 5 y 9 años
        $Dias=21;
        
    }else { // 10 años o mas
        $Dias=30;
    }
    //devuelve el valor entero
    return $Dias;
}

function Calcular_Monto_HsExtra($ValorHoraExtra, $CantidadHorasExtra){
    $Monto_HsExtra = $ValorHoraExtra * $CantidadHorasExtra;
    return $Monto_HsExtra;
}

function Calcular_SueldoFinal($Sueldo, $Monto_HsExtra){
    return $Sueldo + $Monto_HsExtra;
}


?>


<!DOCTYPE html>
<html>
    <head>

        <title>
            Ejemplo 1 - seccionado
        </title>

        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta name="generator" content="Wufoo">
        <meta name="robots" content="index, follow">

        <!-- CSS -->
        <link href="css/structure.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="scripts/wufoo.js"></script>

        <!--[if lt IE 10]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body id="public">
        <div id="container" class="ltr">

            <h1 id="logo">
                <a href="http://wufoo.com" title="Powered by Wufoo">Wufoo</a>
            </h1>

            <form id="form83" name="form83" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
                  action="">

                <header id="header" class="info">
                    <h2>Listado</h2>
                    <div>Recorrer el array para mostrar sus elementos y calcular , segun la antig&uuml;edad, cu&aacute;ntos dias de vacaciones le corresponden (con una funci&oacute;n). </div>
                </header>

                <ul>
                    <li id="foli5" class="likert notranslate col5">

                        <table border="1">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Empleado </td>
                                    <td>Antig&uuml;edad</td>
                                    <td><strong>Vacaciones</strong></td>
                                    <td>Sueldo</td>
                                    <td>Hs Extra y Valor</td>
                                    <td><strong>Monto cobrar x Hs Extra</strong></td>
                                    <td><strong>Sueldo Final</strong></td>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < $CantidadPersonas; $i++) {
                                    ?>
                                    <tr>
                                        <td><?php echo ($i+1); //indica la primer columna con el nro de registro ?></td>
                                        <td><?php echo $Personas[$i]['Apellido'].', '. $Personas[$i]['Nombre']; ?></td>
                                        <td><?php echo $Personas[$i]['Antiguedad']; ?> a&ntilde;os </td>
                                       
                                        <td>
                                            <strong>
                                            <?php $DiasVacaciones = CalcularVacaciones($Personas[$i]['Antiguedad']); ?>
                                            Corresponden <?php echo $DiasVacaciones; ?> dias.
                                            </strong>
                                        </td>
                                        
                                        <td>$ <?php echo $Personas[$i]['Sueldo']; ?> </td>
                                        <td><?php echo $Personas[$i]['Horas_Extras']; ?> hs. <br />[c/u $ <?php echo $Personas[$i]['Valor_Hora_Extra']; ?> ]</td>
                                        
                                        <td>
                                            <strong>
                                              <?php $Monto_Cobrar_HsExtra = Calcular_Monto_HsExtra($Personas[$i]['Valor_Hora_Extra'], $Personas[$i]['Horas_Extras']); ?>
                                            $ <?php echo $Monto_Cobrar_HsExtra; ?> 
                                            </strong>
                                        </td>
                                        
                                       <td>
                                            <strong>
                                                $ <?php echo Calcular_SueldoFinal($Personas[$i]['Sueldo'], $Monto_Cobrar_HsExtra); ?> 
                                            </strong>
                                        </td>
                                        
                                        
                                        
                                    </tr>
                                <?php } //fin del FOR ?>
                            </tbody>
                        </table>
                    </li>


                </ul>
            </form> 

        </div><!--container-->


    </body>
</html>