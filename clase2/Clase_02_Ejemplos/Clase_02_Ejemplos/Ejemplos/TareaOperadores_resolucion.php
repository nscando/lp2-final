<?php 
$Title='Clase 2';
$Seccion1='Operadores';
$Operacion="Sumar";

$Num1=100;
$Num2=30;
$Resultado=$Num1+$Num2;

$Color='#ff0000';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $Title; ?></title>
    </head>
    <body>
        <div>
            <h2>Tarea de <?php echo $Seccion1; ?></h2>
            <p>
                El resultado de <strong><?php echo $Operacion; ?> </strong> 
                el <strong><?php echo $Num1; ?></strong>
                y el <strong><?php echo $Num2; ?></strong> es 
                <strong style="color: <?php echo $Color; ?>"  > 
                    <?php echo $Resultado; ?>    
                </strong>
            </p>
            <hr />
            <?php 
            $Operacion='Restar'; 
            $Color='#0000ff';
            $Resultado=$Num1-$Num2;
            ?>
            <p>
                El resultado de <strong><?php echo $Operacion; ?> </strong> 
                el <strong><?php echo $Num1; ?></strong>
                y el <strong><?php echo $Num2; ?></strong> es 
                <strong style="color: <?php echo $Color; ?>"  > 
                    <?php echo $Resultado; ?>    
                </strong>
            </p>
            
            
            <hr />
            <?php 
            $Operacion='Multiplicar'; 
            $Color='#007f9c';
            $Resultado=$Num1*$Num2;
            ?>
            <p>
                El resultado de <strong><?php echo $Operacion; ?> </strong> 
                el <strong><?php echo $Num1; ?></strong>
                y el <strong><?php echo $Num2; ?></strong> es 
                <strong style="color: <?php echo $Color; ?>"  > 
                    <?php echo $Resultado; ?>    
                </strong>
            </p>
            
            
            <hr />
            <?php 
            $Operacion='Dividir'; 
            $Color='#ed1a31';
            $Resultado=$Num1/$Num2;
            ?>
            <p>
                El resultado de <strong><?php echo $Operacion; ?> </strong> 
                el <strong><?php echo $Num1; ?></strong>
                y el <strong><?php echo $Num2; ?></strong> es 
                <strong style="color: <?php echo $Color; ?>"  > 
                    <?php echo $Resultado; ?>    
                </strong>
            </p>
            
            
            
        </div>
    </body>
</html>
