<!DOCTYPE html>
<html>

<head>
    <title>Clase 2</title>
</head>

<body>
    <?php
    $Title = 'Clase 2';
    $Seccion = 'Operadores';
    $Operacion = 'Sumar';
    $Valor1 = 100;
    $Valor2 = 31;
    $Resultado = $Valor1 + $Valor2;
    ?>
    <div>
        <h2>Tarea de Operadores <?php echo $Title;  ?></h2>
        <p>
            El resultado de <strong> <?php echo $Operacion;  ?> </strong>
            el <strong>100</strong>
            y el <strong>30</strong> es
            <strong style="color: #ff0000">
                <?php echo $Resultado;  ?>
            </strong>
        </p>
        <hr />

        <?php
        $Operacion = 'Restar';
        $Valor1 = 100;
        $Valor2 = 30;
        $Resultado = $Valor1 - $Valor2;

        ?>
        <p>
            El resultado de <strong><?php echo $Operacion;  ?> </strong>
            el <strong><?php echo $Valor1;  ?></strong>
            y el <strong><?php echo $Valor2;  ?></strong> es
            <strong style="color: #1b9417">
                <?php echo $Resultado;  ?>
            </strong>
        </p>


        <hr />

        <?php
        $Operacion = 'Multiplicar';
        $Valor1 = 100;
        $Valor2 = 30;
        $Resultado = $Valor1 * $Valor2;
        ?>
        <p>
            El resultado de <strong><?php echo $Operacion;  ?> </strong>
            el <strong><?php echo $Valor1;  ?></strong>
            y el <strong><?php echo $Valor2;  ?></strong> es
            <strong style="color: #007f9c">
                <?php echo $Resultado;  ?>
            </strong>
        </p>


        <hr />

        <?php
        $Operacion = 'Dividir';
        $Valor1 = 100;
        $Valor2 = 30;
        $Resultado = $Valor1 / $Valor2;
        ?>
        <p>
            El resultado de <strong><?php echo $Operacion;  ?> </strong>
            el <strong><?php echo $Valor1;  ?> </strong>
            y el <strong><?php echo $Valor2;  ?> </strong> es
            <strong style="color: #ed1a31">
                <?php echo $Resultado;  ?>
            </strong>
        </p>

    </div>
</body>

</html>