<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bases de Datos</title>
	
	<style>


		table{

			text-align: center;
			margin: auto;
			border: 3px solid #000000;
			border-collapse:collapse;
			width: 70%;
		}
		
		th, td {

  			border: 1px solid #000000;
			padding: 5px;
		}

		td {
			text-align: left;
			padding: 10px;
  			height: 50px;
		}

	</style>
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

			echo "Falla al conectar la base de datos" . mysqli_connect_error() . PHP_EOL;

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

		/*
		while(($fila=mysqli_fetch_row($resulset))){

			foreach($fila as $clave=>$valor){

				echo " $valor ";
			}
			
			echo "<br>";
		}
		*/


		// Utilizar array asociativo para mostrar los resultados
		echo "<table>";
				echo "<tr>";
				echo "<th>SECCION</th>";
				echo "<th>NOMBRE ATICULO</th>";
				echo "<th>PRECIO</th>";
				echo "</tr>";
				while($fila=mysqli_fetch_array($resulset, MYSQLI_ASSOC)){
					
					echo "<tr>";
						echo "<td>" . $fila['SECCION'] . "</td>";
						echo "<td>" . $fila['NOMBRE_ARTICULO'] . "</td>";
						echo "<td>" . $fila['PRECIO'] . "</td>";
					echo "</tr>";
			}

		echo "</table>";

		//Cerrra la conexión a la base de datos.
		mysqli_close($conexion);
	
	?>
	
	
</body>
</html>