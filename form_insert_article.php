<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insertar Articulos</title>
	<link rel="stylesheet" type="text/css" href="style_insert_article.css">

</head>

<body>

    <header>
        <h1>--- Insertar Articulos a la Base de Datos ---</h1>
    </header>

    <section id="form_insert" name="form_insert">
    
        <form name="insertar" action="insertar_db.php" method="get">

            <table>
                <tr>
                    <td>Seccion</td>
                    <td><label for="txtSeccion">
                        <input type="text" name="txtSeccion" id="txtSeccion"></td>
                </tr>
                <tr>
                    <td>Nombre Articulo</td>
                    <td><label for="txtNombre">
                        <input type="text" name="txtNombre" id="txtNombre"></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><label for="txtFecha">
                        <input type="text" name="txtFecha" id="txtFecha"></td>
                </tr>
                <tr>
                    <td>Pais de Origen</td>
                    <td><label for="txtPais">
                        <input type="text" name="txtPais" id="txtPais"></td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><label for="txtPrecio">
                        <input type="number" name="numPrecio" id="numPrecio"></td>
                </tr>

                <tr>
                    <th colspan="2"><label for="btnIngresar">
                        <input type="submit" name="btnIngresar" id="btnIngresar"></th>
                </tr>
            
            </table>

        </form>

        

    </section>

</body>
</html>