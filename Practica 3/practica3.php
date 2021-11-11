<?php 

     $nombre = $_GET["nombre"]; //se pone dentro de los corchete el nombre del input que vas a guardar
     $edad = $_GET["edad"];
     $correo = $_GET["correo"];
     $fecha_nacimiento = $_GET["fecha_nacimiento"];
     $sexo = $_GET["sexo"];
     $interes = $_GET["interes"];


     

      echo "El nombre del cliente es:" . $nombre;
      echo "<br>";
      echo "La edad del cliente es:" . $edad;
      echo "<br>";
      echo "El correo del cliente es:" . $correo;
      echo "<br>";
      echo "La fecha de nacimiento del cliente es:" . $fecha_nacimiento;
      echo "<br>";
      echo "El sexo del cliente es:" . $sexo;
      echo "<br><br>";

     
      echo "Areas de preferencia:<br><br>";
      for ($i=0; $i < count($interes) ; $i++) { 

      echo $interes[$i] . "<br>";   
     }

 ?>