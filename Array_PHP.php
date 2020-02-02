<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php // Utlizacion de Arrays
		
		/*Array Asociativo*/
	
		$semana[] = "Lunes";
		$semana[] = "Martes";
		$semana[] = "Miercoles";
		$semana[] = "Jueves";
		$semana[] = "Viernes";
		$semana[] = "Sabado";
		$semana[] = "Domingo";
	
		//echo $semana[1];
	
		foreach($semana as $dia){
			
			echo $dia . "<br>";
		}
	?>
</body>
</html>