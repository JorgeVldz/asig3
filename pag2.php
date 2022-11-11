<!DOCTYPE html>
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
		<main>            
			<section>
                <h1>Tabla de multiplicar del 1 al 10</h1>
                <?php 
                    $multiplicando;
                    $multiplicador;

                    echo "<table>";
                    echo "<tr>";
                    for ($tabla=1; $tabla<=10  ; $tabla++) { 
                        echo "<th>Tabla del $tabla </th>";
                    }
                    echo "</tr>";
                    echo "<tr>";
                    for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
                        for ($multiplicando=01; $multiplicando <=10 ; $multiplicando++) { 
                            echo "<td>$multiplicando X $multiplicador =";
                            echo ($multiplicando *$multiplicador);
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
			</section>
		</main>
	</body>
	<!--Jorge Arnoldo Valdez Serrano 5BMPr-->
</html>