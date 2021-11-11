<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Detalle de registro</title>
</head>
<body>
<?php 
 	 $registros = array(
        	array("id" => 1, "nombre" => "Juan", "edad" => 25, "sexo" => "M"),
        	array("id" => 2, "nombre" => "Luis", "edad" => 32, "sexo" => "M"),
        	array("id" => 3, "nombre" => "Maria", "edad" => 26, "sexo" => "F"),
        	array("id" => 4, "nombre" => "Claudia", "edad" => 31, "sexo" => "F"),
        	array("id" => 5, "nombre" => "Blanca", "edad" => 40, "sexo" => "F"),
        	array("id" => 6, "nombre" => "Pedro", "edad" => 36, "sexo" => "M"),
        );
 	 	

    if (isset($_GET["id"])) {
    	$id = $_GET["id"] - 1;
    	echo "<h1>Datos de la persona</h1><hr>";
    	echo "ID: ". $_GET["id"]. "<br>";
    	echo "Nombre: ". $registros[$id]["nombre"]. "<br>";
    	echo "Edad: ". $registros[$id]["edad"]. "<br>";
    	echo "Sexo: ". $registros[$id]["sexo"]. "<br>";
    }else{
        echo "<h1>El dato de ID es requerido</h1>";	
    }
 ?>
</body>
</html>