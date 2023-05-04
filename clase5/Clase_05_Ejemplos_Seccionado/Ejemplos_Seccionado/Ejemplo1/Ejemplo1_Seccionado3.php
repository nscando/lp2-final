<?php
include 'arrayXXXX.php';  //aqui se incrusta toooodo el contenido de este script

include 'funciones.php';  //aqui se incrusta toooodo el contenido de este script
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