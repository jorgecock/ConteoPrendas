<?php



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ingreso de datos de orden de producción</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body align='center'>

	<div>
		<h1>Datos de orden de producción para el día en el módulo controlado por IoT</h1>
		<br>
		<hr size="8px" color="black" />
		<br>
		<h2>Inserte los datos de la orden de producción a programar.</h2>

		<form method="post" action="validacion.php">
			<label for="unidadesesperadas">Unidades requeridas en la jornada a programar:  </label>
			<input type="number" name="unidadesesperadas">
			<br>
			<br>
			<label for="tiempociclo">Tiempo de ciclo en minutos: (Tiempo de ritmo esperado entre prendas entregadas en el punto final)  </label>
			<input type="number" name="tiempociclo">
			<br>
			<br>
			<label for="minutos">Minutos de jornada programados para producir la referencia:  </label>
			<input type="number" name="minutos">
			<br>
			<br>
			<input type="submit" value="Programar Producción">
		</form>
 	</div>

</body>
</html>