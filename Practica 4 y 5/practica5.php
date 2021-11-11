<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Practica 5. Intercambio de variables PHP</title>
	
</head>
<body>

	<?php //{} //var_dump(expression) --> ver los valores guardados en una variable
        $registros = array(
        	array("id" => 1, "nombre" => "Juan", "edad" => 25, "sexo" => "M"),
        	array("id" => 2, "nombre" => "Luis", "edad" => 32, "sexo" => "M"),
        	array("id" => 3, "nombre" => "Maria", "edad" => 26, "sexo" => "F"),
        	array("id" => 4, "nombre" => "Claudia", "edad" => 31, "sexo" => "F"),
        	array("id" => 5, "nombre" => "Blanca", "edad" => 40, "sexo" => "F"),
        	array("id" => 6, "nombre" => "Pedro", "edad" => 36, "sexo" => "M"),
        );
       
	 ?>
	<h1>Tabla de registros</h1><hr>
	<table border=1>
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Sexo</td>
			</tr>
		</thead>
		<tbody>
			<?php
			   for ($i=0; $i < count($registros) ; $i++) { 
			    	echo "<tr>";	
                        echo "<td>". $registros[$i]["id"]. "</td>";
                        echo "<td>". $registros[$i]["nombre"]. "</td>";
                        echo "<td>". $registros[$i]["edad"]. "</td>";
                        echo "<td>". $registros[$i]["sexo"]. "</td>";
                        echo "<td><a href='practica5_detalle.php?id=".$registros[$i]["id"]."'>Ver detalles</a></td>";
			    	echo "</tr>";		    } 
			 ?>
		</tbody>
	</table>

</body>
</html>