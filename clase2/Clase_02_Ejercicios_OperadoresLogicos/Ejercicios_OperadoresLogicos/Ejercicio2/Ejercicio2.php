<?php 
/*
Los signos del zodiaco son 12, pero en este ejercicio usaremos solo tres:
 * Aries Tauro y Geminis.
 * Establecemos las condiciones:
 * es de Aries alguien que cumple años desde el 20/03 al 19/04
 * es de Tauro alguien que cumple años desde el 20/04 al 20/05
 * es de Geminis alguien que cumple años desde el 21/05 al 20/6
 * 
 * Teniendo dos variables de tipo entero, llamadas $DiaCumple y $MesCumple
 * programar lo necesario para conocer a que signo corresponde.
 * Probar con valores correspondientes a esos signos, luego generar para los 12 signos.
 *  */
?>

<html>
    <head>
        <title>Ejercicio 2</title>
        <meta http-equiv="Content-Type" content="text/html" charset=utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .Mensaje1 {
                color: #187c12;
            }
            
        </style>
    </head>
    <body>
        <div>
            <p class="Mensaje1">
                Dia de cumpleaños xx <br />
                Mes de cumpleaños zz <br />
                Signo :<br /> (mostrar el correspondiente)
                <img src="images/aries.jpg" />
                <img src="images/tauro.jpg" />
                <img src="images/geminis.jpg" />
                <hr />
                Imagenes en <a href="http://horoscopo.abc.es/signos-zodiaco">
                http://horoscopo.abc.es/signos-zodiaco </a>
            </p>
        </div>
    </body>
</html>