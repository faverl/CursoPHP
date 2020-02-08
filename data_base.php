<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
		
		$db_host="localhost";
		$db_name="curso_php";
		$db_user="root";
		$db_pass="";

		//Se genera la conexion a la DB.
		$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

		//Validar conexion a la DB
		if(mysqli_connect_errno()){

			echo "Falla al conectar la base de datos";

			exit();
		}

		// Para que cononozca acentos.
		mysqli_set_charset($conexion,"utf-8");

		//Consulta a la DB.
		$query = "select * from artículos";

		//Resultado de la consulta
		$resulset = mysqli_query($conexion, $query);

		//Se guarda la siguiente fila del resultado
		//$fila = mysqli_fetch_row($resulset);
		
		//Se recorre toda la matriz de resultados.
		while(($fila=mysqli_fetch_row($resulset))){

			foreach($fila as $clave=>$valor){

				echo " $valor ";
			}
			
			echo "<br>";
		}
		
		//Cerrra la conexión a la base de datos.
		mysqli_close();
	
	?>
	
	
</body>
</html>