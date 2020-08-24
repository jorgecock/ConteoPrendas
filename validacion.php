<?php
	include "scripts.php";


	if (!empty($_POST))
	{
		if ($_POST['tiempocicloesperado']<>0 AND $_POST['minutosprogramados']<>0 AND $_POST['unidadesesperadas']<>0)
		{
			$unidadesesperadas=$_POST['unidadesesperadas'];
			$tiempocicloesperado=$_POST['tiempocicloesperado'];
			$minutosprogramados=$_POST['minutosprogramados'];
			$takt=$minutosprogramados/$unidadesesperadas;
			$aceptable=0;

			echo("<h1 align='center'>En la jornada programada de $minutosprogramados minutos se espera producir $unidadesesperadas unidades.</h1>"); 
			echo("<h1 align='center'>El tiempo de ciclo estimado es de $tiempocicloesperado minutos. <br>Se requiere un Takt Time de $takt minutos.</h1>"); 
			if($tiempocicloesperado<=$takt)
			{
				echo "<h1 align='center'>El tiempo de ciclo es adecuado para cumplir con la demanda.<br><br>Si está de acuerdo, dar click en Iniciar Conteo para continuar</h1>";
				$aceptable=1;
			} else {
				echo "<h1 align='center'>El tiempo de ciclo esperado es mayor que el Takt time requerido por tanto no se puede cumplir con las unidades deseadas.<br>De click en Reprogramar para regresar al menu de programación.</h1>";
				$aceptable=0;
			}
		}else{
			header("location: index.php");
		}
	} else {
		header("location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validacion para comenar el conteo</title>
</head>
<body>
	<form align='center' method="post" action="<?php echo($aceptable==1)?'tablerocontador.php':'index.php'; ?>">
		<input type="hidden" name="inicio" value="inicio">
		<input type="hidden" name="unidadesesperadas" value="<?php echo $unidadesesperadas; ?>">
		<input type="hidden" name="tiempocicloesperado" value="<?php echo $tiempocicloesperado; ?>">
		<input type="hidden" name="minutosprogramados" value="<?php echo $minutosprogramados; ?>">
		<input type="submit" align='center' value="<?php echo($aceptable==1)?'Iniciar Conteo':'Reprogramar'; ?>">
	</form>
</body>
</html>