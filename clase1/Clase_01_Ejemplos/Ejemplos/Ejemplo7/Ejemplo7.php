<?php
define('TituloPagina', 'Gabriel Garcia Marquez');
define('SitioWeb', 'http://www.biografiasyvidas.com/reportaje/garcia_marquez/');
define('POWERED_BY', 'Sue Palacios'); //otra constante definida en mayuscula
?>

<!--
http://soycodigofuente.com/tablas-en-divs/
-->
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TituloPagina; ?></title>
        <meta http-equiv="Content-Type" />
        <style type="text/css">
            #contenedor {
                display: table;
                border: 2px solid #000;
                width: 300px;
                text-align: center;
                margin: 0 auto;
            }
            #contenidos {
                display: table-row;
            }
            #columna1, #columna2, #columna3 {
                display: table-cell;
                border: 1px solid #000;
                vertical-align: middle;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div id="contenedor">
            <div id="contenidos">
                <?php
                $Libro = 'Cien años de soledad';
                $Autor = 'Gabriel Garcia Marquez';
                $Imagen = 'garcia-marquez1.jpg';
                ?>
                <div id="columna1"><?php echo $Libro; ?></div>
                <div id="columna2"><?php echo $Autor; ?></div>
                <div id="columna2"><img src="images/<?php echo $Imagen; ?>" width="300" /></div>
            </div>

            <div id="contenidos">
                <?php
                $Libro = 'El amor en los tiempos del cólera';
                $Imagen = 'garcia-marquez2.jpg';
                ?>
                <div id="columna1"><?php echo $Libro; ?></div>
                <div id="columna2"><?php echo $Autor; ?></div>
                <div id="columna2"><img src="images/<?php echo $Imagen; ?>"  /></div>
            </div>
        </div>

        <br />
        <div align="center">
            <a href="<?php echo SitioWeb; ?>" target="_blank" ><?php echo SitioWeb; ?></a>
        </div>
        <footer align="center">
            <p>Copyright &copy;  <strong><?php echo POWERED_BY; ?></strong></p>
        </footer>
    </body>
</html>
