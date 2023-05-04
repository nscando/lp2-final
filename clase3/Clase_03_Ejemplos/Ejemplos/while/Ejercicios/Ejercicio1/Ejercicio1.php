<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
	<title> Ej - While</title>
</head>

<body>
	<h3>Ejercicio - While </h3>
	<h4>
		En Enero del año 2020, el precio de un producto comenzo valiendo $100.<br />
		Calcular para cada mes de ese año, un aumento del 15% respecto al ultimo precio calculado.<br />
		Mostrar cada mes del 2020 el precio que obtiene el producto con ese porcentaje de aumento.<br />
	</h4>

	<?php
	$i = 0;
	$precio = 100;


	while ($i <= 12) {
		$i++;
		$precio =  ($precio * 1.15);
		echo "<h5>Monto:" . $i . " - " . $precio . "</h5> <br>";
		echo '<img src="images/' . $i . '.JPG" title="este es el mes nro' . $i . '" /> <br> <hr>';
	}
	?>

	<!-- <h5>
		Formula: 100 * 1.15 <br />
		Monto: 115 <br />
	</h5>
	<img src="images/1.JPG" title="este es el mes nro 1" />

	<hr />

	<h5>
		Formula: 115 * 1.15 <br />
		Monto: 132.25 <br />
	</h5>
	<img src="images/2.JPG" title="este es el mes nro 2" />

	<hr />

	<h5>
		Formula: 132.25 * 1.15 <br />
		Monto: 152.0875 <br />
	</h5>
	<img src="images/3.JPG" title="este es el mes nro 3" />

	<hr />

	<h5>
		Formula: 152.0875 * 1.15 <br />
		Monto: 174.900625 <br />
	</h5>
	<img src="images/4.JPG" title="este es el mes nro 4" />

	<hr />

	<h5>
		Formula: 174.900625 * 1.15 <br />
		Monto: 201.13571875 <br />
	</h5>
	<img src="images/5.JPG" title="este es el mes nro 5" />

	<hr />

	<h5>
		Formula: 201.13571875 * 1.15 <br />
		Monto: 231.3060765625 <br />
	</h5>
	<img src="images/6.JPG" title="este es el mes nro 6" />

	<hr />

	<h5>
		Formula: 231.3060765625 * 1.15 <br />
		Monto: 266.00198804687 <br />
	</h5>
	<img src="images/7.JPG" title="este es el mes nro 7" />

	<hr />

	<h5>
		Formula: 266.00198804687 * 1.15 <br />
		Monto: 305.90228625391 <br />
	</h5>
	<img src="images/8.JPG" title="este es el mes nro 8" />

	<hr />

	<h5>
		Formula: 305.90228625391 * 1.15 <br />
		Monto: 351.78762919199 <br />
	</h5>
	<img src="images/9.JPG" title="este es el mes nro 9" />

	<hr />

	<h5>
		Formula: 351.78762919199 * 1.15 <br />
		Monto: 404.55577357079 <br />
	</h5>
	<img src="images/10.JPG" title="este es el mes nro 10" />

	<hr />

	<h5>
		Formula: 404.55577357079 * 1.15 <br />
		Monto: 465.23913960641 <br />
	</h5>
	<img src="images/11.JPG" title="este es el mes nro 11" />

	<hr />

	<h5>
		Formula: 465.23913960641 * 1.15 <br />
		Monto: 535.02501054737 <br />
	</h5>
	<img src="images/12.JPG" title="este es el mes nro 12" />

	<hr /> -->


</body>

</html>