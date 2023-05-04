<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html">
    <title>Arrays Multidimensionales</title>
  </head>
  <body>
    <h2>
      Array multidimensional
    </h2>
    <?php
    
    /* Array multidimensional 
     * un array con 3 elementos [0 1 2]
     * cada elemento tiene 4 subelementos  [Nombre Apellido Documento EMail]
     */
    $Personas = array();
    
    $Personas[0]['Nombre']="Sue";
    $Personas[0]['Apellido']="Palacios";
    $Personas[0]['Documento']=11222333;
    $Personas[0]['EMail']="palacios.sue@gmail.com";
    /***********************************************************/
    $Personas[1]['Nombre']="Juan";
    $Personas[1]['Apellido']="Perez";
    $Personas[1]['Documento']=22333444;
    $Personas[1]['EMail']="perez.juan@gmail.com";
    /***********************************************************/
    $Personas[2]['Nombre']="Jose";
    $Personas[2]['Apellido']="Martinez";
    $Personas[2]['Documento']=33444555;
    $Personas[2]['EMail']="martinez.jose@gmail.com";
    
    /* Mostrar el nombre de cada persona      */
    echo '<b>Nombre primer persona: </b>'.$Personas[0]['Nombre'].'<br />'; 
    echo "<b>Nombre segunda persona: </b>".$Personas[1]['Nombre'].'<br />'; 
    echo "<b>Nombre tercera persona: </b> {$Personas[2]['Nombre']}  <br />"; 
    
    echo '<hr />';
    
    /* Mostrar el apellido de cada persona      */
    echo '<b>Apellido primer persona: </b>'.$Personas[0]['Apellido'].'<br />'; 
    echo '<b>Apellido segunda persona: </b> '.$Personas[1]['Apellido'].'<br />'; 
    echo '<b>Apellido tercera persona: </b>'.$Personas[2]['Apellido'].'<br />'; 
    
    
    /* Mostrar el documento y el mail de cada persona .... */
  
    
    ?>
  </body>
</html>
