<?php

$conectar = mysqli_connect("localhost","root","12345","ejemplo")
or die("Error al conectar Base de Datos");

$sentencia="SELECT COUNT(id) AS total FROM gente";

$sentencia2= "INSERT INTO gente(id,nombre) VALUES
('$_POST[id]','$_POST[nombre]')";

$sentencia3= "SELECT * FROM gente";

$consulta = mysqli_query($conectar,$sentencia)
or die("Error al hacer consulta de cantidad de usuarios registrados");

$consulta2 = mysqli_query($conectar,$sentencia2)
or die("Error al insertar datos");

$consulta3 = mysqli_query($conectar,$sentencia3)
or die("Error al hacer consulta de mostrar los datos del cliente");


$asociar = mysqli_fetch_assoc($consulta);

$mostrar = $asociar["total"];

echo "Hay ". $mostrar." personas registradas"."<br> <br> <br> <hr>";


echo "El Usuario Registrado Actual es:  ". $_POST["nombre"]. " con su identificación:  ". $_POST["id"]. "<br> <br> <br> <hr>";



while ($asociar3 = mysqli_fetch_assoc($consulta3)) 
{
$vistaid = $asociar3["id"];
$vistanombre = $asociar3["nombre"];

echo "El ID:".$vistaid. "  es de: " .$vistanombre. "<br>"."<hr>";

}

?>
