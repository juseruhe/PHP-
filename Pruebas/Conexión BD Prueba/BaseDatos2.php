<?php
require("BaseDatos21.php");

if (isset($_POST["departamento"]) && !empty($_POST["departamento"]) && 
isset($_POST["capital"]) && !empty($_POST["capital"]) &&
isset($_POST["sitio"]) && !empty($_POST["sitio"]) 
)
{

$conexion = mysqli_connect($host,$usuario,$contrasena,$bd);

mysqli_query($conexion,"INSERT INTO departamentos(nombre_departamento,capital,sitio_turistico)
VALUES('$_POST[departamento]','$_POST[capital]','$_POST[sitio]') ");

echo("Datos Insertados a la Base de Datos");

}

else {
    echo("Error al insertar datos");
}


?>