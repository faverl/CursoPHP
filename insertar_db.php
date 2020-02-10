<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <title>Insertar Bases de Datos</title>
    
</head>

<body>

    <?php

    $seccion=$_GET["txtSeccion"];
    $nombre=$_GET["txtNombre"];
    $fecha=$_GET["txtFecha"];
    $pais=$_GET["txtPais"];
    $precio=$_GET["numPrecio"];

    //Se utilizan los datos del archivo conexion_db.php
    require ("conexion_db.php");

    //Se genera la conexion a la DB.
    $conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    
    //Validar conexion a la DB
		if(mysqli_connect_errno()){

			echo "Falla al conectar la base de datos" . mysqli_connect_error() . PHP_EOL;

			exit();
        }
        
        // Para que cononozca acentos.
        mysqli_set_charset($conexion,"utf-8");
        

        $query = "INSERT INTO ARTICULOS (SECCION, NOMBRE_ARTICULO, FECHA, PAIS_DE_ORIGEN, PRECIO)
				  VALUES ('$seccion', '$nombre', '$fecha', '$pais', $precio)";

    $resultado = mysqli_query($conexion, $query);
    
    echo $resultado;


    ?>

</body>
</html>