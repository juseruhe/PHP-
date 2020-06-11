<?php
require("BaseDatos31.php");

if (isset($_POST["nombres"]) && !empty($_POST["nombres"]) && 
isset($_POST["apellidos"]) && !empty($_POST["apellidos"]) &&
isset($_POST["td"]) && !empty($_POST["td"])  &&
isset($_POST["Identificacion"]) && !empty($_POST["Identificacion"]) &&
isset($_POST["eps"]) && !empty($_POST["eps"]) &&
isset($_POST["localidad"]) && !empty($_POST["localidad"]) &&
isset($_POST["barrio"]) && !empty($_POST["barrio"]) &&
isset($_POST["poblacion"]) && !empty($_POST["poblacion"]) 
)
{

$conexion = mysqli_connect($host,$usuario,$contrasena,$bd);

mysqli_query($conexion,"INSERT INTO usuario(nombres,apellidos,tipo_documento,identificacion,eps,localidad,barrio,poblacion)
VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[td]' ,'$_POST[Identificacion]',
'$_POST[eps]','$_POST[localidad]','$_POST[barrio]','$_POST[poblacion]') ");

echo("Datos Insertados a la Base de Datos");

}

else {
    echo("Error al insertar datos");
}


?>