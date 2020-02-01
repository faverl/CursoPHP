<!DOCTYPE html>
<html>
	
	<head>
		
	</head>
	
	<body>
		
		<h1>Uso de comentarios en Php</h1>
			
			<?php
				
				//Comentarios en el código de un asola linea
		
				echo "<p> Para crear un comentario en PHP se puede realizar de las siguiente 2 formas</p>
				<p> 1. De una Linea: // Este es un comentario de una linea, se utilia los simbolos // para indicar que es un comentario.</p>";
		
				/*
				Comentarios multilinea en php
				El comentario continua aqui.
				*/
		
				echo 
				"<p> 2. Multilinea: Para crear un comentario multilina utilizaremos la siguiente sintaxis usando los simbolos /* para abrir el comentario y los simbolos */ para cerrar el bloque del comentario, tambien se puede usar para realizar comentarios de una linea pero por lo general se usa la forma 1.</p>
				
				<p>/* Este es un comentario  <br>
					  de varias lineas <br>
					  en PHP*/ </p>";
			?>
			
		<h1>Creación y Uso de Variables</h1>
		
			<?php
		
				echo "<p>Para la creacion de variables en php se debe anteponer el simbolo <strong>$</strong> al nombre que le daremos a nuestra variable, la cual solo puede empezar por _ o letras (a-z, A-Z), se debe tener en cuenta que PHP diferencia entre MAYUSCULAS y minusculas</p>";
				
				echo "Ejemplo:";
		
				echo '<p> <label style="color:green;"> Correcto:</label> $nombre_variable </p>';
				echo '<p> <label style="color:red;"> Incorrecto:</label> $1_nombre_variable </p>';
		
				$nombre="Faver";
				$apellido="Lopez";
		
				echo $nombre . " " . $apellido;
		
			?>
		
		<h1>Utilizacion de Funciones</h1>
		
			<?php
				echo "Para crear una funcion se utiliza la palabra reservada: function";
		
				echo "Ejemplo: <br><br>
				
				<b>function Nombre_Funcion(){<br><br>
				
					Escribe lo que realiza la funcion.<br><br>
					
				}</b>";
			?>
		<h1> Utilizacion de Funciones Externas</h1>
		
			<?php
		
				echo "Para utilizar una funcion de otro archivo del proyecto se utiliza la siguiente sintaxis.<br>";
				echo "Se usa la palabra include ('nombre_archivo.php')<br>";
				echo "De esta forma solo es necesario llamar la funcion en nuestro codigo de la siguiente forma: nombre_funcion();<br><br>";
					
			?>
	</body>

</html>