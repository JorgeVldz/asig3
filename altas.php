<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos.css">
        <title>Asignacion 3 3P</title>
    </head>
    <body>
        <header>
            <img src="img/banner.png" class="banner">
			<div class="center">
				<a href="index.php">Como multiplicar</a>
				<a href="pag2.php">Tablas de multiplicar</a>
				<a href="pag3.php">Usuarios</a>
			</div>
		</header>
        <form action="altas2.php" method="POST">            
            <table class="altas">
                <tr>
                    <th colspan="2">Llena los siguientes datos</th>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido"></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="text" name="correo"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="telefono"></td>
                </tr>
                    <tr>
                    <td colspan="2" class="center"><input type="submit" value="Enviar"></td>					
                </tr>
            </table>
        </form>
    </body>
    <!--Jorge Arnoldo Valdez Serrano 5BMPr-->
</html>