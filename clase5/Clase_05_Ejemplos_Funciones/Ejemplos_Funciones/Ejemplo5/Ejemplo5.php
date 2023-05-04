<?php
$Personas = array();

$Personas[0]['Nombre'] = "Juan";
$Personas[0]['Apellido'] = "Gonzalez";
$Personas[0]['Antiguedad'] = 8; //en años

$Personas[1]['Nombre'] = "Martin";
$Personas[1]['Apellido'] = "Juarez";
$Personas[1]['Antiguedad'] = 4; //en años

$Personas[2]['Nombre'] = "Roberto";
$Personas[2]['Apellido'] = "Perez";
$Personas[2]['Antiguedad'] = 5; //en años

$Personas[3]['Nombre'] = "Pablo";
$Personas[3]['Apellido'] = "Perez";
$Personas[3]['Antiguedad'] = 10; //en años

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

?>


<!DOCTYPE html>
<html>
    <head>

        <title>
            Ejemplo Funciones y Arrays
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

            <form id="form83" name="form83" class="wufoo topLabel page" >

                <header id="header" class="info">
                    <h2>Listado</h2>
                    <div>Recorrer el array para mostrar sus elementos y calcular , segun la antig&uuml;edad, cu&aacute;ntos dias de vacaciones le corresponden (con una funci&oacute;n). </div>
                </header>

                <ul>
                    <li id="foli213" class="notranslate      ">
                    </li>
                    <li id="foli5" class="likert notranslate col5">

                        <table border="1">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Apellido </td>
                                    <td>Nombre </td>
                                    <td>Antig&uuml;edad</td>
                                    <td><strong>Vacaciones</strong></td>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < $CantidadPersonas; $i++) {
                                    ?>
                                    <tr>
                                        <td><?php echo ($i+1); //indica la primer columna con el nro de registro ?></td>
                                        <td><?php echo $Personas[$i]['Apellido']; ?></td>
                                        <td><?php echo $Personas[$i]['Nombre']; ?></td>
                                        <td><?php echo $Personas[$i]['Antiguedad']; ?> a&ntilde;os </td>
                                        
                                        <td>
                                            <?php $DiasVacaciones = CalcularVacaciones($Personas[$i]['Antiguedad']); ?>
                                            Corresponden <?php echo $DiasVacaciones; ?> dias.
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