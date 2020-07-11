<?php

$td = $_POST[td];
switch($td){

case "Cédula": $cosa= "TD01";
break;

case "Tarjeta": $cosa= "TD02";
break;


default: "";
break;
};


$numero = $_POST[numero];


$nombre = $_POST[nombre];


$bd = mysqli_connect("localhost","root","","ingresorelacional");

$insercion = mysqli_query($bd,"INSERT INTO usuario(numero_td,tipo_documento,nombre)
VALUES('$cosa','$numero','$nombre') " );


echo "<p> Conectar </P>";

?>