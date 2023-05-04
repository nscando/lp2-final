<?php
$Personas = array();

$Personas[0]['Nombre'] = "Juan";
$Personas[0]['Apellido'] = "Gonzalez";
$Personas[0]['Monto_Hora'] = 130;
$Personas[0]['Horas_Trabajadas'] = 4;
$Personas[0]['Total_Ventas'] = 3200;

$Personas[1]['Nombre'] = "Martin";
$Personas[1]['Apellido'] = "Juarez";
$Personas[1]['Monto_Hora'] = 110;
$Personas[1]['Horas_Trabajadas'] = 6;
$Personas[1]['Total_Ventas'] = 3800;

$Personas[2]['Nombre'] = "Roberto";
$Personas[2]['Apellido'] = "Perez";
$Personas[2]['Monto_Hora'] = 95;
$Personas[2]['Horas_Trabajadas'] = 5;
$Personas[2]['Total_Ventas'] = 3000;

$Personas[3]['Nombre'] = "Pablo";
$Personas[3]['Apellido'] = "Perez";
$Personas[3]['Monto_Hora'] = 110;
$Personas[3]['Horas_Trabajadas'] = 8;
$Personas[3]['Total_Ventas'] = 5600;

$CantidadPersonas = count($Personas);
?>


<!DOCTYPE html>
<html>
    <head>

        <title>
            Ejemplo 4 - Recorrer array
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
                    <div>Recorrer el array para mostrar sus elementos y calcular montos. </div>
                </header>

                <ul>

                    <li id="foli3" class="notranslate       ">
                        Cada persona cobra cierto monto por cada hora trabajada. <br />
                        Calcular cu&aacute;nto debe cobrar segun estos datos, e informar si ha vendido mas de $3500, le corresponde un Incentivo por llegar al objetivo de ventas.
                        <hr />
                        <br />
                        <strong>
                        El listado tiene <?php echo $CantidadPersonas; ?> registros.
                        </strong>
                    </li>

                    <li id="foli213" class="notranslate      ">
                    </li>
                    <li id="foli5" class="likert notranslate col5">

                        <table border="1">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Apellido </td>
                                    <td>Nombre </td>
                                    <td>Monto por hora</td>
                                    <td>Horas Trabajadas</td>
                                    <td>Total de ventas</td>
                                    <td><strong>Total a cobrar</strong></td>
                                    <td><strong>Incentivo <br />[Ventas de $3500 o mas]</strong></td>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                //variable que sirve para ir mostrando cuanto debe cobrar cada persona
                                $MontoCobrar=0;
                                for ($i = 0; $i < $CantidadPersonas; $i++) {
                                    ?>
                                    <tr>
                                        <td><?php echo ($i+1); //indica la primer columna con el nro de registro ?></td>
                                        <td><?php echo $Personas[$i]['Apellido']; ?></td>
                                        <td><?php echo $Personas[$i]['Nombre']; ?></td>
                                        <td> $ <?php echo $Personas[$i]['Monto_Hora']; ?></td>
                                        <td><?php echo $Personas[$i]['Horas_Trabajadas']; ?> hs.</td>
                                        <td> $ <?php echo $Personas[$i]['Total_Ventas']; ?> </td>
                                        
                                        <?php 
                                        //calcula cuanto le corresponde cobrar por esas horas con ese monto
                                        $MontoCobrar = $Personas[$i]['Monto_Hora'] * $Personas[$i]['Horas_Trabajadas']; ?>
                                        <td> $ <?php echo $MontoCobrar; ?></td>
                                        
                                        <?php
                                        $Incentivo='No';
                                        $Color='#f00';
                                        if ($Personas[$i]['Total_Ventas'] >= 3500) { 
                                            $Incentivo='Si';
                                            $Color='#25a82b';
                                        } ?>
                                        <td style="color: <?php echo $Color; ?>" >
                                            <?php echo $Incentivo; ?>
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