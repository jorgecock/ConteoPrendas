<?php
	
	if (!empty($_GET)){
		if ($_GET['boton']=="pulsador" AND $_GET['api_key']=="12345"){
			include "conexion.php";
			$query = mysqli_query($conexion,"SELECT * FROM conteoprendas WHERE idmod=1");
			$result = mysqli_num_rows($query);
			if($result>0){
				$data=mysqli_fetch_array($query);
				
				$cantidadhechaanterior=$data['cantidadhecha'];
				$nuevacantidadhecha=$cantidadhechaanterior+1;

			 	$horaultimoboton=time();
			 	$horabotonanterior=$data['horaultimoboton'];
			 	mysqli_query($conexion,"UPDATE  conteoprendas SET horabotonanterior=$horabotonanterior, horaultimoboton=$horaultimoboton, cantidadhecha=$nuevacantidadhecha WHERE idmod=1");
			 	echo "registro actualizado";

			}else{
				echo "Error de conexion";
			}
			mysqli_close($conexion);

		} elseif ($_GET['boton']=="paro" AND $_GET['api_key']=="12345"){

		} else {
			echo "Parametros invalidos";
		}
	} else {
		echo "No hay parametros dados";
	}	
?>