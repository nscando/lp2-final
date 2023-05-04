<?php
/*
Usar el Ejemplo 7 como guia para la resolucion.

1) Usar constantes para definir:
- el Titulo de la Pagina: Libros de Stephen King
- el sitio web: https://twitter.com/stephenking
- la firma de la pagina con el nombre del alumno

2) Usar variables para mostrar 3 o 4 libros de Stephen King
- una variable con el nombre de cada libro, actualizando su valor donde sea necesario
- una variable con el nombre del autor que estamos trabajando aqui
- una variable con el nombre la imagen de cada libro [revisar la carpeta Ejercicio1/images]. La carpeta ya tiene im�genes de libros de King.
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TituloPagina; ?></title>
        <meta http-equiv="Content-Type"  />
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
               
                <div id="columna1">Libro 1</div>
                <div id="columna2">Autor</div>
                <div id="columna2"><img src="images/imagen1" width="300" /></div>
            </div>

           <div id="contenidos">
               
                <div id="columna1">Libro 2</div>
                <div id="columna2">Autor</div>
                <div id="columna2"><img src="images/imagen2" width="300" /></div>
            </div>
			
			<div id="contenidos">
               
                <div id="columna1">Libro 3</div>
                <div id="columna2">Autor</div>
                <div id="columna2"><img src="images/imagen3" width="300" /></div>
            </div>

           <div id="contenidos">
               
                <div id="columna1">Libro 4</div>
                <div id="columna2">Autor</div>
                <div id="columna2"><img src="images/imagen4" width="300" /></div>
            </div>
			
        </div>

        <br />
        <div align="center">
            <a href="#" target="_blank" >SITIO WEB</a>
        </div>
        <footer align="center">
            <p>Copyright &copy;  <strong>Autor</strong></p>
        </footer>
    </body>
</html>
