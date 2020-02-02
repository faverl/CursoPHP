<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP POO</title>
</head>

<body>
	
	<?php
	
		class Vehiculo{

			var $color;	
			var $motor;
			
			function Vehiculo(){ //Metodo Contructor;
				
				$this->color="";
				$this->motor="1600cc";
			}

			function acelerar(){
				
				echo("Se esta acelerando");

			}

			function frenar(){
				echo("Se esta frenando");
			}

			function girar(){
				echo("Se esta girando");
			}
		}
	
	
	?>
	
	
	
</body>
</html>