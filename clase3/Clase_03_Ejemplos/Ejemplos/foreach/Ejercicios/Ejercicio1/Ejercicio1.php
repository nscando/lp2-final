<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" />
    <title> Arrays </title>
</head>

<body>
    <h3>Array $Paises</h3>

    <h4>usando las imagenes dentro de la carpeta /images, respetar el nombre de las imagenes <br />
        y generar un array con esta informacion.
        Recorrerlo y mostrar con PHP, como se ve en esta estructura</h4>



    <?php

    $Paises = [
        "ARG" => "Argentina",
        "BAH" => "Bahamas",
        "BOL" => "Bolivia",
        "BRA" => "Brasil",
        "CUB" => "Cuba"
    ];

    foreach ($Paises as $item => $Nombre) {

        echo '<img src="images/' . $item . '.JPG" />' . $Nombre .    '<hr />   <br />';
    }


    ?>


    <!-- <img src="images/ARG.JPG" /> Argentina        <hr />
                <img src="images/BAH.JPG" /> Bahamas        <hr />
                <img src="images/BOL.JPG" /> Bolivia        <hr />
                <img src="images/BRA.JPG" /> Brasil        <hr />
                <img src="images/CUB.JPG" /> Cuba        <hr /> -->

</body>

</html>