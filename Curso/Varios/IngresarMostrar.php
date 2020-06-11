<html>

<head> 

<title> Ingresar y Mostrar </title>
<meta charset="utf-8"/>

</head>

<form method="POST" action="IngresarMostrar.php"/>

Ingrese Nombre: <input type="text" name="nombre"/>  <br> <br>
Ingrese Apellido: <input type="text" name="apellido"/>   <br> <br>
Ingrese Teléfono: <input type="number" name="telefono"/> <br> <br>







<?php
$ID = "Per005";
$ingreso = mysqli_connect("localhost","root","12345","pruebas");

$consulta = "INSERT INTO personas(id,nombre,apellido,telefono)
VALUES ('$ID', '$_POST[nombre]', '$_POST[apellido]', '$_POST[telefono]')";

$consulta2 = "SELECT COUNT(id) as cuenta FROM personas";


$Llevar = mysqli_query($ingreso,$consulta);

$Llevar2 = mysqli_query($ingreso,$consulta2);

while ($resultado =  mysqli_fetch_array($Llevar2)) {

echo $resultado['id'],$resultado['nombre'],$resultado['apellido'],$resultado['telefono'];
};





$Cerrar = mysqli_close($ingreso);
?>

<input type="submit" name="Enviar Datos"/> 
</html>