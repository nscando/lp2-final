
<?php
function ConexionBD($Host = 'localhost',  $User = 'root',  $Password = '', $BaseDeDatos = 'db_lp2')
{
    $linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);
    if ($linkConexion != false)
        return $linkConexion;
    else
        die('No se pudo establecer la conexión.');
}
?>