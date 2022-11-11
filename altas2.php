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
        <?php
            echo "<br><p>CONECTANDO....</p>";
            $conexion = new mysqli('localhost:3306', 'root', '', 'asig3');
            $conexion->set_charset("utf8");
            $conexion->query("INSERT INTO usuarios (nombre,apellido,correo,telefono)
            VALUES
            ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[correo]','$_REQUEST[telefono]')");

            $conexion->close();

            echo "<p>El usuario fue dado de alta</p>";
        ?>
        <br>
        <br>
        <div class="center">
        <a href="pag3.php">Regresar a la pagina Usuarios</a>
        </div>
        <br>
    </body>
    <!--Jorge Arnoldo Valdez Serrano 5BMPr-->
</html>