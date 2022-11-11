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
            $nombre=$_REQUEST['nombre'];
            $apellido=$_REQUEST['apellido'];
            $correo=$_REQUEST['correo'];
            $telefono= $_REQUEST['telefono'];
            $conexion->query("UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono' WHERE nombre='$nombre'");
            $conexion->close();
            echo "<br>";
            echo "<p>El usuario fue actualizado</p>";
        ?>

        <br>
        <br>
        <div class="center">
        <a href="pag3.php">Regresar a la pagina Usuarios</a>
        <br>                        
        <br>
        <a href= "cambios.php"> Actualizar Datos </a>
        <br>
        </div>
    </body>
    <!--Jorge Arnoldo Valdez Serrano 5BMPr-->
</html>