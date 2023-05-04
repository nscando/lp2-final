<?php
define('TituloPagina', "Peliculas 2021");

$Pelicula1 = "Mortal Kombat";
$DescripcionPelicula1 = "Nueva adaptación del popular videojuego.";
$ImagenPelicula1 = "mk.jpeg";

$Pelicula2 = "Viuda negra";
$DescripcionPelicula2 = "La despedida de Scarlett Johansson de una personaje que ayudó a catapultar de nuevo su carrera tras una etapa algo complicada.";
$ImagenPelicula2 = "vn.png";

$Pelicula3 = "Godzilla vs. Kong";
$DescripcionPelicula3 = " el enfrentamiento entre dos de los monstruos cinematográficos más míticos de todos los tiempos. ";
$ImagenPelicula3 = "gk.jpeg";
?>

<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" /> 
        <title><?php echo TituloPagina; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <span class="brand"><?php echo TituloPagina; ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <br />

            <div class="span10 pull-left">

                <div class="well">
                    <h2><?php echo $Pelicula1; ?></h2>

                    <p>
                        <?php echo $DescripcionPelicula1; ?><br /><br />
                        <img src="images/<?php echo $ImagenPelicula1; ?>" width="200px" /><br /><br />
                    </p>
                </div>

            </div>
            
            
            <div class="span10 pull-left">
                <div class="span10 pull-left">

                    <div class="well">
                        <h2><?php echo $Pelicula2; ?></h2>

                        <p>
                            <?php echo $DescripcionPelicula2; ?><br /><br />
                            <img src="images/<?php echo $ImagenPelicula2; ?>" width="200px" /><br /><br />
                        </p>
                    </div>

                </div>



            </div>


            <div class="span10 pull-left">
                <div class="span10 pull-left">

                    <div class="well">
                        <h2><?php echo $Pelicula3; ?></h2>

                        <p>
                            <?php echo $DescripcionPelicula3; ?><br /><br />
                            <img src="images/<?php echo $ImagenPelicula3; ?>" width="200px" /><br /><br />
                        </p>
                    </div>

                </div>
            </div>

        </div>
        <!--/row-fluid-->

        <hr>

        <footer align="center">
            <p>Programación con <strong>PHP</strong></p>
        </footer>


    </body>
</html>
