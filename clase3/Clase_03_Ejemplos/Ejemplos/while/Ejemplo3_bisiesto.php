<?php

/*del 1900 al 2016, se requiere conocer que año fue bisiesto
 * 
 * 
sigan este razonamiento:
 * http://www.desarrolloweb.com/faq/306.php 
 SI ( (año divisible por 4) 
    AND ( (año no divisible por 100) OR (año divisible por 400) ) ) ENTONCES
    es bisiesto
 SINO
    no es bisiesto
*  
 * 
 *  */
echo '<h3>Cacular a&ntilde;os bisiestos </h3>';
$Anio=1900;  //seteo inicial de la variable de control
//las  eñes son un caracter especial, no usar en nombres de variables 
//para evitar problemas en ciertos servidores

while($Anio<=2016) {  //mientras el año sea 2016 o menos...
    //se ejecutara el bloque:
    //noten que los parentesis del if van marcando importancia
    if (  ($Anio%4==0) && ($Anio%100!=0 || $Anio%400==0)  )   {
        echo "<strong> $Anio </strong> es bisiesto. <br />";
        //
    }
    
    //recordar ir incrementando la variable para tomar cada año
    $Anio++;
}

echo 'codigo fuera del ciclo While <hr />';

?>

