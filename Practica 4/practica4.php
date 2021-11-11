<?php 

    $nombre = $_GET["nombre"];
    $p1 = $_GET["p1"];
    $p2 = $_GET["p2"];
    $p3 =  $_GET["p3"];
    $p4 = $_GET["p4"];
    $p5 = $_GET["p5"];
    $p6 = $_GET["p6"];
    $p7 = $_GET["p7"];
    $p8 = $_GET["p8"];
    $p9 = $_GET["p9"];
    $p10 = $_GET["p10"];

    $calificacion = 0;


    echo "El nombre del Otaku que huele a limón es: " . $nombre;

    //Pregunta 1
    if (p1 == "eichiro_oda") {
    	echo "1.- Correcta c:";
        $calificacion++;
    } else{
        echo "1.- Incorrecto --> La respuesta correcta es: Eichiro Oda";
    }

    //Pregunta 2
    if (p2 == "tierra") {
        echo "2.- Correcta c:";
        $calificacion++;
    } else{
        echo "2.- Incorrecto --> La respuesta correcta es: Tierra";
    }

    //Pregunta 3
    if (p3 == "por que estoy aqui") {
        echo "3.- Correcta c:";
        $calificacion++;
    }else {
        echo "3.- Incorrecto --> La respuesta correcta es: por que estoy aqui";
    }

    //Pregunta 4

    //Pregunta 5
    if (p5 == "rebobinar") {
        echo "5.- Correcta c:";
        $calificacion++;
    }else{
        echo "5.- Incorrecto --> La respuesta correcta es: rebobinar";
    }

    //Pregunta 6
    if (p6 == "karasuno") {
        echo "6.- Correcta c:";
        $calificacion++;
    }else{
        echo "6.- Incorrecto --> La respuesta correcta es: Karasuno";
    }

    //Pregunta 7

    //Pregunta 8
    if (p8 == "mitsuya takashi" || "takashi mitsuya") {          
        echo "8.- Correcta c:";
        $calificacion++;
    }else{
        echo "Incorrecto --> La respuesta correcta es: mitsuya takashi";
    }

    //Pregunta 9

    //Pregunta 10
    if (p10 == "Kiznaiver") {
        echo "Correcta c:";
        $calificacion++;
    }else{
        echo "Incorrecto --> La respuesta correcta es: Kiznaiver";
    }


 ?>