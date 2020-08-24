
<?php
	include "scripts.php";

	$hora=date("H:i:s");
	if (!empty($_POST)){
		if ($_POST['inicio']=="inicio"){
			//iniciar datos de produccion en base de datos
			
			$unidadesesperadas=$_POST['unidadesesperadas'];
			$tiempocicloesperado=$_POST['tiempocicloesperado'];
			$minutosprogramados=$_POST['minutosprogramados'];
			$cantidadhecha=0;
			$primerapieza=1;
			$horainicio=$hora;
			$tiempoacumuladoparos=0;
			$estado="corriendo";
			$horabotonanterior=$horainicio;
			$porcentajerealizado=0;
			$ultimotiempodeoperacion="Produccion Apenas iniciada";
			$ultimaeficiencia="Produccion Apenas iniciada";
			$tiempopromedio="Produccion Apenas iniciada";
			$eficiencia="Produccion Apenas iniciada"; //eficiencia acomulada
			$tiempoacumuladoparos=0;
			$horaultimoboton="Produccion Apenas iniciada";
			$tiempotranscurrido=0;
			$eficienciaacumluada="Produccion Apenas iniciada";



			include "conexion.php";
			$query = mysqli_query($conexion,"UPDATE conteoprendas SET 'unidadesesperadas'='$unidadesesperadas' , 'tiempocicloesperado'=$tiempocicloesperado, 'minutosprogramados'=$minutosprogramados, 'cantidadhecha'=$cantidadhecha, 'primerapieza'=$primerapieza,'horainicio'='$horainicio', 'tiempoacumuladoparos'=$tiempoacumuladoparos, 'estado'='$estado', 'horabotonanterior'='$horabotonanterior'"); 
			mysqli_close($conexion);

		}
	} else {

		include "conexion.php";
		$query = mysqli_query($conexion,"SELECT * FROM conteoprendas WHERE idmod=1");
		mysqli_close($conexion);
		$result = mysqli_num_rows($query);
		if($result>0){
			$data=mysqli_fetch_array($query);
		
			$unidadesesperadas=$data['unidadesesperadas'];
			$tiempocicloesperado=$data['tiempocicloesperado'];
			$minutosprogramados=$data['minutosprogramados'];
			$cantidadhecha=$data['cantidadhecha'];
			$primerapieza=$data['primerapieza'];
			$horainicio=$data['horainicio'];
			$tiempoacumuladoparos=$data['tiempoacumuladoparos'];
			$estado=$data['estado'];
			$porcentajerealizado=$cantidadhecha/$unidadesesperadas;
			$ultimotiempodeoperacion=$data['ultimotiempodeoperacion'];
			$ultimaeficiencia=$ultimotiempodeoperacion/$tiempocicloesperado;
			$tiempopromedio=$data['tiempopromedio'];
			$eficiencia=$data['eficiencia'];
			$tiempoacumuladoparos=$data['tiempoacumuladoparos'];
			$horaultimoboton=$data['horaultimoboton'];
			$tiempotranscurrido=  0; ; //hora actual - hora inicio Revisar*********************************************
			$eficienciaacumluada=$cantidadhecha/($tiempocicloesperado); ///Revisar*************************
			
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tablero de seguimiento</title>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="1">
	</head>
	<body>
		<!-- Encabezado -->
		<h1>TABLERO DE SEGUIMIENTO</h1>
		<h2>Estado: <?php echo $estado; ?></h2>

		<!-- Prendas hechas vs programadas -->
		<hr size="8px" color="black" />
		<h2>Cantidad de prendas hechas: <?php echo $cantidadhecha; ?></h2>
		<h2>Cantidad de prendas programadas: <?php echo $unidadesesperadas; ?></h2>
		<h2>Porcentaje de la produccion programada realizado: <?php echo $porcentajerealizado; ?></h2>
		<br>
		
		<!-- valores de tiempo de operacion y eficiencia -->
		<hr size="8px" color="black" />
		<h2>Ultimo tiempo de operación: <?php echo $ultimotiempodeoperacion; ?></h2>
		<h2>Ultima eficiencia: <?php echo $ultimaeficiencia; ?></h2>
		<h2>Tiempo Promedio: <?php echo $tiempopromedio; ?></h2>
		<h2>Eficiencia Acumulada: <?php echo $eficienciaacumluada; ?></h2>

		<br>
		<hr size="8px" color="black" />	
		<h2>Hora del inicio: <?php echo $horainicio; ?></h2>
		<h2>Hora del día: <?php echo $hora; ?></h2>

		<a href="reportefinal.php">Terminar</a>
		<a href="pausa.php">Pausar</a>
	</body>
</html>