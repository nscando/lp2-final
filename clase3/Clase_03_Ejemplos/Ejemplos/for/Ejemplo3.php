<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" />
    <title> Ejemplo For 3</title>
</head>

<body>
    <table border=1>
        <tr>
            <td>Numero</td>
            <td>Par o Impar?</td>
        </tr>

        <?php
        $a = 10;
        for ($i = 1; $i <= $a; $i++) {
            if ($i % 2 == 0) {  //es par?
        ?>
                <tr style="background: #f9d190;">
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        Es Par
                    </td>
                </tr>

            <?php } else { //sino es impar 
            ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        es Impar
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    <hr />
    <br />
    <br />
    <br />
</body>

</html>