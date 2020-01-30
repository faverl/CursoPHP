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
					  en PHP </p>";
			?>
			
		<h1>Creacoín Y Uso de Variables</h1>
		
			<?php
		
			
		
			$nombre="Faver";
			$apellido="Lopez";
		
			echo $nombre . " " . $apellido;
		
			?>
	</body>

</html>