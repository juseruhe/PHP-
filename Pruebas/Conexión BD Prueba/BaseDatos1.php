<?php
require("BaseDatos.php");

if (isset($_POST["codigo"]) && !empty($_POST["codigo"]) && 
isset($_POST["nombres"]) && !empty($_POST["nombres"]) &&
isset($_POST["correo"]) && !empty($_POST["correo"]) &&
isset($_POST["identificacion"]) && !empty($_POST["identificacion"]) &&
isset($_POST["fecha"]) && !empty($_POST["fecha"]) && 
isset($_POST["curso"]) && !empty($_POST["curso"]) )
{

$conexion = mysqli_connect($host,$usuario,$contrasena,$bd);

mysqli_query($conexion,"INSERT INTO alumnos(codigo,nombres,correo,identificacion,fecha,curso)
VALUES('$_POST[codigo]','$_POST[nombres]','$_POST[correo]','$_POST[identificacion]','$_POST[fecha]', 
'$_POST[curso]' ) ");

echo("Datos Insertados a la Base de Datos");

}

else {
    echo("Error al insertar datos");
}


?>