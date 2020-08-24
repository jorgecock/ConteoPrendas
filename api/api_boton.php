<?php
	
	include "../scripts.php";


	if (!empty($_GET)){
		if ($_GET['boton']=="pulsador" AND $_GET['api_key']=="12345"){
			include "../conexion.php";
			$query = mysqli_query($conexion,"SELECT * FROM conteoprendas WHERE idmod=1");
			$result = mysqli_num_rows($query);
			if($result>0){
				$data=mysqli_fetch_array($query);
				
				//Calcula nueva cantidad hecha
				$cantidadhechaanterior=$data['cantidadhecha'];
				echo $cantidadhechaanterior;
				echo "<br>";
				$nuevacantidadhecha=$cantidadhechaanterior+1;
				echo $nuevacantidadhecha;
				echo "<br>";
				echo date("H:i:s");


				//Calcula hora de registro de ultima unidad  y actualia tiempo de unidad anterior
			 	$horaultimoboton=date("H:i:s");
			 	$horabotonanterior=$data['horaultimoboton'];

			 	
			 	//PASAR HORAS A MINUTOS $horaultimoboton
			 	$v_HorasPartes_ultimoboton = explode(":", $horaultimoboton);
			 	$minutosTotales_ultimoboton= (($v_HorasPartes_ultimoboton[0] * 3600) + $v_HorasPartes_ultimoboton[1]*60+$v_HorasPartes_ultimoboton[2])/60;
			 	$v_HorasPartes_botonanterior = explode(":", $horabotonanterior);
			 	$minutosTotales_botonanterior= (($v_HorasPartes_botonanterior[0] * 3600) + $v_HorasPartes_botonanterior[1]*60+$v_HorasPartes_botonanterior[2])/60;

			 	//Resultados de tiempos
			 	echo "hora boton anterior: ";
			 	echo $horabotonanterior;
			 	echo "<br>";
			 	echo "minutos totales boton anterior: ";
			 	echo $minutosTotales_botonanterior;
			 	echo "<br>";

			 	echo "hora ultimo boton: ";
			 	echo $horaultimoboton;
			 	echo "<br>";
			 	echo "minutos totales ultimo boton: ";
			 	echo $minutosTotales_ultimoboton;
			 	echo "<br>";
			 
			 	$ultimotiempodeoperacion=$minutosTotales_ultimoboton-$minutosTotales_botonanterior;

				echo "ultimotiempodeoperacion: ";
			 	echo $ultimotiempodeoperacion;
			 	echo "<br>";


			 	//registra en base de datos
			 	mysqli_query($conexion,"UPDATE `conteoprendas` SET `horabotonanterior`='$horabotonanterior', `horaultimoboton`='$horaultimoboton', `cantidadhecha`='$nuevacantidadhecha' WHERE `idmod`=1");
			 	mysqli_query($conexion,"INSERT INTO `registrostiempo` (`idregistro`, `horaregistro`) VALUES (NULL, '$horaultimoboton')");
			

			 	echo "registro actualizado";

			}else{
				echo "Error de conexion";
			}
			mysqli_close($conexion);

		} elseif ($_GET['boton']=="paro" AND $_GET['api_key']=="12345"){
			//
		} else {
			echo "Parametros invalidos";
		}
	} else {
		echo "No hay parametros dados";
	}	
?>