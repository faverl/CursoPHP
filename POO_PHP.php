<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP POO</title>
</head>

<body>
	
	<?php
	
		class Vehiculo{

			private $color;	
			private $motor;
			
			function __construct(){ //Metodo Contructor;
				
				$this->color="";
				$this->motor="1600cc";
			}

			function acelerar(){
				
				echo "Se esta acelerando";
			}

			function frenar(){
				
				echo "Se esta frenando";
			}

			function girar(){
				
				echo "Se esta girando";
			}
			
			public function set_color($color){
				$this->color=$color;
			}
			
			public function get_color(){
				return $this->color;
			}
			
			
		}
	
		$Mazda = new Vehiculo();
	
		echo $Mazda->acelerar() . "<br>";
			
		$Mazda->set_color("Red");
	
		echo $Mazda->get_color();
	
	?>
	
	
	
</body>
</html>