<?php

$td = $_POST["td"];
switch($td){

case "Cédula": $td= "TD01";
break;

case "Tarjeta": $td= "TD02";
break;


default: echo "No hay documentación";
break;
};


$numero = $_POST["numero"];


$nombre = $_POST["nombre"];

$foto= $_FILES["foto"] ["name"];


$ruta= $_FILES["foto"] ["tmp_name"];

$destino="Fotos/".$foto;

copy($ruta,$destino);





$bd = mysqli_connect("localhost","root","","ingresorelacional");

$consulta = "INSERT INTO usuario(td,numero,nombre,foto)
VALUES('$td','$numero','$nombre','$destino') ";


$insercion = mysqli_query($bd,$consulta);


echo "<p> Datos ingresados a la Base de Datos </P>";

?>