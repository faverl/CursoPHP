<!DOCTYPE html>
<html>
	
	<head>
		
		<style>
			.resaltar{
				
				color: red;
				font-weight: bold;
			}
			
			.titulo{
				
				text-align: center;
				color: aqua;
				font-size: 3em;
				font-weight: bold;
				
			}
			
		</style>
		
	</head>
	
	<body>
		
		<h1 class="titulo">CURSO PHP</h1>
		
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
				echo "Se usa la palabra reservada <b>include</b> de la siguiente forma: <b>include ('nombre_archivo.php');</b><br>";
				echo "De esta forma solo es necesario llamar la funcion en nuestro codigo de la siguiente forma: <b>nombre_funcion();</b><br><br>";
					
			?>
		
		<h1> Utilizacion de Variables Estaticas</h1>
		
			<?php
				
				function variable_estatica(){
					
					static $nombre_variable=0;
					
					$nombre_variable++;
					
					echo $nombre_variable . "<br>";
				}
		
				variable_estatica();
				variable_estatica();
				variable_estatica();
		
			?>
		
		<P> Se utilizan las variables estaticas para que los valores de una variable en una funcion no pierda el valor asignado cuando la función termine de ejecutarse, de esta forma al volver a llamar la función mantendra el valor y no reiciara la variable al valor inicial.<br><br>
		
		Para hacer que una variable sea estatica utilizamos la palabra reservada "static" antes del nombre de la variable, de la siguiente forma: <b>"static $nombre_variable;"</b>.<br>
		</P>
		
		<h1> Manejo de STRING </h1>
		
			<h2> Escape de caracteres en un String </h2>

				<p> Para usar comillas dentro de un string y que no las tenga en cuenta al momento de ejecutar el código, podemos utilizar el simbolo <b>"\"</b> para escapar la comilla, con este simbolo le indicamos que no tenga en cuenta el siguiente caracter del código.<br><br>

				Ejemplo:  "echo <b>class=\"resaltar\"> Ejemplo de parrafo</b>"

				</p>

				<?php
					echo "<p class=\"resaltar\"> Ejemplo de parrafo </p><br>"
				?>
			<h2> Comparacion de String con <b>strcmp</b> y <b>strcasecmp</b></h2>
		
				<p>Para comparar cadenas de string se pueden utilizar los siguientes comandos</p>
					
					<ul>
						<li class="resaltar">strcmp</li>
						<p>Se utiliza para comparar dos cadenas de string <b>teniendo</b> encuenta mayusculas y minusculas, como resultado devuelve <b>0</b> si coinciden y devuelve <b>-1</b> si no coinciden.</p>
						
						<li class="resaltar">strcasecmp</li>
						
						<p>Se utiliza para comparar dos cadenas de string <b>sin tener</b> encuenta mayusculas y minusculas, como resultado devuelve <b>0</b> si coinciden y devuelve <b>-1</b> si no coinciden.</p>
						
					</ul>
		
				<?php
						
					$var1="Hola";
					$var2="hola";
		
					$resultado=strcmp($var1, $var2);
					echo "El resultado con <b>strcmp</b> es: " . strcmp($var1, $var2) . "<br>";
		
					if($resultado==0){
						
						echo "<p> Son Iguales </p>";
					}
					else if($resultado==-1){
						
						echo "<p> No son Iguales</p>";
					}
					
					$resultado2=strcasecmp($var1, $var2);
		
					echo "El resultado con <b>strcasecmp</b> es: " . strcasecmp($var1, $var2) . "<br>";
		
					if($resultado2==0){
						
						echo "<p> Son Iguales </p>";
					}
					else if($resultado2==-1){
						
						echo "<p> No son Iguales </p>";
					}
		
				?>
		
	</body>

</html>