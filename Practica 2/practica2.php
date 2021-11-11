<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Practica 2. PHP dentro de HTML</title>
</head>
<body>
    <?php 
       $numero = rand(1,4);
       $color = ["lightblue", "lightpink", "darkorchid", "gray" ];
       $numcolor = rand(0,3);

       echo "numero generado = " .$numero."<br>";
       echo "<div style = 'color:".$color[$numcolor]. "'>Color generado</div>";

       if ($numero == 1) {
       
     ?>
           <h1 style="color: <?php echo $color[$numcolor] ?>">Titulo de la pagina 1</h1>

    <?php } elseif($numero == 2) { ?> 

           <h1 style="color: <?php echo $color[$numcolor] ?>">Titulo de la pagina 2</h1>

    <?php }elseif ($numero == 3) {  ?>

           <h1 style="color: <?php echo $color[$numcolor] ?>">Titulo de la pagina 3</h1>

   <?php }else{  ?>

           <h1 style="color: <?php echo $color[$numcolor] ?>">Titulo de la pagina 4</h1>

 <?php }  ?>


</body>
</html>