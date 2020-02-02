<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manejo de Array</title>
</head>

<body>
	
	<?php // Utlizacion de Arrays
		
		/*ARRAY INDEXADO*/
	
		$semana[] = "Lunes";
		$semana[] = "Martes";
		$semana[] = "Miercoles";
		$semana[] = "Jueves";
		$semana[] = "Viernes";
		$semana[] = "Sabado";
		$semana[] = "Domingo";
	
		//Ordenar en orden alfabetico
	
		sort($semana);
	
		foreach($semana as $dia){
			
			echo $dia . "<br>";
		}
		
		print "<br>";
	
	
	
		/* ARRAY ASOCIATIVO */
	
		$datos=array("nombre"=>"Faver", "apellido"=>"Lopez", "edad"=>27);
	
		// Validacion de array
	
		if(is_array($datos)){
			
			echo " Es un array <br>";
		}
		else{
			
			echo " No es un array <br>";
		}
	
		print "<br>";
	
		foreach($datos as $clave => $valor){
			
			echo $clave. ": " . $valor . "<br>";
		}
	
		print "<br>";
		
		/* ARRAY MULTIDIMENCIONAL */
	
		$alimentos=array("frutas"=>array("kiwi","mandarina", "manzana"),
						 "leche"=>array("vaca", "coco" ,"cabra"),
						 "carne"=>array("lomo", "pata", "costilla"));
	
		//echo $alimentos["leche"][0];
	
		foreach($alimentos as $clave_alim=>$alim){
			
			echo "<b>$clave_alim :</b> <br><br>";
			
			foreach($alim as $clave=>$valor){
				echo $clave+1  . ": $valor. <br>";
			}
			
			echo "<br>";
		}
		
	?>
</body>
</html>