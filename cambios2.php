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
            $registros= $conexion->query("select nombre,apellido,correo,telefono from usuarios where nombre='$_REQUEST[nombre]'");

            if($reg=mysqli_fetch_array($registros)){
        ?> 
        <form action="cambiofinales.php" method="POST">            
            <table>                
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" value= '<?php echo$reg[0]; ?>'></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido" value= '<?php echo$reg[1]; ?>'></td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><input type="text" name="correo" value= '<?php echo$reg[2]; ?>'></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="telefono" value= '<?php echo$reg[3]; ?>'></td>
                </tr>
                    <tr>
                    <td colspan="2" class="center"><input type="submit" value="Actualizar"></td>					
                </tr>
            </table>
        </form>
        <?php
        }
        else{
            echo "<p>No existe usuario con ese nombre</p><br>";
        }

        $conexion->close();
        ?>
        <br>
        <div class="center">
        <a href="pag3.php">Regresar a la pagina Usuarios</a>
        <br>    
        <br>    
        <a href= "cambios.php"> Actualizar otro usuario </a>
        <br>
        </div>
    </body>
    <!--Jorge Arnoldo Valdez Serrano 5BMPr-->
</html>