<?php


include("conexion.php");

if(isset($_POST['alumno']) && !empty($_POST['alumno']) && 
isset($_POST['correo']) && !empty($_POST['correo'] ) )  {

    $con = mysqli_connect($host,$user,$password,$bd);
    mysqli_query($con,("INSERT INTO alumnos (nombre,correo) VALUES ('$_POST[alumno]','$_POST[correo]')"));
echo"Datos Insertados";

}

else {

echo "error al insertar datos ";
}


?>